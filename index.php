<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>EXAMPLE</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/text.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body >	
	<header>
  	<div class="navbar navbar-dark bg-dark box-shadow">
    	<div class="container d-flex justify-content-between">
    		<strong class="text-white">Example</strong>
    		<div class="icon-group">
					<a href="http://facebook.com">
						<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
					</a>
					<a href="http://twitter.com/m">
						<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span>
					</a>
					<a href="http://gmail.com">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
						</span>
					</a>
					<a href="#">
						<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x" ></i>
								<i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
						</span>
					</a>
				</div>
    	</div>
  	</div>
  </header>

  <main role="main">
  	<section class="jumbotron text-center">
    	<div class="container">
      		<h1 class="jumbotron-heading" >PHP EXAMPLE</h1>          
    	</div>
  	</section>      	
    <div class="container">
      	<div class="row">
        	<div class="col-md-4">
          		<div class="card mb-4 box-shadow">               
            		<div class="card-body"  style="height: 200px">
              			<p class="card-text" style="font-weight: bold;">Example 1</p>
              			<p class="card-text" style="height: 70px;">Nhập vào 1 số, in ra các số nguyên tố nhỏ hơn nó rồi tính tổng các số nguyên tố đó.</p>
               			<button type="button" class="btn btn-sm btn-outline-secondary">
               				<a href="soNguyenTo.php">View</a>
               			</button>
                	</div>
            	</div>
          	</div>
        	<div class="col-md-4">
          		<div class="card mb-4 box-shadow">                
            		<div class="card-body">
              			<p class="card-text" style="font-weight: bold;">Example 2</p>
              			<p class="card-text" style="height: 70px;">Nhập vào 1 dãy số cách nhau bằng dấu ",". in ra mảng các số đó theo thứ tự tăng dần. tính tổng các số đó.</p>
              			<button type="button" class="btn btn-sm btn-outline-secondary">
              				<a href="array.php">View</a>
              			</button>
                	</div>
          		</div>
        	</div>
        	<div class="col-md-4">
          		<div class="card mb-4 box-shadow">
            		<div class="card-body" style="height: 200px">
              			<p class="card-text" style="font-weight: bold;">Example 3</p>
              			<p class="card-text" style="height: 70px;">Nhập vào 1 số. In ra cách đọc của nó.</p>
              			<button type="button" class="btn btn-sm btn-outline-secondary">
              				<a href="readNumber.php" >View</a>
              			</button>
                  	</div>
          		</div>
        	</div>               
        </div>
        <div class="row" id="show">
        	   
        </div>
    </div>
  </main>    
</body>
</html>