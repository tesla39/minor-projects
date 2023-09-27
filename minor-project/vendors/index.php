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
    <div class="vendors-list">
      <h2>Vendors list</h2>

      <input class="vendor-search" type="text" placeholder="Search here..." />

      <div class="vendors"></div>
    </div>

 <?php  
      $sql = "SELECT vendor_name,vendor_image,vendor_details FROM vendor";
      $result = $con->query($sql);

$vendors = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $vendors[] = [
      'Name' => $row["vendor_name"],
      'image' => $row["vendor_image"],
      'details' => $row["vendor_details"],
    ];
  }
} else {
  echo "0 results";
}
$con->close();
?>

<script>
const vendors = JSON.parse('<?php echo json_encode($vendors); ?>');
//using php echo to pass vender array in javascript

const vendorsHeading = document.querySelector(".vendors-list h2");
const vendorsContainer = document.querySelector(".vendors-list .vendors");

const vendorSearch = document.querySelector(".vendors-list .vendor-search");
let searchTerm = "";

if (vendors.length == 1) {
  vendorsHeading.innerHTML = `${vendors.length} vendor`;
} else {
  vendorsHeading.innerHTML = `${vendors.length} vendors`;
}

const createvendorListingCards = () => {
  vendorsContainer.innerHTML = "";

  vendors.forEach((vendor) => {
    if (vendor.Name.toLowerCase().includes(searchTerm.toLowerCase())) {
      let vendorCard = document.createElement("div");
      vendorCard.classList.add("vendor");

      let image = document.createElement("img");
      image.src = '../homepage/product/'+vendor.image;

      let Name = document.createElement("h3");
      Name.innerHTML = vendor.Name;
      Name.classList.add("vendor-Name");

      let details = document.createElement("div");
      details.innerHTML = vendor.details;
      details.classList.add("details");

      let detailsBtn = document.createElement("a");
      detailsBtn.href = "#";
      detailsBtn.innerHTML = "More Details";
      detailsBtn.classList.add("details-btn");

      vendorCard.appendChild(image);
      vendorCard.appendChild(Name);
      vendorCard.appendChild(details);
      vendorCard.appendChild(detailsBtn);

      vendorsContainer.appendChild(vendorCard);
    }
  });
};

createvendorListingCards();

vendorSearch.addEventListener("input", (e) => {
  searchTerm = e.target.value;

  createvendorListingCards();
});
</script>

  </body>
</html>
