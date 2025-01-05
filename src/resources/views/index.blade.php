<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <style>
        .red-asterisk {
            color: red;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
            <div class="form__group">
                <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <?php echo '<span class="red-asterisk">※</span>'; ?>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="family-name" placeholder="例: 山田" value="{{ old('family-name') }}" />
                </div>
                <div class="form__error">
                    @error('family-name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="last-name" placeholder="例: 太郎" value="{{ old('last-name') }}" />
                </div>
                <div class="form__error">
                    @error('last-name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <br>
            性別
            <?php echo '<span class="red-asterisk">※</span>'; ?>
            <input type="radio" name="choices" value="男性" />男性
            <input type="radio" name="choices" value="女性" />女性
            <input type="radio" name="choices" value="その他" />その他
        </br>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <?php echo '<span class="red-asterisk">※</span>'; ?>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <?php echo '<span class="red-asterisk">※</span>'; ?>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel1" name="tel1" placeholder="080" value="{{ old('tel1') }}" />
                </div>
                <div class="form__error">
                    @error('tel1')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel2" name="tel2" placeholder="1234" value="{{ old('tel2') }}" />
                </div>
                <div class="form__error">
                    @error('tel2')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel3" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
                </div>
                <div class="form__error">
                    @error('tel3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <?php echo '<span class="red-asterisk">※</span>'; ?>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="building" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
                    </div>
                </div>
            </div>
            <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <?php echo '<span class="red-asterisk">※</span>'; ?>
            </div>
            <form class="search-form" action="confilm.blade.php" method="get">
            <div class="search-form__item">
                <select class="search-form__item-select" name="inquiry">
            </div>
            <div class="form__group">
                <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <?php echo '<span class="red-asterisk">※</span>'; ?>
            </div>
            <div class="form__group-content">
            <div class="form__input--textarea">
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </main>
</body>
</html>