<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Form</title>
  <link rel="stylesheet" href="css/subscription.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <input type="checkbox" id="toggle">
  <label for="toggle" class="show-btn">Show Modal</label>
  <div class="wrapper">
    <label for="toggle">
      <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <header>Get Our MemberShip</header>
      <p>If you take our Membership then for all person get 20% discount. <br>Per person 1000 ₹ Cost.</p>
    </div>
    <form action="atm2.php" method="POST">
      <div class="alert error-alert">
        <div class="field">
          <input type="text" class="email" name="m_porson" placeholder="Member Porson" pattern="[0-9]{1,2}" title="Take membership for 1 to 99 person">
        </div>
        <div class="field btn">
          <div class="layer"></div>
          <button type="submit" name="subscribe">Subscribe</button>
        </div>
    </form>
  </div>

</body>

</html>