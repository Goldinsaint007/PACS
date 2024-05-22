<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">Navbar</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>

        </ul>

        <form class="d-flex px-5" style="width: 100%" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav ms-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

        </ul>

      </div>
    </div>
  </nav>
</div>
