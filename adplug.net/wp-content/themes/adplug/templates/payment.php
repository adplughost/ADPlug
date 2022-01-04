<?php 
/**
 * Template name: Payment
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>

  <div class="p-profile__body b-bank-account p-payment__body">
    <div class="p-profile__body-header p-payment__body-nav">
      <button class="p-profile__body-title p-payment__body-nav-item p-payment__body-nav-item--active" type="button">Bank account</button>
      <button class="p-profile__body-title p-payment__body-nav-item" type="button">Transaction history</button>
    </div>
    <form class="form form-settings b-bank-account__form p-payment__item" action="/" method="POST">
      <div class="form-settings__fieldset">
        <div class="form-settings__wrapper b-bank-account__form-wrapper">
          <div class="form-settings__label">
            Credit card
            <div class="b-bank-account__form-cards">
              <div class="b-bank-account__form-card">
                <div class="b-bank-account__form-card-header">
                  <span class="b-bank-account__form-card-balance"
                      >Current balance</span>
                  <span class="b-bank-account__form-card-amount"
                      >10 000$</span>
                </div>
                <div class="b-bank-account__form-card-footer">
                  <span class="b-bank-account__form-card-name"
                      >Rubi Sparks</span>
                  <span class="b-bank-account__form-card-number"
                      >8898 5757 5535 7787</span>
                  <span class="b-bank-account__form-card-date">06/23</span>
                </div>
              </div>
              <div class="b-bank-account__form-new-card">
                <button class="b-bank-account__form-new-card-button" type="button">
                  Add a new card
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-settings__fieldset">
        <span class="form-settings__legend">Paypal</span>
        <div class="form-settings__wrapper b-bank-account__form-wrapper">
          <div class="
                form-settings__label
                b-bank-account__form-wallet
                b-bank-account__form-wallet--paypal
              ">
            <label for="paypal">Your account</label>
            <div class="b-bank-account__form-wallet-wrapper">
              <img class="
                    b-bank-account__form-wallet-icon
                    b-bank-account__form-wallet-icon--paypal
                  " src="<?= get_template_directory_uri(); ?>/assets/img/wallet-paypal.svg" alt="PayPal" />
              <input id="paypal" class="
                    form-settings__input
                    b-bank-account__form-wallet-input
                  " type="text" name="wallet_paypal" placeholder="@PayPal wallet" />
              <a class="b-bank-account__form-wallet-link" href="#">Link wallet</a>
            </div>
          </div>
        </div>
      </div>
      <div class="form-settings__fieldset">
        <span class="form-settings__legend">ADMON wallets</span>
        <div class="form-settings__wrapper b-bank-account__form-wrapper">
          <div class="
                form-settings__label
                b-bank-account__form-wallet b-bank-account__form-wallet--admon
              ">
            <label for="admon">Your account</label>
            <div class="b-bank-account__form-wallet-wrapper">
              <img class="
                    b-bank-account__form-wallet-icon
                    b-bank-account__form-wallet-icon--admon
                  " src="<?= get_template_directory_uri(); ?>/assets/img/wallet-admon.svg" alt="Admon" />
              <input id="admon" class="
                    form-settings__input
                    b-bank-account__form-wallet-input
                  " type="text" name="wallet_admon" placeholder="0xd7847aff46badbf167072b5c47692429d6839cca" />
              <a class="b-bank-account__form-wallet-link" href="#">Wallet address ERC-20</a>
            </div>
          </div>
        </div>
      </div>
      <button class="button button--light-blue form-settings__submit" type="submit">
        Save settings
      </button>
    </form>
    <div class="b-bank-account__history p-payment__item">
      <div class="table b-bank-account__history-table">
        <table class="table__body">
          <tr class="table__tr">
            <th class="table__th">Date</th>
            <th class="table__th">Description</th>
            <th class="table__th">Amount</th>
            <th class="table__th">Balance</th>
          </tr>
          <tr class="table__tr">
            <td class="table__td">02.22.2020</td>
            <td class="table__td">Photo session</td>
            <td class="table__td">+1000$</td>
            <td class="table__td">10 000$</td>
          </tr>
          <tr class="table__tr">
            <td class="table__td">02.22.2020</td>
            <td class="table__td">Photo session</td>
            <td class="table__td">+1000$</td>
            <td class="table__td">10 000$</td>
          </tr>
          <tr class="table__tr">
            <td class="table__td">02.22.2020</td>
            <td class="table__td">Photo session</td>
            <td class="table__td">+1000$</td>
            <td class="table__td">10 000$</td>
          </tr>
          <tr class="table__tr">
            <td class="table__td">02.22.2020</td>
            <td class="table__td">Photo session</td>
            <td class="table__td">+1000$</td>
            <td class="table__td">10 000$</td>
          </tr>
          <tr class="table__tr">
            <td class="table__td">02.22.2020</td>
            <td class="table__td">Photo session</td>
            <td class="table__td">+1000$</td>
            <td class="table__td">10 000$</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>