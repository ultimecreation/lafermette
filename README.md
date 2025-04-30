# php-mvc-fullstack


1. Config du projet config > config.php

            define('DB_HOST', 'localhost');
            define('DB_NAME', 'my_website');
            define('DB_USER', 'root');
            define('DB_PASS', '');

            // site CONSTANTS
            define('SITENAME', '');
            define('BASE_URL', 'http://localhost/php-mvc-framework');
            define('PUBLIC_URL', BASE_URL.'/public');

2. Création d'un modèle src > models > SomeModelModel.php

            <?php
            class UserModel extends Model
            {
                public function getAllUsers()
                {
                    $req = $this->bdd->prepare('select * from users');
                    $req->execute();
                    return $req->fetchAll();
                }
            }
            
3. Création d'un contrôleur src > controllers > SomeControllersController            

            <?php

            // $data = array(
            //     'template' => 'custom'
            // );


            class HomeController extends Controller
            {    
                public function index()
                {
                    // get the modelName and call a method 
                    $users = $this->getModel('UserModel')->getAllUsers()
                    
                    // passing data to the front using $data
                    $data['users'] = $users;
                    return $this->renderView('pages/index',$data);
                }
            }

4.Défissition d'une route src > Route > routes.php

            <?php
            class Routes
            {
                public static function getRoutes()
                {
                    /**
                     * route format url|goto
                     * url String (ie: '/',....)
                     * Controller/method/params (ie: 'HomeController','index')
                     * params Regex (ie: '(\d+)','(\W+)')
                     * examples
                     * ========
                     * array('url' => '/test/(\d+)',  'goto' =>  array('TestController', 'index')),
                     * array('url' => '/test/save', 'goto' =>  array('TestController', 'save')),
                     * array('url' => '/retest/update',  'goto' =>  array('RetestController', 'update')),
                     * array('url' => '/retest/delete',  'goto' =>  array('RetestController', 'delete')),
                     */
                    return [


                        array('url' => '/admin', 'goto' =>  array('AdminHomeController', 'index')),
                        array('url' => '/db-setup', 'goto' =>  array('DbSetupController', 'index')),

                        array('url' => '/', 'goto' =>  array('HomeController', 'index')),
                    ];
                }
            }


5. Création d'une Vue src > views > someFolder(inc,pages,admin,templates) > someFileName.php



6. Récupération des variables provenant du contrôleur


            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <?php echo $data['someData'];?>


            </body>
            </html>


7. css, js, images
8. 

=> public > assets > css > style.css

=> public > assets > js > main.js

=> public > assets > img > img.png
