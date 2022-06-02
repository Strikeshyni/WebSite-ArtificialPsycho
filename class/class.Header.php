<?php
class Header
{
	private $_header;
	
	public function addheader($type)
	{
    if($type == 1)
    {
	    $this->_header="
      <body class='bg-light'>
        <header>
          <nav class='px-2 navbar fixed-top navbar-expand-lg navbar-light bg-danger shadow-sm'>
              <a class='navbar-brand text-light' href='index.php'>
                <img src='/images/Bloodless.png' width='30' height='30' class='d-inline-block align-top rounded-circle' alt=''>
                Bloodless Studio
              </a>
            <div class='collapse navbar-collapse' id='navbarNav'>
              <ul class='navbar-nav'>
                <li class='nav-item'>
                  <a href='projets.php' class='nav-link text-light'>Projets</a>
                </li>
                <li class='nav-item'>
                  <a href='scoreboard.php' class='nav-link text-light'>Scoreboards</a>
                </li>
              </ul>
            </div>

            <form class='form-inline'>
              <a class='btn btn-outline-light' href='Artificial_psycho/Artificial_psycho.php' role='button'>Go to latest Project</a>
            </form>
          </nav>
        </header>";
    }
    else if($type == 2)
    {
      $this->_header="
      <body class='bg-light'>
        <header>
          <nav class='px-2 navbar fixed-top navbar-expand-lg navbar-light bg-danger shadow-sm'>
              <a class='navbar-brand text-white' href='../index.php'>
                <img src='../images/Bloodless.png' width='30' height='30' class='d-inline-block align-top rounded-circle' alt=''>
                Retour Studio
              </a>
            <div class='collapse navbar-collapse' id='navbarNav'>
              <ul class='navbar-nav'>
                <li class='nav-item'>
                  <a href='download.php' class='nav-link text-white'>Download</a>
                </li>
                <li class='nav-item'>
                  <a href='../scoreboard.php' class='nav-link text-white'>Scoreboards</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>";
    }
    else
    {
      $this->_header="
      <body class='bg-light'>
        <header>
          <nav class='px-2 navbar fixed-top navbar-expand-lg navbar-light bg-danger shadow-sm'>
              <a class='navbar-brand text-white' href='Artificial_psycho.php'>
                <img src='../images/Bloodless.png' width='30' height='30' class='d-inline-block align-top rounded-circle' alt=''>
                Artificial Psycho
              </a>
            <div class='collapse navbar-collapse' id='navbarNav'>
              <ul class='navbar-nav'>
                <li class='nav-item'>
                  <a href='download.php' class='nav-link text-white'>Download</a>
                </li>
                <li class='nav-item'>
                  <a href='../scoreboard.php' class='nav-link text-white'>Scoreboards</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>";
    }
	}
  
	public function getaddheader()
	{
	return $this->_header;
	}
}
?>