
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 10px;
  text-align:center;
  background: #1abc9c;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
  float:right;
}

/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 20px;
  float:left;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding:10px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
@media screen and (max-width: 300px){
	.row,.navbar{
		flex-direction: column;
	}
}
#un{
  float:right;

}
</style>
</head>
<body>

<!-- Note -->

<!-- Header -->
<div class="header">
  <h1>Bca Buddies</h1>
  <p>Always Do you best..</p>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Syllabus</a>
  <a href="#">Login</a>
  <a id="un">welcome <?php echo $_POST["username"];?></a>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>About TMBU</h2>
    <h5>Photo of TMBU:</h5>
    <div class="fakeimg" ><img src ="TMBU.jpg"style="height:200px;width:100%;"></div>
    <p>The Tilka Manjhi Bhagalpur University, also known as Bhagalpur University, is a premier institution for providing higher education in the state of Bihar. The university is situated in Bhagalpur town of Bihar State in India and is named after famous freedom fighter Tilka Manjhi. Established on 12 July 1960, it is a public university sprawled within 264 acres of lush green campus ideal for teaching and learning. The university has 6 Faculties, 34 Teaching Departments, 5 Research Centres and 12 Constituent Colleges, besides affiliated to it 11 Colleges and 14 B.Ed. Colleges.</p>
    <h3><a href="">Read More</a></h3>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>Department of Computer Application of TMBU</h2>
    <h5>Estiblised, Dec 7, 2003</h5>
    <div class="fakeimg"><img src="image1.jpg" style="height:300px;width:100%;"></div>
    <p>Center of University Computer Application</p>
    <p> This is estiblised on may 2003</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg"><img src="images2.jpg" style="height:300px;width:100%;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <h3>Developed by Maniketalex &copy; copyrights 2020</h3>
</div>

</body>
</html>
