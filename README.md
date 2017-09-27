# CakePHP 3 Integration Testing Example

## Installation

Create project clone as following.

`git clone https://github.com/multidots/cakephp-integration-test.git`

Now go to project folder and execute following command.

`composer update`

## Configuration

Create `config/app.php` file throught copy of file `app.default.php`

Read and edit `config/app.php` and setup the `'Datasources'` and `'test'`
configuration relevant for application.

Now run following command to create a Users table in database.

`bin\cake migrations migrate`

Now To run Integration testing execute following from root path of project folder.

`vendor\bin\phpunit tests\TestCase\Controller\UsersControllerTest.php`

