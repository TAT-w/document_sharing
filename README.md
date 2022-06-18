Document sharing
> The Online `Document Sharing` System is a simple file sharing platform project that can help a company share their documents. <br/>

> The system works this way. For example, a teacher will store the students' modules soft copies for week 1 in a single document and save it with the title of "Module set for week 1" and the teacher can add notes in the description box. After that, the teacher will click the "Share this Document" button on the document view page to get the shareable link. Then when the student browses the shared link in his/her browser, the document details and files will be shown, then the student can download the files by clicking the download.

## Member
|ID|Name|Details|
|---|---|---|
|1|`Dao Duy Quy`|Fullstack|
|---|---|---|
|2|`Dang Thien Hao`|Fullstack|

```mermaid
graph TD;
    Login-->Admin;
    Login-->User;
    Admin-->Share;
    User-->Share;
```
### Requirements
* [phpmyadmin](https://github.com/phpmyadmin/phpmyadmin)
* [AdminLTE](https://github.com/ColorlibHQ/AdminLTE)
* [LAMP](https://github.com/teddysun/lamp) 
* [Goole APIS Client](https://github.com/googleapis/google-api-php-client)
## Deployment
* Download the source code.
```shell
git clone https://github.com/T-AT/document_sharing
```
* Open the web-server database and create a new database name it odss_db and my_db.
* Copy and paste the source code to the location where your local web server accessing your local projects.
`Example: Ubuntu`
```shell
cp -r document_sharing /var/www/
```

* Install AdminLTE
```shell
composer require "almasaeed2010/adminlte=~3.2"
```
* Install Google APIs Client
```shell
composer require google/apiclient:"^2.0"
```
* Open a web browser and browse the project. E.g [localhost](http://localhost/document_sharing)
> With Ubuntu
> ```shell
> sudo systemctl start apache2
> sudo systemctl start mariadb
> ```

### Platforms
- [x] Windows 7,8,10,11
- [x] Linux
- [x] macOS
- [x] iOS (in progress)
- [x] android (soon)

## Features
### Both Admin and Users Side
* Login Page
  * The page where system users will submit their credentials to access the data and functionalities of the system.
<p align='center'><img src="https://github.com/T-AT/document_sharing/blob/main/assets/uploads/login.png"></p>
* Dashboard Page
  * The page where the system users will be redirected by default after logging into the Online Document Sharing System.
<p align='center'><img src="https://github.com/T-AT/document_sharing/blob/main/assets/uploads/home.png"></p>
* Manage Account Modal
  * The popup modal where the system users update their system credentials such as their email and password.
* Document List
  * The page where all documents are listed. The admin can see all the documents that been created in the system while the users can only see his/her created documents.
<p align='center'><img src="https://github.com/T-AT/document_sharing/blob/main/assets/uploads/document.png"></p>
* Manage Document Page
  * The page where the system users create or update a document.
* Document View Page
  * The page where the system user can download the files of the document.
### Admin Side
* New User Page
  * The page where can system admin create a new user.
* Manage Users
  * This feature includes View, Edit, and Delete for the user list.


#### account test:
* Default Admin Access
`admin@admin.com`
admin123 <br/>
* Default Test Access
`test@test.com`
test123
* You can sign with account `Google`

![Alt](https://repobeats.axiom.co/api/embed/db5b20e88913db8908aaa356e9d4a2105054c91e.svg "Repobeats analytics image")

<details><summary>Syuq</summary>
<p>

#### We can hide anything!
[Syuq](https://github.com/Syuq)
</p>
</details>

[!Issues](https://github.com/T-AT/document_sharing/issues/new)
