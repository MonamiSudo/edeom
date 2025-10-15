<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>SEO対策ならエデオム｜中小企業のためのWebマーケティング支援</title>
  <meta name="description" content="中小企業のための伴走型SEOコンサルティング。事業課題に寄り添い、売上につながる本質的なSEO施策を提案・実行します。">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo $uri ?>/assets/css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- End Google Fonts -->

  <!-- Favicon -->
  <link rel="icon" href="<?php echo $uri ?>/favicon.ico" type="image/x-icon">
</head>

<body>

  <!-- header -->
  <header class="site-header">
    <div class="header-inner">
      <!-- ロゴ -->
      <div class="site-logo">
        <a href="#top" aria-label="EDEOM トップへ">
          <span>EDEOM</span>
        </a>
      </div>

      <!-- ハンバーガー（SP） -->
      <button class="hamburger" aria-label="メニューを開閉" aria-controls="global-nav" aria-expanded="false">
        <span></span>
      </button>

      <!-- ナビ＋CTA -->
      <nav id="global-nav" class="primary-nav" aria-label="グローバルナビ">
        <ul>
          <li><a href="#feature">SEOサービス特徴</a></li>
          <li><a href="#jisseki">運用実績</a></li>
          <li><a href="#voice">お客様の声</a></li>
          <li><a href="#flow">ご支援の流れ</a></li>
          <li><a href="#fee">料金</a></li>
          <li><a href="#faq">よくある質問</a></li>
        </ul>
        <a class="cta" href="https://timerex.net/s/sudo.m.edeom_b8f2/3403d1a7" target="_blank">無料相談はこちら</a>
      </nav>
    </div>
  </header>
  <!-- end header -->

  <main id="top">

    <!-- FV -->
    <section id="fv" class="p-fv" style="--fv-bg:url('<?php echo $uri ?>/assets/image/keyvisual.jpg')">
      <div class="p-fv__inner">
        <h1 class="p-fv__title">Webマーケティングを通して、<br>“次の一歩”を共に設計するパートナーへ</h1>
        <a href="https://timerex.net/s/sudo.m.edeom_b8f2/3403d1a7" class="p-fv__cta" target="_blank">無料相談はこちら</a>
      </div>
    </section>
    <!-- End FV -->

    <!-- nayami -->
    <section id="nayami" class="p-nayami">
      <div class="p-nayami__inner">
        <h2 class="p-nayami__title"><span>よくあるお悩み</span></h2>

        <ul class="p-nayami__list">
          <li>Webの専門家にアドバイスをもらいたい</li>
          <li>アクセス数は伸びているが効果がイマイチ</li>
          <li>他の業務もありWeb業務に手が回らない</li>
          <li>HPをリニューアルしたけど成果が出ない</li>
          <li>大手企業の見積もりに手が出しづらい</li>
          <li>売上に直結するSEO対策を行いたい</li>
        </ul>
      </div>
    </section>
    <!-- End nayami -->

    <!-- feature -->
    <section id="feature" class="p-feature">
      <div class="p-feature__inner">
        <h2 class="p-feature__title"><span>SEO対策サービスの特徴</span></h2>

        <ul class="p-feature__list">
          <!-- 01 -->
          <li class="p-feature__item">
            <figure class="p-feature__media">
              <!-- 画像を差し替えてください -->
              <img src="<?php echo $image_uri ?>/feature1.png" alt="">
            </figure>
            <div class="p-feature__body">
              <p class="p-feature__num">01</p>
              <h3 class="p-feature__heading">本質的なSEO対策をご提案</h3>
              <p class="p-feature__text">
              事業課題をヒアリングし、目的から逆算した売上に寄与する施策をご提案します。すでに施策を行っている場合、本当に効果が見込めるか、その改善案までご提案いたします。単にアクセス数を伸ばす施策は行いません。
              </p>
            </div>
          </li>

          <!-- 02（交互＝反転） -->
          <li class="p-feature__item p-feature__item--rev">
            <figure class="p-feature__media">
              <img src="<?php echo $image_uri ?>/feature2.png" alt="">
            </figure>
            <div class="p-feature__body">
              <p class="p-feature__num">02</p>
              <h3 class="p-feature__heading">SEOを軸にしたWeb施策の一貫性</h3>
              <p class="p-feature__text">
              SEO対策だけでなく、Web制作や広告運用の知見も活かし、Web全体で成果を上げる設計も可能です。<br>サイト構造、サイト導線、コンテンツ企画までワンストップで支援可能なため、お気軽にご相談ください。
              </p>
            </div>
          </li>

          <!-- 03 -->
          <li class="p-feature__item">
            <figure class="p-feature__media">
              <img src="<?php echo $image_uri ?>/feature3.png" alt="">
            </figure>
            <div class="p-feature__body">
              <p class="p-feature__num">03</p>
              <h3 class="p-feature__heading">社外Webマーケティング部のポジション</h3>
              <p class="p-feature__text">
              クライアント様に合わせたご予算で最適な施策を組ませていただきます。「できることから一緒に進める」スタンスで業務を支援します。<br>報告やレポート共有で終わるのではなく、“社内に入り込むような距離感”を大切にしています。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- End feature -->

    <!-- person -->
    <section id="person" class="p-person">
      <div class="p-person__inner">
        <h2 class="p-person__title"><span>担当者紹介</span></h2>

        <article class="p-person__card" itemscope itemtype="https://schema.org/Person">
          <figure class="p-person__media">
            <!-- 画像差し替え -->
            <img src="<?php echo $image_uri ?>/maneger.png" alt="担当者の写真" itemprop="image">
          </figure>

          <p class="p-person__name" itemprop="name">須藤 百波</p>
          <p class="p-person__name eng">Sudo Monami</p>

          <p class="p-person__bio" itemprop="description">
          <a href="https://www.ajsa.or.jp/kentei/seo/1/" target="_blank">SEO検定1級</a>所持。芝浦工業大学卒業後にWebディレクターとしてサイト制作に従事。その後、Webマーケティング部署の立ち上げから各施策の企画・運用まで一貫して担当。オウンドメディアでは、運用約1年で獲得CV数を3件→19件に改善。現在は屋号「エデオム」としてフリーランスに転身し、幅広い業界のWebマーケティング支援に従事する。
          </p>
        </article>
      </div>
    </section>
    <!-- End person -->

    <!-- 実績 -->
    <section id="jisseki" class="p-jisseki">
      <div class="p-jisseki__inner">
        <h2 class="p-jisseki__title"><span>実績</span></h2>

        <div class="p-jisseki__card">
          <!-- ■ 左：円 -->
          <div class="p-jisseki__circle">
            <div class="p-jisseki__circle-in" aria-hidden="true">
              <!-- <p class="p-jisseki__circle-top">運用約1年で、</p>
              <p class="p-jisseki__circle-mid">CV改善率約</p>
              <p class="p-jisseki__circle-num">6.3</p>
              <p class="p-jisseki__circle-btm">倍</p> -->
              <p class="p-jisseki__text">運用約1年で、<br>CV獲得数を6.3倍に改善</p>
            </div>
          </div>

          <!-- ■ 右：本文 -->
          <div class="p-jisseki__body">
            <h3 class="p-jisseki__lead">オウンドメディア運用1年で<br>自然検索経由のCV獲得数6.3倍</h3>

            <div class="p-jisseki__cols">
              <div class="p-jisseki__col">
                <p class="p-jisseki__sub">対策開始時の課題</p>
                <ul class="p-jisseki__list">
                  <li>キーワード対策ができていない</li>
                  <li>SEO対策をやりたいが始め方が分からない</li>
                </ul>
              </div>

              <div class="p-jisseki__col">
                <p class="p-jisseki__sub">実施した施策内容</p>
                <ul class="p-jisseki__list">
                  <li>キーワード戦略の見直し</li>
                  <li>サービスページのコンテンツ改修</li>
                  <li>コンテンツSEO対策</li>
                  <li>内部リンク最適化　など</li>
                </ul>
              </div>

              <div class="p-jisseki__col p-jisseki__col--full">
                <p class="p-jisseki__sub">成果</p>
                <p class="p-jisseki__result">
                  運用約1年でCV獲得数を <strong>3件 → 19件</strong> に改善
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.p-jisseki__card -->
      </div>
    </section>
    <!-- End 実績 -->

    <!-- お客様の声 -->
    <section id="voice" class="p-voice">
      <div class="p-voice__inner">
        <h2 class="p-voice__title"><span>お客様の声</span></h2>

        <article class="p-voice__card">
          <!-- 左：テキストパネル -->
          <div class="p-voice__panel">
            <p class="p-voice__client">株式会社グッド・エナジー様</p>
            <h3 class="p-voice__heading">目線を合わせたSEO対策で、いい意味で期待を裏切られました</h3>
            <p class="p-voice__text">
              時代的にWebマーケティングの必要性は分かっていたが、SEO対策の本質的な部分が分かっていませんでした。Web施策を丁寧に行うことで、期待以上の結果が出たこともあり、良い意味で期待を裏切られたと感じています。成果を感じ始めたのは運用から6ヶ月ほどで、事業課題の解決や弊社のSEOを強化いただいたことに感謝しています。
            </p>

            <dl class="p-voice__meta">
              <div><dt>業界ジャンル</dt><dd>エネルギー</dd></div>
              <div><dt>ご利用サービス</dt><dd>SEOコンサルティング</dd></div>
            </dl>
          </div>

          <!-- 右：画像 -->
          <figure class="p-voice__media">
            <!-- 画像差し替え -->
            <img src="<?php echo $image_uri ?>/voice.png" alt="お客様の写真または実績画像">
          </figure>
        </article>
      </div>
    </section>
    <!-- End お客様の声 -->

    <!-- ご支援までの流れ -->
    <section id="flow" class="p-flow">
      <div class="p-flow__inner">
        <h2 class="p-flow__title"><span>ご支援の流れ</span></h2>

        <ol class="p-flow__list">
          <li class="p-flow__item">
            <figure class="p-flow__img"><img src="<?php echo $image_uri ?>/step1.png" alt=""></figure>
            <span class="p-flow__step">STEP 01</span>
            <p class="p-flow__label">お問い合わせ</p>
          </li>

          <li class="p-flow__item">
            <figure class="p-flow__img"><img src="<?php echo $image_uri ?>/step2.png" alt=""></figure>
            <span class="p-flow__step">STEP 02</span>
            <p class="p-flow__label">現状分析・ヒアリング</p>
          </li>

          <li class="p-flow__item">
            <figure class="p-flow__img"><img src="<?php echo $image_uri ?>/step3.png" alt=""></figure>
            <span class="p-flow__step">STEP 03</span>
            <p class="p-flow__label">お見積もり</p>
          </li>

          <li class="p-flow__item">
            <figure class="p-flow__img"><img src="<?php echo $image_uri ?>/step4.png" alt=""></figure>
            <span class="p-flow__step">STEP 04</span>
            <p class="p-flow__label">ご契約</p>
          </li>

          <li class="p-flow__item">
            <figure class="p-flow__img"><img src="<?php echo $image_uri ?>/step5.png" alt=""></figure>
            <span class="p-flow__step">STEP 05</span>
            <p class="p-flow__label">SEO対策開始</p>
          </li>
        </ol>
      </div>
    </section>
    <!-- Endご支援までの流れ -->

    <!-- 料金 -->
    <section id="fee" class="p-fee">
      <div class="p-fee__inner">
        <h2 class="p-fee__title"><span>料金</span></h2>

        <div class="p-fee__grid">
          <!-- ① SEOコンサルティング -->
          <article class="p-fee__card">
            <h3 class="p-fee__plan">SEOコンサルティング</h3>

            <p class="p-fee__price">
              <span class="p-fee__price-sub">月額</span>
              <span class="p-fee__price-main">￥70,000〜</span>
              <span class="p-fee__price-tax">（税込）</span>
            </p>

            <p class="p-fee__badge">ご契約期間 3ヶ月〜</p>

            <h4 class="p-fee__subttl">ご支援内容</h4>
            <ul class="p-fee__list">
              <li>競合分析</li>
              <li>現状分析</li>
              <li>SEO方針/戦略立案</li>
              <li>SEO内部対策</li>
              <li>定期レポート・改善提案 など</li>
            </ul>
          </article>

          <!-- ② SEO記事制作代行 -->
          <article class="p-fee__card">
            <h3 class="p-fee__plan">SEO記事制作代行</h3>

            <p class="p-fee__price">
              <span class="p-fee__price-sub">1本</span>
              <span class="p-fee__price-main">￥30,000〜</span>
              <span class="p-fee__price-tax">（税込）</span>
            </p>

            <p class="p-fee__badge">月4本よりご契約可能</p>

            <h4 class="p-fee__subttl">ご支援内容</h4>
            <ul class="p-fee__list">
              <li>キーワードリサーチ</li>
              <li>記事構成作成</li>
              <li>記事執筆</li>
              <li>記事校正・編集・品質チェック</li>
              <li>CMS入稿 など</li>
            </ul>
          </article>
        </div>
      </div>
    </section>
    <!-- End 料金 -->

    <!-- よくある質問 -->
    <section id="faq" class="p-faq">
      <div class="p-faq__inner">
        <h2 class="p-faq__title"><span>よくある質問</span></h2>

        <ul class="p-faq__list">
          <li class="p-faq__item">
            <div class="p-faq__head">
              <span class="p-faq__q" aria-hidden="true">Q</span>
              <p href="#" class="p-faq__question">SEOの知識がまったくなくても大丈夫ですか？</p>
            </div>
            <p class="p-faq__answer">
            はい。なるべく専門用語を使わず、今やるべきことを分かりやすく説明します。施策の意図も丁寧に共有するので、安心してお任せいただけます。
            </p>
          </li>

          <li class="p-faq__item">
            <div class="p-faq__head">
              <span class="p-faq__q" aria-hidden="true">Q</span>
              <p href="#" class="p-faq__question">Web担当者がいなくても依頼できますか？</p>
            </div>
            <p class="p-faq__answer">
            可能です。戦略部分から実務までワンストップでサポートいたします。月次の定例mtgやチャットを活用して進捗を共有します。
            </p>
          </li>
          <li class="p-faq__item">
            <div class="p-faq__head">
              <span class="p-faq__q" aria-hidden="true">Q</span>
              <p href="#" class="p-faq__question">成果が出るまでどのくらいかかりますか？</p>
            </div>
            <p class="p-faq__answer">
            業界や競合状況によりますが、通常は3〜6ヶ月を目安にCVやアクセスの変化が見え始めます。初期分析で見込みを共有します。
            </p>
          </li>
          <li class="p-faq__item">
            <div class="p-faq__head">
              <span class="p-faq__q" aria-hidden="true">Q</span>
              <p href="#" class="p-faq__question">他社のSEO会社と何が違いますか？</p>
            </div>
            <p class="p-faq__answer">
            アクセス数ではなく、CV成果にこだわる実務型支援を行います。担当者はSEO対策以外にWeb制作やWeb広告にも精通しているため、あらゆる視点でサポートさせていただきます。
            </p>
          </li>
          <li class="p-faq__item">
            <div class="p-faq__head">
              <span class="p-faq__q" aria-hidden="true">Q</span>
              <p href="#" class="p-faq__question">Webサイトが古いのですがリニューアルもお願いできますか？</p>
            </div>
            <p class="p-faq__answer">
            可能です。SEOを考慮したサイト設計・デザイン・実装までトータルで対応可能です。
            </p>
          </li>
          <li class="p-faq__item">
            <div class="p-faq__head">
              <span class="p-faq__q" aria-hidden="true">Q</span>
              <p href="#" class="p-faq__question">契約期間はどうなっていますか？</p>
            </div>
            <p class="p-faq__answer">
            初回は3ヶ月のご契約で、以後は1ヶ月ごとの更新となります。状況に合わせてプラン変更やご相談も可能ですので、安心してお任せください。
            </p>
          </li>
        </ul>
      </div>
    </section>
    <!-- End よくある質問 -->

    <!-- 関連サービス -->
    <section id="service" class="p-service">
      <div class="p-service__inner">
        <h2 class="p-service__title"><span>その他サービス</span></h2>

        <ul class="p-service__grid">
        <li class="p-service__card">
            <figure class="p-service__media">
              <img src="<?php echo $image_uri ?>/service1.png" alt="LP制作">
            </figure>
            <h3 class="p-service__name">Web広告運用</h3>
            <p class="p-service__desc">
            Google（Yahoo!）リスティング運用、meta広告など、Web広告の運用代行を行っています。SEO対策と合わせてWeb広告を実施したい方はご相談ください。
            </p>
          </li>

          <li class="p-service__card">
            <figure class="p-service__media">
              <img src="<?php echo $image_uri ?>/service2ver2.png" alt="Webサイト制作">
            </figure>
            <h3 class="p-service__name">Webサイトリニューアル</h3>
            <p class="p-service__desc">
            既存のWebサイトをSEOを考慮したサイトにリニューアルいたします。サイトが古い、運用を任せる会社を変更したいという方もご相談ください。
            </p>
          </li>

          <li class="p-service__card">
            <figure class="p-service__media">
              <img src="<?php echo $image_uri ?>/service3.png" alt="ECサイト構築">
            </figure>
            <h3 class="p-service__name">Webサイト運用代行</h3>
            <p class="p-service__desc">
            Webサイトの更新や管理を代行いたします。テキスト更新、画像差し替え、テンプレート追加ななど、日々のWebサイト運用をお任せください。
            </p>
          </li>
        </ul>
      </div>
    </section>
    <!-- End 関連サービス -->

    <!-- 制作実績 -->
    <!-- <section id="production" class="p-production">
      <div class="p-production__inner">
        <h2 class="p-production__title"><span>制作実績</span></h2>

        <ul class="p-production__grid">

          <li class="p-production__card">
            <a class="p-production__link" href="https://powwow-ginza.com/" target="_blank">
              <figure class="p-production__media">
                <img src="<?php echo $image_uri ?>/production1.png" alt="SMILE CREATE GROUP様 パウワウブランドサイト">
              </figure>
              <span class="p-production__badge">業界・サービス名</span>
              <h3 class="p-production__name">
                株式会社SMILE CREATE GROUP様　パウワウブランドサイト
              </h3>
            </a>
          </li>

          <li class="p-production__card">
            <a class="p-production__link" href="https://charge10.tokyo/" target="_blank">
              <figure class="p-production__media">
                <img src="<?php echo $image_uri ?>/production2.png" alt="SMILE CREATE GROUP様 パウワウブランドサイト">
              </figure>
              <span class="p-production__badge">業界・サービス名</span>
              <h3 class="p-production__name">
                株式会社SMILE CREATE GROUP様　パウワウブランドサイト
              </h3>
            </a>
          </li>
        </ul>
      </div>
    </section> -->
    <!-- End 制作実績 -->

    <footer class="p-footer">
      <p class="p-footer__copy">© 2025 EDEOM. All rights reserved.</p>
    </footer>

  </main>


  <!-- ハンバーガーメニューの開閉 -->
  <script>
    // ハンバーガー開閉
    const btn = document.querySelector('.hamburger');
    const nav = document.getElementById('global-nav');
    btn.addEventListener('click', () => {
      const open = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!open));
      nav.classList.toggle('is-open', !open);
    });

    // メニュークリックで閉じる（SP）
    nav.addEventListener('click', e => {
      if (e.target.matches('a')) {
        btn.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
      }
    });
  </script>
  <!-- End ハンバーガーメニューの開閉 -->

  <!-- ページ内スクロール -->
  <script>
    (() => {
      const header = document.querySelector('.site-header');
      const burger = document.querySelector('.hamburger');           // ある場合だけ
      const nav    = document.getElementById('global-nav');          // ある場合だけ
    
      // ヘッダーの高さを取得（CSSの高さと一致）
      const getHeaderHeight = () => (header ? header.offsetHeight : 0);
    
      // ヘッダー内の # リンクにだけ仕込む（ロゴ含む）
      const links = document.querySelectorAll('.site-header a[href^="#"]');
    
      links.forEach(link => {
        link.addEventListener('click', e => {
          const hash = link.getAttribute('href');
          if (!hash || hash === '#') return;              // 無効ハッシュはスルー
          const id = decodeURIComponent(hash.slice(1));
          const target = document.getElementById(id);
          if (!target) return;                            // 対象が無ければスルー
        
          e.preventDefault();
        
          const top = target.getBoundingClientRect().top + window.pageYOffset - getHeaderHeight();
          window.scrollTo({ top, behavior: 'smooth' });
        
          // URLのハッシュだけ更新（履歴は汚さない）
          history.replaceState(null, '', '#' + id);
        
          // SP時：メニューを閉じる
          if (burger && nav) {
            burger.setAttribute('aria-expanded', 'false');
            nav.classList.remove('is-open');
          }
        });
      });
    
      // ページ読み込み時にハッシュがある場合も、ヘッダー分ずらしてスクロール
      window.addEventListener('load', () => {
        if (location.hash) {
          const id = decodeURIComponent(location.hash.slice(1));
          const target = document.getElementById(id);
          if (target) {
            const top = target.getBoundingClientRect().top + window.pageYOffset - getHeaderHeight();
            window.scrollTo(0, top);
          }
        }
      });
    })();
    </script>
  <!-- End ページ内スクロール -->
</body>
</html>