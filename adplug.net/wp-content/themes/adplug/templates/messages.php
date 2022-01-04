<?php 
/**
 * Template name: Messages
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="b-chat">
    <div class="b-chat__panel">
      <div class="b-chat__user">
        <div class="b-chat__user-picture">
          <img class="b-chat__user-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <span class="b-chat__user-picture-status"></span>
        </div>
        <span class="b-chat__user-name">John Clark</span>
        <div class="b-chat__user-status">Online</div>
        <button class="b-chat__user-button-settings" type="button" aria-label="Settings"></button>
      </div>
      <div class="b-chat__active-chats">
        <span class="b-chat__active-chats-title">Active Chats</span>
        <button class="b-chat__active-chats-add" type="button" aria-label="Add"></button>
      </div>
      <div class="b-chat__search">
        <input class="b-chat__search-input" type="text" placeholder="Search people">
      </div>
      <div class="b-chat__chats">
        <div class="b-chat__chats-item b-chat__chats-item--active">
          <div class="b-chat__chats-item-picture">
            <img class="b-chat__chats-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-1.jpg" alt="Alt">
            <span class="b-chat__chats-item-status b-chat__chats-item-status--online"></span>
          </div>
          <span class="b-chat__chats-item-name">Top Sanders</span>
          <p class="b-chat__chats-item-text">I would like to receive SMS notifications</p>
        </div>
        <div class="b-chat__chats-item">
          <div class="b-chat__chats-item-picture">
            <img class="b-chat__chats-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-2.jpg" alt="Alt">
            <span class="b-chat__chats-item-status b-chat__chats-item-status--online"></span>
          </div>
          <span class="b-chat__chats-item-name">Aaron Griffin</span>
          <p class="b-chat__chats-item-text">I would like to receive SMS notifications</p>
        </div>
        <div class="b-chat__chats-item">
          <div class="b-chat__chats-item-picture">
            <img class="b-chat__chats-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-3.jpg" alt="Alt">
            <span class="b-chat__chats-item-status"></span>
          </div>
          <span class="b-chat__chats-item-name">Anna Kora</span>
          <p class="b-chat__chats-item-text">I would like to receive SMS notifications</p>
        </div>
        <div class="b-chat__chats-item">
          <div class="b-chat__chats-item-picture">
            <img class="b-chat__chats-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-4.jpg" alt="Alt">
            <span class="b-chat__chats-item-status"></span>
          </div>
          <span class="b-chat__chats-item-name">Tyler Wade</span>
          <p class="b-chat__chats-item-text">I would like to receive SMS notifications</p>
        </div>
      </div>
    </div>
    <div class="b-chat__chat">
      <div class="b-chat__chat-header">
        <button class="b-chat__chat-back" type="button">Back</button>
        <div class="b-chat__chat-user-picture">
          <img class="b-chat__chat-user-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-1.jpg" alt="Alt">
          <span class="b-chat__chat-user-status b-chat__chat-user-status--online"></span>
        </div>
        <span class="b-chat__chat-user-name">Tom Sanders</span>
      </div>
      <div class="b-chat__chat-messages">
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hello Tom!</p>
            <p class="b-chat__chat-message-text">How are you doing today?</p>
          </div>
          <span class="b-chat__chat-message-date">09:35</span>
        </div>
        <div class="b-chat__chat-message b-chat__chat-message--interlocutor">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-1.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hi John! Nice to hear you again!</p>
            <p class="b-chat__chat-message-text">I'm fine, thank you! And what about</p>
          </div>
          <span class="b-chat__chat-message-date">09:42</span>
        </div>
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Yep, thanks!</p>
            <p class="b-chat__chat-message-text">May I ask you a favour?</p>
          </div>
          <span class="b-chat__chat-message-date">09:56</span>
        </div>
      </div>

      <div class="b-chat__chat-messages">
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hello Aaron!</p>
            <p class="b-chat__chat-message-text">How are you doing today?</p>
          </div>
          <span class="b-chat__chat-message-date">09:35</span>
        </div>
        <div class="b-chat__chat-message b-chat__chat-message--interlocutor">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-2.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hi John! Nice to hear you again!</p>
            <p class="b-chat__chat-message-text">I'm fine, thank you! And what about</p>
          </div>
          <span class="b-chat__chat-message-date">09:42</span>
        </div>
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Yep, thanks!</p>
            <p class="b-chat__chat-message-text">May I ask you a favour?</p>
          </div>
          <span class="b-chat__chat-message-date">09:56</span>
        </div>
      </div>

      <div class="b-chat__chat-messages">
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hello Anna!</p>
            <p class="b-chat__chat-message-text">How are you doing today?</p>
          </div>
          <span class="b-chat__chat-message-date">09:35</span>
        </div>
        <div class="b-chat__chat-message b-chat__chat-message--interlocutor">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-3.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hi John! Nice to hear you again!</p>
            <p class="b-chat__chat-message-text">I'm fine, thank you! And what about</p>
          </div>
          <span class="b-chat__chat-message-date">09:42</span>
        </div>
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Yep, thanks!</p>
            <p class="b-chat__chat-message-text">May I ask you a favour?</p>
          </div>
          <span class="b-chat__chat-message-date">09:56</span>
        </div>
      </div>

      <div class="b-chat__chat-messages">
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hello Tyler!</p>
            <p class="b-chat__chat-message-text">How are you doing today?</p>
          </div>
          <span class="b-chat__chat-message-date">09:35</span>
        </div>
        <div class="b-chat__chat-message b-chat__chat-message--interlocutor">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chats-item-user-4.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Hi John! Nice to hear you again!</p>
            <p class="b-chat__chat-message-text">I'm fine, thank you! And what about</p>
          </div>
          <span class="b-chat__chat-message-date">09:42</span>
        </div>
        <div class="b-chat__chat-message">
          <img class="b-chat__chat-message-photo" src="<?= get_template_directory_uri(); ?>/assets/img/chat-user.jpg" alt="Alt">
          <div class="b-chat__chat-message-content">
            <p class="b-chat__chat-message-text">Yep, thanks!</p>
            <p class="b-chat__chat-message-text">May I ask you a favour?</p>
          </div>
          <span class="b-chat__chat-message-date">09:56</span>
        </div>
      </div>

      <div class="b-chat__chat-footer">
        <input class="b-chat__chat-textarea" type="text" name="message" placeholder="Enter your message here">
        <div class="b-chat__chat-tools">
          <button class="b-chat__chat-emoticons" type="button" aria-label="Emoticons"></button>
          <button class="b-chat__chat-attachment" type="button" aria-label="Attachment"></button>
          <button class="b-chat__chat-send" type="button" aria-label="Send"></button>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>