<div class="login">
  <div class="banner"></div>
  <div class="form">
    <div class="wrapper">
      <div class="row">
        <div class="label">Username</div>
        <input type="text">
      </div>
      <div class="row">
        <div class="label">Password</div>
        <input type="password">
      </div>
      <div class="row">
        <button (click)="libra.routeHome()">Login</button>
      </div>
    </div>
    <div class="signup">
      Don't have an account?
      <a routerLink="/registration">Signup</a>
    </div>
  </div>
</div>