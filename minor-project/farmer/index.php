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
    <div class="farmers-list">
      <h2>farmer list</h2>

      <input class="farmer-search" type="text" placeholder="Search here..." />

      <div class="farmers"></div>
    </div>

 <?php  
      $sql = "SELECT farmer_name,farmer_image,farmer_details FROM farmer";
      $result = $con->query($sql);

$farmers = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $farmers[] = [
      'Name' => $row["farmer_name"],
      'image' => $row["farmer_image"],
      'details' => $row["farmer_details"],
    ];
  }
} else {
  echo "0 results";
}
$con->close();
?>

<script>
const farmers = JSON.parse('<?php echo json_encode($farmers); ?>');
//using php echo to pass vender array in javascript

const farmersHeading = document.querySelector(".farmers-list h2");
const farmersContainer = document.querySelector(".farmers-list .farmers");
const farmerSearch = document.querySelector(".farmers-list .farmer-search");

let searchTerm = "";

if (farmers.length == 1) {
  farmersHeading.innerHTML = `${farmers.length} farmer`;
} else {
  farmersHeading.innerHTML = `${farmers.length} farmers`;
}

const createfarmerListingCards = () => {
  farmersContainer.innerHTML = "";

  farmers.forEach((farmer) => {
    if (farmer.Name.toLowerCase().includes(searchTerm.toLowerCase())) {
      let farmerCard = document.createElement("div");
      farmerCard.classList.add("farmer");

      let image = document.createElement("img");
      
      //adding correct image directory
      image.src ='../homepage/product/'+ farmer.image;

      let Name = document.createElement("h3");
      Name.innerHTML = farmer.Name;
      Name.classList.add("farmer-Name");

      let details = document.createElement("div");
      details.innerHTML = farmer.details;
      details.classList.add("details");

      let detailsBtn = document.createElement("a");
      detailsBtn.href = "#";
      detailsBtn.innerHTML = "More Details";
      detailsBtn.classList.add("details-btn");

      farmerCard.appendChild(image);
      farmerCard.appendChild(Name);
      farmerCard.appendChild(details);
      farmerCard.appendChild(detailsBtn);

      farmersContainer.appendChild(farmerCard);
    }
  });
};

createfarmerListingCards();

farmerSearch.addEventListener("input", (e) => {
  searchTerm = e.target.value;

  createfarmerListingCards();
});
</script>

  </body>
</html>
