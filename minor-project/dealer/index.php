<?php
$con=mysqli_connect("localhost","root","","greengrocer");
if(!$con)
{
  echo"Connection failure";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Greengrocers</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="dealers-list">
      <h2>Dealer list</h2>

      <input class="dealer-search" type="text" placeholder="Search here..." />

      <div class="dealers"></div>
    </div>

 <?php  
      $sql = "SELECT dealer_name,dealer_image,dealer_details FROM dealer";
      $result = $con->query($sql);

$dealers = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $dealers[] = [
      'Name' => $row["dealer_name"],
      'image' => $row["dealer_image"],
      'details' => $row["dealer_details"],
    ];
  }
} else {
  echo "0 results";
}
$con->close();
?>

<script>
const dealers = JSON.parse('<?php echo json_encode($dealers); ?>');
//using php echo to pass vender array in javascript

const dealersHeading = document.querySelector(".dealers-list h2");
const dealersContainer = document.querySelector(".dealers-list .dealers");
const dealerSearch = document.querySelector(".dealers-list .dealers-search");

let searchTerm = "";

if (dealers.length == 1) {
  dealersHeading.innerHTML = `${dealers.length} dealer`;
} else {
  dealersHeading.innerHTML = `${dealers.length} dealers`;
}

const createdealerListingCards = () => {
  dealersContainer.innerHTML = "";

  dealers.forEach((dealer) => {
    if (dealer.Name.toLowerCase().includes(searchTerm.toLowerCase())) {
      let dealerCard = document.createElement("div");
      dealerCard.classList.add("dealer");

      let image = document.createElement("img");
      
      //adding correct image directory
      image.src ='../homepage/product/'+ dealer.image;

      let Name = document.createElement("h3");
      Name.innerHTML = dealer.Name;
      Name.classList.add("dealer-Name");

      let details = document.createElement("div");
      details.innerHTML = dealer.details;
      details.classList.add("details");

      let detailsBtn = document.createElement("a");
      detailsBtn.href = "#";
      detailsBtn.innerHTML = "More Details";
      detailsBtn.classList.add("details-btn");

      dealerCard.appendChild(image);
      dealerCard.appendChild(Name);
      dealerCard.appendChild(details);
      dealerCard.appendChild(detailsBtn);

      dealersContainer.appendChild(dealerCard);
    }
  });
};

createdealerListingCards();

dealerSearch.addEventListener("input", (e) => {
  searchTerm = e.target.value;

  createdealerListingCards();
});
</script>

  </body>
</html>
