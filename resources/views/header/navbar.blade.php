<!-- Top menu -->
<div id="top-menu">
  <div class="wp-navbar">
    <a href="/" id="logo">
      <img src="./images/logo.svg" alt="Kiaisoft" class="f-img animate__animated animate__zoomIn" />
    </a>
    <nav id="navbar" class="navbar navbar-expand-lg" aria-labelledby="navbarDropdown">
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item d-lg-none">
            <a href="#" class="nav-link">閉じる ×</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link {{ Request::is('home') ? 'active' : '' }}">ホーム
            </a>
          </li>
          <li class="nav-item">
            <a href="/service" class="nav-link {{ Request::is('service') ? 'active' : '' }}">サービス
            </a>
          </li>
          <li class="nav-item">
            <a href="/company" class="nav-link {{ Request::is('company') ? 'active' : '' }}">会社概要
            </a>
          </li>
          <li class="nav-item">
            <a href="/recruitment" class="nav-link {{ Request::is('recruitment') ? 'active' : '' }}">採用情報
            </a>
          </li>
          <a href="#contact" class="button animate__animated animate__fadeInRight">お問い合わせ
          </a>
          <form name="LangForm">
            <select name="language" class="choose-language">
              <option value="https://kiaisoft.com" selected>日本語</option>
              <option value="https://kiaisoft.com/en">English</option>
            </select>
          </form>
        </ul>
      </div>

    </nav>
    <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars"></i>
      </span>
    </button>
  </div>
</div>
<!-- /Top menu -->