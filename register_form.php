 <?php
 @include 'config.php';
 if(isset($_POST['submit'])){
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = "SELECT * FROM boo_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);
 
  if(mysqli_num_rows($result) > 0){

    $error[]= 'user already exist!';

  }else{
    if($pass != $cpass){
      $error[]='password not matched!';
    }else{
      $insert = "INSERT INTO boo_form(name, email, password, user_type) VALUES('$name','$email', '$pass', '$user_type')";
      mysqli_query($conn, $insert);
      header('location:index.php');
    }
  }

};
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradaran</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="sss/style.css">
</head>

<body>
  
    <!-- header section starts -->

    <header class="header">

        <div class="header-1">
          
          <a href="#"  class="logo"><i class="fas fa-book"></i>bookON</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">    
                <div id="search-btn" class="fas fa-search"></div>
                
                <div id="book" class="fas fa-shopping-cart" class="shop now"></div>
                <div id="login-btn" class="fas fa-user"></div>       
            </div>


        </div>
        <div class="header-2">
           <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">blog</a>
           </nav> 
        </div>
    </header>

    <!-- header section ends -->
    
    <!-- bottom navbar -->

    
   
 
   <!-- login form -->

         


   <div class="form-container">
        <div id="close-login-btn" class="fas fa-times"></div>
        <form action="" method="post">
            <h3>register now</h3>
            <?php
            if(isset($error)){
              foreach($error as $error){
                echo'<span class="error-msg">'.$error.'</span>';
              
              };
            };
            
            ?>
            <input type="text" value="" name="name" required placeholder="enter your name">
            <input type="email" value="" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="cpassword" name="cpassword" required placeholder="confirm your password">
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have an account?<a href="index.php">login now</a></p>
        </form>
</div>
   <!-- home section starts -->
   <div class="booking">

<div id="close-book" class="fas fa-times"></div>

<form action="conn.php" method="post" class="book-form">

    <div class="flex">
    <div class="inputBox">
        <span>name:</span> 
        <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="inputBox">
        <span>email:</span> 
        <input type="email" placeholder="enter your email" name="email">
    </div>

    <div class="inputBox">
        <span>phone:</span> 
        <input type="number" placeholder="enter your number" name="phone">
    </div>

    <div class="inputBox">
        <span>book:</span> 
        <input type="text" placeholder="enter your book name" name="address">
    </div>

    
    </div>

    <input type="submit" value="submit" class="btn" name="send">


</form>
</div>       
  
   <section class="home" id="home">

    <div class="row">
        <div class="content">
            <h3>upto 75% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At nam consequatur beatae nobis quidem explicabo quisquam iusto nulla saepe exercitationem reprehenderit inventore aspernatur, quaerat perferendis esse. Fuga,
            molestiae! Tempora, dolore.</p>   
            <button type="button" id="shop-now" class="btn">shop now</button>    
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="images/book-1.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="images/book-2.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="images/book-3.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="images/book-4.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="images/book-5.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="images/book-6.jpg" alt=""></a> 
            </div>
            <img src="images/stand.png" class="stand" alt="">   
        </div>

    </div>

   </section>

   <!-- home section ends -->

   <!-- icons section starts -->
      
    <!-- icons section ends -->

    <!-- featured section starts -->

     <section class="featured" id="featured">

        <h1 class="heading"><span>featured books</span></h1>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                  <div class="icons">

                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>

                  </div>  
                  <div class="img">
                    <img src="images/book-1.jpg" alt="">
                  </div>
                  <div class="content">
                    <h3>featured books</h3>
                    <div class="price">3000 դրամ<span>4000 դրամ</span></div>
                    
                  </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>

                    <div class="img">
                      <img src="images/book-2.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">3000 dram<span>4000 դրամ</span></div>
                     
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div> 

                    <div class="img">
                      <img src="images/book-3.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">4000 դրամ<span>5000 դրամ</span></div>
                      
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-4.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">5000 դրամ<span>6000 դրամ</span></div>
                      
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-5.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">7000 դրամ<span>9000 դրամ</span></div>
                      
                    </div>
                </div>

                <div class="swiper featured-slider">
                  <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-6.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">4000 դրամ<span>5000 դրամ</span></div>
                      
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-7.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">4000 դրամ<span>5000 դրամ</span></div>
                      
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-8.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">3000 դրամ<span>4000 դրամ</span></div>
                      
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-9.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">7000 դրամ<span>9000 դրամ</span></div>
                      
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
  
                      <a href="#" class="fas fa-search"></a>
                      <a href="#" class="fas fa-heart"></a>
                      <a href="#" class="fas fa-eye"></a>
  
                    </div>  
                    <div class="img">
                      <img src="images/book-10.jpg" alt="">
                    </div>
                    <div class="content">
                      <h3>featured books</h3>
                      <div class="price">3000 դրամ<span>5000 դրամ</span></div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

     </section>   




    <!-- featured section ends -->
    

    <!-- newsletter section starts-->

     <section class="newsletter">
        <form action="">
           <h3>subscribe for latest updates</h3> 
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>
     </section>


    <!-- newsletter section ends-->

     <!-- arrivals section starts -->

     <section class="arrivals" id="arrivals">

      <h1 class="heading"> <span>new arrivals</span></h1>
       
      <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-1.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">3000 դրամ<span>4000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-2.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">3000 դրամ<span>4000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-3.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">4000 դրամ<span>5000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-4.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">5000 դրամ<span>6000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-5.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">7000 դրամ<span>9000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-6.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">4000 դրամ<span>5000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-7.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">4000 դրամ<span>5000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-8.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">3000 դրամ<span>4000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-9.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">7000 դրամ<span>9000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="images/book-10.jpg" alt="">
            </div>
            <div class="content">
              <h3>new arrivals</h3>
              <div class="price">3000 դրամ<span>5000 դրամ</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
        </div>
      </div>

     </section>

     <!-- arrivals section ends -->
     <!-- deal section starts -->

      <section class="deal">
        <div class="content">
          <h3>deal of the day</h3>
          <h1>upto 50% off</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corporis, et consequuntur quisquam laborum minima perspiciatis vel adipisci nobis id nulla temporibus obcaecati quidem ratione beatae voluptatibus, 
            dolorum explicabo velit.</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="image">
          <img src="images/deal-image.jpg" alt="">
        </div>
      </section>



     <!-- deal section ends -->

     <!-- review section starts -->

      <section class="reviews" id="reviews">
       <h1 class="heading"><span>client,s reviews</span></h1> 
        <div class="swiper reviews-slider">
          <div class="swiper-wrapper">

              <div class="swiper-slide box">
                <img src="images/pic-1.png" alt="">
                <h3>John deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nisi molestiae porro, quos facilis delectus minus ipsum exercitationem nulla assumenda recusandae quas consequatur quaerat voluptatum, modi explicabo ratione. 
                  Assumenda, commodi.</p>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
              <div class="swiper-slide box">
                <img src="images/pic-2.png" alt="">
                <h3>John deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nisi molestiae porro, quos facilis delectus minus ipsum exercitationem nulla assumenda recusandae quas consequatur quaerat voluptatum, modi explicabo ratione. 
                  Assumenda, commodi.</p>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
              <div class="swiper-slide box">
                <img src="images/pic-3.png" alt="">
                <h3>John deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nisi molestiae porro, quos facilis delectus minus ipsum exercitationem nulla assumenda recusandae quas consequatur quaerat voluptatum, modi explicabo ratione. 
                  Assumenda, commodi.</p>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
              <div class="swiper-slide box">
                <img src="images/pic-4.png" alt="">
                <h3>John deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nisi molestiae porro, quos facilis delectus minus ipsum exercitationem nulla assumenda recusandae quas consequatur quaerat voluptatum, modi explicabo ratione. 
                  Assumenda, commodi.</p>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
              <div class="swiper-slide box">
                <img src="images/pic-5.png" alt="">
                <h3>John deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nisi molestiae porro, quos facilis delectus minus ipsum exercitationem nulla assumenda recusandae quas consequatur quaerat voluptatum, modi explicabo ratione. 
                  Assumenda, commodi.</p>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
              <div class="swiper-slide box">
                <img src="images/pic-6.png" alt="">
                <h3>John deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nisi molestiae porro, quos facilis delectus minus ipsum exercitationem nulla assumenda recusandae quas consequatur quaerat voluptatum, modi explicabo ratione. 
                  Assumenda, commodi.</p>
                  <div class="stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
              </div>
          </div>
        </div>
      </section>

     <!-- review section ends -->

     <!-- blogs section starts -->

      <section class="blogs" id="blogs">
        <h1 class="heading"><span>our blogs</span></h1>
        <div class="swiper blogs-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide box">
              <div class="image">
                <img src="images/blog-1.jpg" alt="">
              </div>
              <div class="content">
                <h3>blog title goes here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos ipsam ut quas fugit nemo rerum, maxime excepturi corrupti non dolorum, nobis quo sit, sint obcaecati libero 
                  facilis exercitationem repellat.</p>
                  <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-slide box">
              <div class="image">
                <img src="images/blog-2.jpg" alt="">
              </div>
              <div class="content">
                <h3>blog title goes here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos ipsam ut quas fugit nemo rerum, maxime excepturi corrupti non dolorum, nobis quo sit, sint obcaecati libero 
                  facilis exercitationem repellat.</p>
                  <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-slide box">
              <div class="image">
                <img src="images/blog-3.jpg" alt="">
              </div>
              <div class="content">
                <h3>blog title goes here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos ipsam ut quas fugit nemo rerum, maxime excepturi corrupti non dolorum, nobis quo sit, sint obcaecati libero 
                  facilis exercitationem repellat.</p>
                  <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-slide box">
              <div class="image">
                <img src="images/blog-4.jpg" alt="">
              </div>
              <div class="content">
                <h3>blog title goes here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos ipsam ut quas fugit nemo rerum, maxime excepturi corrupti non dolorum, nobis quo sit, sint obcaecati libero 
                  facilis exercitationem repellat.</p>
                  <a href="#" class="btn">read more</a>
                </div>
            </div>
            <div class="swiper-slide box">
              <div class="image">
                <img src="images/blog-5.jpg" alt="">
              </div>
              <div class="content">
                <h3>blog title goes here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos ipsam ut quas fugit nemo rerum, maxime excepturi corrupti non dolorum, nobis quo sit, sint obcaecati libero 
                  facilis exercitationem repellat.</p>
                  <a href="#" class="btn">read more</a>
                </div>
            </div>
          </div>
        </div>
      </section>

     <!-- blogs section ends -->

      <!-- footer section starts -->

      <section class="footer">
        <div class="box-container">
          <div class="box">
            <h3>our locations</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Armenia</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>USA</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>russia</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>france</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>japan</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>africa</a>
          </div>
          <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i>home</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>featured</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>arrivals</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>reviews</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>blogs</a>
          </div>
          <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i>account info</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>ordered items</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>privacy policy</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>payment method</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>our services</a>
          </div>
          <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i>gevorg.amrazyan@gmail.com</a>
            <img src="images/worldmap.png" class="map" alt="">
          </div>
        </div>

        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
          <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit">created by<span> GEVORG </span> | all rights reserved! </div>
      </section>

      <!-- footer section ends -->
      <!-- loader -->
      <!-- <div class="loader-container">
        <img src="images/loader-img.gif" alt="">
      </div>  -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom script file link -->
    <script src="script/script.js"></script>
   
</body>

</html>






   




 

