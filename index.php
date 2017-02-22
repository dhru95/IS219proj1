<?php
   $car_orders[0]['model'] = 'taurus';
   $car_orders[0]['engine'] = 'V6';
   $car_orders[0]['color'] = 'blue';
   $car_orders[1]['model'] = 'mustang';
   $car_orders[1]['engine'] = 'V6';
   $car_orders[1]['color'] = 'blue';
   $car_orders[2]['model'] = 'focus';
   $car_orders[2]['engine'] = 'V6';
   $car_orders[2]['color'] = 'blue';
  if(empty($_GET)) {
    foreach($car_orders as $car_order) {
      $i++;
      $car_order_num = $i - 1;
      echo '<a href=' . '"http://web.njit.edu/~kwilliam/is218/cars.php?car_order=' . $car_order_num . '"' . '>Car Order ' . $i . ' </a>';
      echo '</p>';
    }
  }
  $car_order = $car_orders[$_GET['car_order']];
  
   foreach($car_order as $key => $value) {
    echo $key . ': ' . $value . "<br>\n";
   }
   
  
  abstract class car {
    protected $engine;
    protected $wheels = 4;
    protected $doors;
    protected $length;
    protected $weight;
    protected $color;
  
    public function setColor($color) {
      $this->color = $color;
    }
    public function setEngine(engine $engine) {
      $this->engine = $engine;
    }
  }
 
  abstract class ford extends car {}
  class taurus extends ford {
  
     public function __construct() {
       $this->doors = '4';
       $this->length = '2000cm';
       $this->weight = '1700kg';
       
       $engine = new engine;
       $this->setEngine($engine);
     
     }
    
  }
  class engine {}
?>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>A Bootstrap Starter Template for IS219</h1>
                <p class="lead">Complete with pre-defined file paths that you won't have to change!</p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.6</li>
                    <li>jQuery v1.11.1</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>