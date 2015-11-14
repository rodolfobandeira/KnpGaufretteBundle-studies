KnpGaufretteBundle-studies
===

####Goal:
1. Learn how to configure KnpGaufretteBundle and Symfony2 PHP Framework;
2. Create Upload form and save images on Amazon S3;
2. Run the same application on 2 web-nodes behind a loadbalancer HAProxy;
3. Deploy the same application in both webservers;
4. Disable web-node1 and check the availability of the system. Must be always online;
5. Set triggers on Amazon CloudWatch to scale horizontally (Increase and Decrease number of webnodes automatically);

A Symfony project created on November 13, 2015, 10:17 pm.

####Setup:
- `git clone https://github.com/rodolfobandeira/KnpGaufretteBundle-studies.git`
- `cd KnpGaufretteBundle-studies`
- `composer install --prefer-dist`
- `php app/console server:run`
- `http://127.0.0.1:8000`

---

Contact: 

[https://twitter.com/rodolfobandeira](https://twitter.com/rodolfobandeira)
