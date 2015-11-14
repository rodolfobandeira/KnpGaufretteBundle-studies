KnpGaufretteBundle-studies
===

####Goal:
- [x] Learn how to configure KnpGaufretteBundle and Symfony2 PHP Framework;
- [x] Create Upload form and save images on Amazon S3;
- [ ] Run the same application on 2 web-nodes behind a loadbalancer HAProxy;
- [ ] Deploy the same application in both webservers;
- [ ] Disable web-node1 and check the availability of the system. Must be always online;
- [ ] Set triggers on Amazon CloudWatch to scale horizontally (Increase and Decrease number of webnodes automatically);

A Symfony project created on November 13, 2015, 10:17 pm.

####Setup:
- `git clone https://github.com/rodolfobandeira/KnpGaufretteBundle-studies.git`
- `cd KnpGaufretteBundle-studies`
- `composer install --prefer-dist`
- `mv app/config/amazon_s3.yml.dist app/config/amazon_s3.yml`
- `vim app/config/amazon_s3.yml` (Edit your Amazon configuration)
- `php app/console server:run`
- `http://127.0.0.1:8000`

---

####Reference:

- [https://github.com/Elorfin/AS3AccessorSandbox](https://github.com/Elorfin/AS3AccessorSandbox) Got nice ideas like 
adding all the config in just one file called: `app/config/amazon_s3.yml` :thumbsup:
- [https://github.com/KnpLabs/KnpGaufretteBundle](https://github.com/KnpLabs/KnpGaufretteBundle) Official Bundle 
repository. The full documentation is on their [README](https://github.com/KnpLabs/KnpGaufretteBundle/blob/master/README.markdown)
- [https://github.com/KnpLabs/Gaufrette/blob/master/src/Gaufrette/Adapter/AmazonS3.php](https://github.com/KnpLabs/Gaufrette/blob/master/src/Gaufrette/Adapter/AmazonS3.php)
To understand better how the AmazonS3 Adapter works.


--- 

####Contact: 

[https://twitter.com/rodolfobandeira](https://twitter.com/rodolfobandeira) - Got a problem? Some idea? Drop me a message!
