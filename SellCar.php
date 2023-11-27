<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"
    <meta http-equiv="X-UA-Compatible" content="IE=edge"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sale Website</title>

    <!--Link To Css-->
    <link rel="stylesheet" href="style.css">

    <!--Box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


   
<header>

   <!-- Sell Car Display Text -->
   <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sell Your Car</title>
     <style>
       body {
         font-family: Arial, sans-serif;
         margin: 20px;
       }
   
       form {
         max-width: 600px;
         margin: 0 auto;
       }
   
       label {
         display: block;
         margin-bottom: 8px;
       }
   
       input, select {
         width: 100%;
         padding: 8px;
         margin-bottom: 16px;
         box-sizing: border-box;
       }
   
       button {
         padding: 10px;
         background-color: #4CAF50;
         color: white;
         border: none;
         cursor: pointer;
       }
     </style>
   </head>



   <body>
   
   <h2>Sell Your Car</h2>
   
   <form action="process_form.php" method="post" enctype="multipart/form-data">
     <label for="ownerName">Owner's Name:</label>
     <input type="text" id="ownerName" name="ownerName" required>
   
     <label for="carName">Car Name:</label>
     <input type="text" id="carName" name="carName" required>

     <label for="phone">Phone:</label>
     <input type="tel" id="phone" name="phone"  placeholder="123-456-7890" required>

     <label for="year">Car Year:</label>
     <input type="number" id="year" name="year" required>
   
     <label for="mileage">Car Mileage:</label>
     <input type="number" id="mileage" name="mileage" required>
   
     <label for="pictures">Car Pictures:</label>
     <input type="file" id="pictures" name="pictures[]" accept="image/*" multiple required>
   
     <button type="submit">Submit</button>
   </form>
   
   </body>
   </html>
   


