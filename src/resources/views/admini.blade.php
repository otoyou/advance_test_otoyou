<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admini.css') }}" />
</head>

<body>
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>管理システム</h2>
      </div>
      <form class="form" action="/contacts/search" method="get">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
          <div class="form__group-content-name">
            <div class="form__input--text-name">
              <input type="text" name="fullname"/>
            </div>
          </div>
          
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <input type="radio" id="button-1" name="gender" value="0" checked />
              <label for="button-0">全て</label>
              <input type="radio" id="button-1" name="gender" value="1" />
              <label for="button-1">男性</label>
              <input type="radio" id="button-2" name="gender" value="2" />
              <label for="button-2">女性</label>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">登録日</span>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="" name=""/>
              <input type="" name=""/>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email"/>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
        </div>
          <input type="reset" value="リセット" />
      </form>
    </div>
  </main>
</body>
