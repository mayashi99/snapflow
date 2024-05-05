<!DOCTYPE html>
<html>

<head>
  <title>Admin Table</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admintable.css">
</head>

<body>

<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
    </div>
    <div>
      <a href="<?php echo URLROOT ?>/PageController/blog">Home</a>
      <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>
  <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>

  <?php var_dump($data) ?>

  <h3>Photography Oranization Request</h3>
  <table class="center">
    <tr>
      <th>Organization Name</th>
      <th>Description</th>
      <th>Skills</th>
      <th>Experence</th>
      <th>Select</th>
    </tr>

    <?php foreach ($data as $row) : ?>
      <tr>
        <td><?php echo $row->orname; ?></td>
        <td><?php echo $row->description; ?></td>
        <td></td>
        <td></td>
        <td>
          <div>
          <form method="post" action="<?php echo URLROOT; ?>/OrganizationController/acceptOrganization">
            <input type="hidden" name="id" value="<?php echo $row->organi_id; ?>">
            <button class="btn Accept" name="submitAccept" value="submitAccept" type="submit">Accept</button>
          </form>
      
          <form method="post" action="<?php echo URLROOT; ?>/OrganizationController/deleteOrganization">
            <input type="hidden" name="id" value="<?php echo $row->organi_id; ?>">
            <button class="btn Delete" name="submitDelete" value="submitDelete" type="submit">Delete</button>
          </form>
          </div>

        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>