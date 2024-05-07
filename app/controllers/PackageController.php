<?php

require_once '../app/models/Package.php';

class PackageController extends Controller
{
    private $packageModel;
    var $pageController;

    public function __construct()
    {
        $this->packageModel = $this->model('package');
        $this->pageController = $this->controller('pageController');
    }

    public function index()
    {
        $packages = $this->packageModel->getPackages();
        $data = [
            'packages' => $packages
        ];
        $this->view('packages/index', $data);
    }

    public function createPackage()
    {
        if (!isset($_SESSION['packages'])) {
            $_SESSION['packages'] = [];
        }


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'pack_name' => trim($_POST['pack_name']),
                'soft_copy_price' => intval(trim($_POST['soft_copy_price'])),
                'hard_copy_price' => intval(trim($_POST['hard_copy_price'])),
            ];

            // $_SESSION['packages'][] = $data;

            $e = $this->packageModel->addPackage($data);
            // header('Location: ' . URLROOT . '/PageController/newpackage');
            $data['err'] = $e;
            $this->pageController->packagetable();
            exit();
        }
    }



    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                //'id' => $id,
                'pack_code' => $_POST['pack_code'],
                'pack_name' => $_POST['pack_name'],
                //'description' => $_POST['description'],
                'hard_copy_price' => $_POST['hard_copy_price'],
                'soft_copy_price' => $_POST['soft_copy_price'],
            ];
            $e = $this->packageModel->updatePackage($data);
            // header('Location: ' . URLROOT . '/PageController/newpackage');
            $data['err'] = $e;
            $this->pageController->packagetable();
            exit();

        //     if ($this->packageModel->updatePackage($data)) {
        //         // Redirect to index page
        //         header('Location: ' . URLROOT . '/package/index');
        //     } else {
        //         die('Something went wrong');
        //     }
        // } else {
        //     $package = $this->packageModel->getPackageById($id);
        //     $data = [
        //         'package' => $package
        //     ];
        //     $this->view('packages/edit', $data);
        }
    }

    public function delete()
    {
        // if (isset($_GET['code'])) {
            $data = [
                'pack_code' => $_GET['code']
            ];

            $e = $this->packageModel->deletePackage($data);
            $data['err'] = $e;
            $this->pageController->packagetable();
            exit();
        // if ($this->packageModel->deletePackage($id)) {
        //     // Redirect to index page
        //     header('Location: ' . URLROOT . '/package/index');
        // } else {
        //     die('Something went wrong');
        // }
        // }
    }
}