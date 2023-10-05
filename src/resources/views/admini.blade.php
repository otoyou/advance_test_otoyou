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
      <form class="form" action="admini/search" method="get">
        @csrf
        <div class="form__name--gender">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="fullname"/>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title-gender">
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
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">登録日</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-date">
              <input type="date" id="start" name="day-start"/>
              <p>〜</p>
              <input type="date" id="end" name="day-end"/>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email"/>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
        </div>
          <input class="form__button-rest" type="reset" value="リセット" />
      </form>
    </div>



<div class="search-table">
  <table class="search-table__inner">
    <tr class="search-table__row">
      <th class="search-table__header">ID</th>
      <th class="search-table__header">お名前</th>
      <th class="search-table__header">性別</th>
      <th class="search-table__header">メールアドレス</th>
      <th class="search-table__header">ご意見</th>
    </tr>
{{--
@foreach ($contact as $contact)
<tr class="search-table__row">
  <td class="search-table__item">
    <form class="update-form">
      <div class="update-form__item">
        <p class="update-form__item-input">{{ $contact['content'] }}</p>
      </div>
 
    </form>
  </td>
  <td class="search-table__item">
    <form class="delete-form">
      <div class="delete-form__button">
        <button class="delete-form__button-submit" type="submit">削除</button>
      </div>
    </form>
  </td>
</tr>
@endforeach
--}}

      </table>
    </div>

  </main>
</body>
