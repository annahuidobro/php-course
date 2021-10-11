<template>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Game</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="/home">Home</a>
        <a class="nav-link" href="#">Sign-in</a>
        <a class="nav-link" href="#">Register</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
      <div id=app>


            <h1>The most exciting game of dices</h1>
             <p class="lead">
                <a class="lead" href="/players/{id}/games/" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Let's play!</a>
            </p>
      </div>
  </main>

</div>
</template>