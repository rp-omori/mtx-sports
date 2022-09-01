<div class="contact__body">
  <div class="contact__body-inner">
    <div class="form-body">
      <div class="form-group">
        <div class="form-group__head">
          <label class="form-label">お名前(フルネーム)</label>
          <span class="form-badge form-badge--required">必須</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
[mwform_text name="name" id="name" class="form-input" size="60" maxlength="60" placeholder="例：東京 太郎"]
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group__head">
          <label class="form-label">お名前(フリガナ)</label>
          <span class="form-badge form-badge--required">必須</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
[mwform_text name="ruby" id="ruby" class="form-input" size="140" maxlength="140" placeholder="例：トウキョウ タロウ"]
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group__head">
          <label class="form-label">性別</label>
          <span class="form-badge form-badge--optional">任意</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
            <div class="form-select-wrapper w280">
[mwform_select name="gender" id="gender" class="form-input" children=":選択してください,male:男性,female:女性,other:その他" value="選択してください" post_raw="true" show_error="false"]
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group__head col-3">
          <label class="form-label">年代</label>
          <span class="form-note">※未成年者の受診はお受けできかねます。</span>
          <span class="form-badge form-badge--required">必須</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
            <div class="form-select-wrapper w520">
[mwform_select name="age" id="age" class="form-input" children=":選択してください,20th:20代,30代:30代,40代:40代,50代:50代,60代:60代,70代:70代,80代:80代,90代:90代" value="選択してください" post_raw="true"]
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group__head">
          <label class="form-label">メールアドレス</label>
          <span class="form-badge form-badge--required">必須</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
[mwform_email name="email" id="email" class="form-input" size="254" maxlength="254" placeholder="例：sample@example.com"]
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group__head">
          <label class="form-label">電話番号</label>
          <span class="form-badge form-badge--required">必須</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
[mwform_text name="tel" id="tel" class="form-input" size="20" maxlength="20" placeholder="例：090-9999-9999" conv_half_alphanumeric="true"]
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-group__head">
          <label class="form-label">メッセージ</label>
          <span class="form-badge form-badge--optional">任意</span>
        </div>
        <div class="form-group__body">
          <div class="form-input-wrapper">
[mwform_textarea name="message" id="message" class="form-input" maxlength="512" cols="30" rows="10" placeholder="ご質問やご相談などがございましたら、ご記入ください。" show_error="false"]
          </div>
        </div>
      </div>
    </div>
    <div class="form-agree">
      <div class="form-agree__inner">
        <p class="form-agree__text">
          <a href="" class="form-agree__link">プライバシーポリシー</a>をご確認の上、「同意する」にチェックを入れてください。
        </p>
        <div class="form-checkbox">
[mwform_checkbox name="agree" id="agree" children="同意する"]
        </div>
      </div>
    </div>
    <div class="form-btn">
[mwform_backButton class="btn btn--green" value="戻る"]
[mwform_submitButton name="confirm" class="btn btn--green" confirm_value="確認画面へ" submit_value="送信する"]
    </div>
  </div>
</div>
