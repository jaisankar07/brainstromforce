# brainstromforce
wordpress website
                                                          LEMP -Server [https://brainstromforce.serveirc.com] 

Hosting WordPress on Nginx is a common and efficient way to run your WordPress website. Here are the general steps to host WordPress on Nginx: 

1. Set Up a Server:  

You'll need a server or a virtual private server (VPS) where you can install Nginx. One of the Popular VPS 		provider AWS, Google Cloud, and more. Choose one that suits your needs and budget. 

1.1 Launching Instance: 

             1.1.1 select the OS as per the requirement:      		 

                                 

1.1.2 select the instance type and keypair: 

   

                                 

 

 

            LEMP KEY   

 LEMP.pem:  

 

{-----BEGIN RSA PRIVATE KEY----- 

MIIEpAIBAAKCAQEA0bd04sjF9sfCjiMx/lei6vtxLdLI3gFsVv8d6ezyn+WQd5UO 

yz/Dnl3ZPCvjbtPmlK0pLsJ3RqGeclJLTfx2utYTuGwBM56L0nH5r93fk3Fk+RpM 

X5IatyFAu4WBTlOmFMZJAvjtIg1Xp04r3g2O6khXHO7sYhjBI16A7a4jjK5c70IF 

6+QUYv60IyQkQAn30P7uPGOZ/YFBMnzJ9Xf0MGSeB7c+igf6RShcqoTa1jtKoL2G 

KQo4AXKN1EGt6qRVz/Fd+8H4urjYIaxB7ZCkAVTcmz5rYWeq9fTBLPYhiC4ihfc0 

mF3gbsYWVwweiAcjDps6j9Q1vHhr+6mkO7mrQwIDAQABAoIBAGENTol5MqwfC/lt 

bkBvXBT04g67wnuDGxkznStZnXrD6VR95cfHrYbHlbXT9b+fTtE1RZ6/HiXQu5va 

W8Eued/DHIM3cGLsF3b/ifaKbmI0ku747ak42yYuvF9LzGhsK6rnjHhUrKEanZru 

gTyU97OSYMYiB8DqBc+Rd4cHFKqQW288aCdRMJK7HZQoXhCDcyel26yxR4w9oT/b 

O469RfA+x1SjsQJNvTOVkV33BiVQ3VjFCHiE9XLlaEIXVcwL1J7M/KRgBQiRSJI0 

ZippJ81jpp4zCFEAayXKeCh5FvLOOZCT5n4xFXc+2mD6JXHetySkLPseZk9+kyTx 

EfNR8hkCgYEA/IKUxmur9bvZoqWK//+JFIl2izOhse6jUOiuRMGcHMJ2+wen7WQ5 

WeL24S5RxNIFiL8i0kpXtFsCTXwW1TULma04QLSOif8l+1DVgZux+va1k7H1Opf9 

Qd2xXPA5o1HvMcq7t8+LaNia/FCy36OkQCtUoehL4+h2uViY97DdGMcCgYEA1J13 

OU7DCe52pU2SGaJtzC9GHZzZ4FBBjWrhy6hrMZsufZ75VO3fT0Pb74QQI+pfalYz 

rC8kg/jdIKL9YIbJis+X40UnFIvuaxso+mKsMPERdF2YG32NY0b+m7GN7iD/vcA1 

YC+10EmvE4KM0LB5Zc88FRGfDAhIAQWidJOstaUCgYEAsL31xKy4wFesDdwxXt5N 

5MIS53xMQW73gTpcQGQEEV1MSokhUVhFjFUA2LzDHzCiDwU6Klc+7E6HXhTtJm7q 

n7ZPGXtICe89dpst1npUKYVlsuts6oZYDjJOYu8CaP6Anil5Gz96JPj4AoO5sC+q 

V//8TRd7hxq/fxw0daqmFyECgYEApvjzBKKCMW6A5tjAgDk7mTsXCXKA+NSOZo0l 

vlcJt+9y11zd2oDk+s8EDlncgxgwzsXb1sE/IBV1M4hNDF1OMiFN20IXqt8p4ht2 

VwzexaDMYGKQbiZvvyOmGIecOwLXVSF5yYwucOEtCVlhVRMCg534RWONUFnAkmzm 

ZD8FR7ECgYBY+6pm1R+vxLEoZE63GUhHv8YvvxZi5MS33YpAke5GGk77vwrsXKli 

wZUwSUlZac0DD72yUp/EOR7m1Yo0QxkWRHFxRj3GO+ClV/77drwss1ElTpsL+xzE 

ROI+zpa4nVOaCCqpCmt88H8gBLRH9/Ly+2CU5C8G3CmeXv+b+ItJeg== 

-----END RSA PRIVATE KEY-----} 

 

 

 

 

1.1.3 select the instance network type as per requirement: 

	 

1.1.4 select the instance storage as per requirement: 

 

 After Launching the instance will be in Running status: 

 

 

 

 

 

2. Connecting the Linux server: 

Use Mobaxterm or PuTTY as SSH clients to access the remote Linux servers from their local Windows systems.  Here I’m using Mobaxterm  

 

Afte login the page will be looks like the below: 

 

 

3. Install Nginx: 

Once you have your server, you'll need to install Nginx on it. The exact commands for installation of your server's operating system. Here's Ubuntu 

```sudo apt update 

    sudo apt upgrade 

    sudo apt install nginx``` 

 

 

3.1 To check the version of Nginx installed on your server: 

 you can use the following command in your terminal 

``` nginx -v ``` 

 

 

 	4. Install WordPress: 

 4.1 Download and extract the WordPress files into your web root directory 

     ``` cd /var/www/html/ 

           			     sudo wget https://wordpress.org/latest.tar.gz 

            		                    sudo tar -xzvf latest.tar.gz``` 

 

4.2 Configure WordPress: 

Next, you need to configure WordPress to connect to the MySQL database. Navigate to the 			WordPress directory: 

     		```cd /var/www/html/WordPress```  

 

4.3 Copy the sample configuration file to create a wp-config.php file:  

```sudo cp wp-config-sample.php wp-config.php``` 

 

5. Install MySQL: 

   	WordPress also requires a database to store its content. You can use MySQL for this purpose. Install the database server and create a new database and user for WordPress.  	 

5.1 Update Package Lists: 

Before installing MySQL, it's good practice to update your package lists to ensure you have the latest information about available packages. Open your terminal and run: 

```sudo apt update``` 

5.2 Install MySQL Server:  

To install MySQL server, use the following command For MySQL: 

                       		 ```sudo apt install mysql-server ``` 

 

			```systemctl status mysql ``` 

 

5.3 MySQL Security Configuration: 

After the installation, it's recommended to run the MySQL security script to further secure your installation. Run the following command: 

```sudo mysql_secure_installation``` 

This script will prompt you to: 

Set a root password if you haven't already during installation. 

Remove anonymous users. 

Remove the test database (if you don't need it). 

Reload privilege tables to apply changes. 

5.4 Login to MySQL server: 

```sudo mysql -u root``` 

 

 

5.4.1 Change authentication plugin to mysql_native_password (change the password to something strong): 

            ``` ALTER USER 'root '@'localhost' IDENTIFIED WITH mysql_native_password by'Testpassword@123'; ```  

 

5.4.2 Create a new database user for WordPress (change the password to something strong): 

```CREATE USER 'wp_user'@localhost IDENTIFIED BY 'Testpassword@123'; ``` 

 

5.4.3 Create a database for WordPress 

  ```CREATE DATABASE wp; ``` 

 

 

5.4.4 Grant all privileges on the database 'wp' to the newly created user 

                     ```GRANT ALL PRIVILEGES ON wp. * TO 'wp_user'@localhost;``` 

 

Ctlr+D to exit from MYSQL 

4.4 Edit the wp-config.php file to add your database connection details: 

You can use a text editor like Nano or Vi: 

				``` cd /var/www/html/wordpress``` 

                    			   ``` sudo vi wp-config.php ``` 

4.5 Find the following lines and update them with your database information (database name, username, and password): 

 

 

4.6 Your unique phrase: 

 		use this link to create your own unique phrase to secure the word press    [https://api.wordpress.org/secret-key/1.1/salt] 

 

Direct File System Method: 

		When you set FS_METHOD to 'direct', WordPress will attempt to perform file system operations directly without using FTP or SSH connections. This method is used when WordPress has written access to the files and directories on the server. 

 

 

 

6. Install PHP and PHP-FPM: 

Install PHP and PHP-FPM (PHP Fast CGI Process Manager), which is used to handle PHP requests: 

 			```sudo apt install php-fpm``` 

 

6.1 Install PHP MySQL Extension: 

Install the PHP MySQL extension `php-mysql` to enable PHP to connect to MySQL databases: 

```sudo apt install php-mysql``` 

 

6.2 Start and Enable PHP-FPM: 

Start the PHP-FPM service and enable it to start automatically at boot: 

```sudo systemctl start php8.1-fpm   # Adjust the version as needed``` 

```sudo systemctl enable php8.1-fpm # Adjust the version as needed``` 

 

7.Configure Nginx to Work with PHP: 

You need to configure Nginx to process PHP files using PHP-FPM. Open your Nginx server block configuration file (usually found in `/etc/nginx/sites-available/`) and add or modify the relevant location block to include PHP processing. Here's an example of a basic Nginx server block configuration: 

``` cd /etc/nginx/sites-available ``` 

 

    				``` sudo vi default ``` 

 

EDIT default file to as per the below config: 

``` root /var/www/html/wordpress; 

      				 index index.php index.html; 

 location / { 

         					 try_files $uri $uri/ /index.php?$query_string; 

    } 

     				 location ~ \.php$ { 

         					include snippets/fastcgi-php.conf; 

          				     fastcgi_pass unix:/var/run/php/php7.4-fpm.sock; # Adjust the version as needed 

      				 	} 

 location ~ /\.ht { 

         					  deny all; 

       					} 

  				 }    ``` 

 

7.1 Restart nginx: 

To restart the Nginx web server, you can use the following command: 

``` sudo systemctl restart nginx``` 

7.2 To View the wordpress on web 

	http://your_server_ip/ 

 

 

 

 

7.3 Click on install: 

	 

7.3 Wordpress Home: 

 

	 

 

 

 

 

 

8. Register a domain: 

8.1 Copy the public Ip from Aws console: 

 

8.2 LOGIN in noip.com 

 You can use free domain names from https://www.noip.com/ service. This is 

a completely free service to create temporary host names. If you Don’t have account create a new. 

		 

8.3 Create a Hostname: 

1.give your hostname		 

2. give Ip of your server 

3.Select record type 

		 

8.4 To View the wordpress on web 

http:brainstromforce.serveirc.com 

 

9. Implement SSL/TLS certificate: 

9.1 Install Certbot: 

Certbot is a tool that helps you obtain and manage SSL/TLS certificates from Let's Encrypt, a free certificate authority. You can install Certbot with the following command: 

``` sudo apt install certbot python3-certbot-nginx``` 

 

9.2 Obtain an SSL/TLS Certificate: 

Run Certbot to obtain an SSL/TLS certificate for your domain. Replace [https://brainstromforce.serveirc.com] <your_domain.com>. with your actual domain name: 

```sudo certbot --nginx -d brainstromforce.serveirc.com``` 

   

 

 

 

 

 

 

 

 

9.3 Reload Nginx: 

To apply the SSL/TLS configuration changes, reload Nginx: 

``` sudo systemctl reload nginx``` 

9.4 SSL Certificate: 

That's it! Your Nginx web server should now be using SSL/TLS with a valid certificate from Let's Encrypt. Your website will be accessible via HTTPS, providing encrypted communication for improved security. 

 

                                                    

 

				 

 

10. Adding Hosts to server SSH: 

	10.1 Open the /etc/hosts file for editing with a text editor vim. 

``` sudo vi /etc/hosts``` 

Replace IP_ADDRESS with the actual IP address of your server and HOSTNAME with "brainstormforce.serveirc.com." 

 

10.2 Generate a New SSH Key Pair: Use the ssh-keygen command to generate a new SSH key pair. You can use the following command to generate an RSA key pair (one of the most common key types): 

		``` cd .ssh``` 

``` ssh-keygen -t rsa -b 4096 -C "jaisankars2017@gmail.com"  ``` 

10.3 Copy the Public Key: Use the cat command to display the content of the public key (id_rsa.pub by default), and then copy the entire public key: 

				``` cat ~/.ssh/id_rsa.pub``` 

 

10.4 Add the Public Key to Your Server: Log in to your server and add the copied public key to the ~/.ssh/authorized_keys file for the ubuntu user (or the appropriate user) on your server. You can use a text editor to edit the file or use the echo command to append the 

		``` echo "PASTE_YOUR_PUBLIC_KEY_HERE" >> ~/.ssh/authorized_keys ``` 

10.5 Secure the Private Key: Ensure that your private key (id_rsa by default) is protected and has the correct permissions: 

``` chmod 600 ~/.ssh/id_rsa``` 

10.6 Now, you should have a new SSH key pair, and you can use the private key (id_rsa) for SSH authentication. 	Make sure to update your SSH client configuration to use this new private key when connecting to your server: 

	``` ssh -i /home/ubuntu/.ssh/id_rsa ubuntu@brainstormforce.serveirc.com``` 

10.5 making ssh between server and github : 

     		 

 

add all your secrets in github repo  

		1.host name 

		2.host ip 

		3.public key  

Settings >secrets>actions>new repo secrets  

 

Add your ssh pub key to ssh tap in settings  

 

 

 

 

 

 

 

11. Prepare Your WordPress Repository 

11.1 Initialize a Git Repository Locally: 

If your WordPress website is not already in a Git repository, you'll need to initialize one locally: 

Run the following commands: 

			``` cd /var/www/html/wordpress ``` 

```git init``` 

```git add``` 

11.2 Change Ownership of the Repository Directory: 

Run the following command to change the ownership of your Git repository directory and all its contents to your user: 

		``` sudo chown -R $USER:$USER /var/www/html/wordpress ``` 

		``` git commit -m "source code push to repo" ``` 

 

11.2 User Configuration: 

                   			  ``` git config --global user.name "jaisankar07" ``` 

	        			``` git config --global user.email jaisankars2017@gmail.com ``` 

			 

		to change to main: 

					``` git branch -m master main ``` 

11.3 Connect Your Local Repository to GitHub: 

        			To connect your local Git repository to the GitHub repository you created: 

			``` git remote add origin https://github.com/jaisankar07/brainstromforce.git ``` 

		 

	Next, push your local repository to GitHub: 

				``` git pull --rebase origin main ``` 

					``` git push -u origin main ``` 

 

11.4 successful push: 

		 

12. Create a GitHub Actions Workflow: 

In your GitHub repository, create a .github/workflows directory if it doesn't exist. Inside this directory, 	create a YAML file (e.g., deploy.yml) to define your CI/CD workflow.	 

 

 

 

12.1 Deploy.yml 

 

	``` name: Deploy WordPress 

  

on: 

  push: 

    branches: 

      - main 

  

jobs: 

  deploy: 

    runs-on: ubuntu-latest 

  

    steps: 

      - name: Checkout code 

        uses: actions/checkout@v2 

  

      - name: Install dependencies (if needed) 

        run: | 

          # Add commands to install any dependencies (e.g., Composer, npm) 

          # Example: npm install 

      - name: Set up SSH key 

        uses: webfactory/ssh-agent@v0.5.4 

        with: 

          ssh-private-key: ${{ secrets.SSH_PRIVATE_KEY}} 

         

      - name: Deploy to VPS 

        run: | 

          # Define the destination directory on your VPS where you want to deploy WordPress 

          destination_dir="/var/www/html/wordpress" # Replace with the actual path 

          ssh -o StrictHostKeyChecking=no -i ${{ secrets.SSH_PRIVATE_KEY_PATH }} ${{ secrets.USERNAME }}@${{ secrets.HOST }}'cd $destination_dir && git status' 

          # Uncomment and customize SCP or SFTP command as needed 

          # scp -i ${{ secrets.SSH_PRIVATE_KEY_PATH }} -r ./* ${{ secrets.USERNAME }}@${{ secrets.HOST }}:$destination_dir/ 

          # Uncomment and customize service restart commands if needed 

          # ssh ${{ secrets.USERNAME }}@${{ secrets.HOST }} 'sudo systemctl restart nginx' 

  

    env: 

      SSH_PRIVATE_KEY_PATH: ${{ secrets.SSH_PRIVATE_KEY}} 

      USERNAME: ${{ secrets.USERNAME }} 

      HOST: ${{ secrets.HOST }} ``` 

		 

 

12.2 Successful deployment: 

	 

		 

		 

 

 

 

 

 

 

 

 

 

 

 
