function selectPackage(type) {
  var buttons = document.querySelectorAll('.button-container button');
  buttons.forEach(function (button) {
    button.classList.remove('selected');
  });

  var selectedButton = document.querySelector('.button-container button:nth-child(' + type + ')');
  selectedButton.classList.add('selected');

  var price_HC, price_SC, time, photoLimit, association, event;
  switch (type) {
    case 1:
      event = "Wedding";
      price_HC = 75000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
    case 2:
      event = "Birthday";
      price_HC = 45000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
    case 3:
      event = "Get Together";
      price_HC = 65000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
    case 4:
      event = "Graduation";
      price_HC = 35000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
    case 5:
      event = "Party";
      price_HC = 40000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
    case 6:
      event = "Corporate Event";
      price_HC = 65000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
    case 7:
      event = "Custom";
      price_HC = 60000;
      price_SC = 40000;
      time = 6;
      photoLimit = "unlimited";
      association = "IMAGOO";
      break;
  }

  var displayContent = "<span class='event-text'>" + event + "</span><br><br><br><br><span class='price-label'>Price with hard copy:</span> " + price_HC + "<br><span class='price-label'>Price without hard copy:</span> " + price_SC + "<br><span class='price-label'>Time Duration:</span> " + time + "<br><span class='price-label'>Photo Limit:</span> " + photoLimit + "<br><span class='price-label'>Available Photographers:</span> " + association + "<br><br><br><span class='normal-text'>Click the link below to get a custom quotation with ongoing discounts and promotions. <br>We highly recommend you to place a free booking to reserve the date and to avoid any price fluctuations.</span><br><br><br><br><a href='booking.php'><button class='book-now-btn'> Book Now </button></a>";
  document.getElementById('display').innerHTML = displayContent;
}
