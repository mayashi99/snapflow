<?php

require_once '../app/models/Organization.php';

class OrganizationController extends Controller
{
    var $organizationModel;

    public function __construct()
    {
        $this->organizationModel = new Organization();
    }

    public function getOrganizations()
    {
        $organizations = $this->organizationModel->getOrganizations();

        return $organizations;
    }

    public function getNotAcceptedOrganizations()
    {
        $organizations = $this->organizationModel->getNotAcceptedOrganizations();

        return $organizations;
    }

    public function acceptOrganization()
    {

        if (isset($_POST['submitAccept'])) {
            $data = [
                'id' => $_POST['id'],
            ];

            if ($this->organizationModel->acceptOrganization($data)) {
                header('location:' . URLROOT . '/PageController/admintable');
            } else {
                die('Something went wrong');
            }
        }
    }

    public function deleteOrganization()
    {

        if (isset($_POST['submitDelete'])) {
            $data = [
                'id' => $_POST['id'],
            ];

            if ($this->organizationModel->deleteOrganization($data)) {
                header('location:' . URLROOT . '/PageController/admintable');
            } else {
                die('Something went wrong');
            }
        }
    }


    public function searchOrganization()
    {

        if (isset($_POST['submitSearch'])) {
            $data = [
                'date' => $_POST['date'],
                'type' => $_POST['type'],
            ];

            $organizations=$this->organizationModel->searchOrganization($data);
            if ($organizations) {
                session_start();
                $_SESSION['data'] = $organizations;
                header('location:' . URLROOT . '/PageController/organization');
            } else {
                die('Something went wrong');
            }
        }
    }
}
