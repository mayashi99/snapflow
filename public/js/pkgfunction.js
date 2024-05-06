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
      description = "Imagine the romance of a wedding day, where love fills the air and every glance between the bride and groom speaks volumes. As a wedding photographer, you're not just snapping pictures; you're weaving a visual narrative of two souls intertwining their destinies amidst the beauty of the ceremony and celebration.";
      break;
    case 2:
      event = "Birthday";
      
      break;
    case 3:
      event = "Get Together";
     
      
      break;
    case 4:
      event = "Graduation";
     
      break;
    case 5:
      event = "Party";
     
      break;
   
  }

  var displayContent = "<span class='event-text'>" + event + "</span><br><br><br><br><span class='price-label'>Price with hard copy:</span> " + price_HC + "<br><span class='price-label'>Price without hard copy:</span> " + price_SC + "<br><span class='price-label'>Time Duration:</span> " + time + "<br><span class='price-label'>Photo Limit:</span> " + photoLimit + "<br><span class='price-label'>Available Photographers:</span> " + association + "<br><br><br><span class='normal-text'>Click the link below to get a custom quotation with ongoing discounts and promotions. <br>We highly recommend you to place a free booking to reserve the date and to avoid any price fluctuations.</span><br><br><br><br><a href='booking.php'><button class='book-now-btn'> Book Now </button></a>";
  document.getElementById('display').innerHTML = displayContent;
}
