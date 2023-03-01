<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include  'profile.php';?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body >
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="profile.js"></script>


<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-9 col-lg-7 col-xl-5">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5 card bg-dark text-white" style="border-radius: 1rem;">
              <div class="d-flex text-black">
                <div class="flex-shrink-0">
                 <img src="https://www.clipartmax.com/png/middle/214-2143742_individuals-whatsapp-profile-picture-icon.png"
                    alt="Generic placeholder image" class="img-fluid"
                    style="width: 180px; border-radius: 10px;">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1" name="fullname"></h5>
                 


                  <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                    style="background-color: #efefef;">
                  
                    <div class="px-3">
                      <p class="fw-bold text-dark" >Age</p>
                      <p class="mb-0 text-muted" id="age"name="age">12</p>
                    </div>
                   
                  </div>


                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                    style="background-color: #efefef; text-align: center;">
                  <div>
                    <p class="fw-bold text-dark">Date-of-Birth</p>
                    <p class="mb-0 text-muted"  name="date"></p>
                  </div>
                  </div>



                  <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div>
                    <p class="fw-bold text-dark" >Contact</p>
                    <p class="mb-0 text-muted" id="contact" name="phone"></p>
                  </div>
                  </div>

                
                  <div class="d-flex pt-1">
                   
                    <a href="register.html"><button type="button" class="btn btn-secondary me-1 flex-grow-1">Edit</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
   
			
		
    var x ="<?php echo $row['name']  ?>" ;
    var x1 ="<?php echo $row11['last']  ?>" ;
    document.write(x);
    
document.querySelector('h5[name="fullname"]').textContent = x+" "+x1;


var y ="<?php echo $row1['date']  ?>" ;
    document.write(y);
    
document.querySelector('p[name="date"]').textContent = y;

const birthDate = new Date(y);

// calculate age
const today = new Date();
let age = today.getFullYear() - birthDate.getFullYear();
const monthDiff = today.getMonth() - birthDate.getMonth();
if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
  age--;
}

document.querySelector('p[name="age"]').textContent = age;


var z="<?php echo $row2['phone']  ?>" ;
    document.write(z);
    
document.querySelector('p[name="phone"]').textContent = z;
    
      </script>
  
</body>
</html>