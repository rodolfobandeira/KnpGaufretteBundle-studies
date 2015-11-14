<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AmazonS3;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $onlyFiles = [];
        $amazonS3 = $this->get('knp_gaufrette.filesystem_map')->get('amazon');

        // Create Upload form
        $form = $this->createFormBuilder()
            ->add('upload_file', 'file')
            ->add('save', 'submit')
            ->getForm();
        if ($this->getRequest()->isMethod('POST')) {
            // Process form if needed
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $data = $form->getData();
                $uploadedFile = $data['upload_file'];
                $filename = $uploadedFile->getClientOriginalName();
                try {
                    $adapter = $amazonS3->getAdapter();
                    $adapter->setAcl(AmazonS3::ACL_PRIVATE);
                    $adapter->setMetadata($filename, array('contentType' => $uploadedFile->getClientMimeType()));
                    $adapter->write($filename, file_get_contents($uploadedFile->getPathname()));
                } catch(\Exception $e) {
                    die($e->getMessage());
                }
            }
        }
        
        
        $files = $amazonS3->keys();

        foreach($files as $file) {
            if (preg_match('/\./s', $file)) {
                $onlyFiles[] = $file;
            }
        }

        $urlPrefix = sprintf("%s/%s/",
            $this->container->getParameter('amazon_s3_url'),
            $this->container->getParameter('amazon_s3_bucket')
        );

        return $this->render('AppBundle:default:index.html.twig', [
            'files' => $onlyFiles,
            'urlPrefix' => $urlPrefix,
            'upload_form' => $form->createView()
        ]);
    }


    /**
     * @Route("/upload", name="upload")
     */
    public function uploadAction(Request $request)
    {
        $amazonS3 = $this->get('knp_gaufrette.filesystem_map')->get('amazon');

        die('<p>end_upload</p>');
    }


}
