<?php if (!is_singular('restaurant')) { ?>
  <footer class="footer">
    <div class="container-large">
      <div class="footer__container">
        <div class="block1">
          <div class="block1__logo">
            <div class="footer__logo">
              <?php if (!is_front_page()) { ?>
                <a href="<?php echo get_home_url(); ?>">
                  <svg width="89" height="60" viewBox="0 0 89 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.13903 22.5689C0.987598 22.5689 0.82629 22.5262 0.655107 22.4409C0.483923 22.3556 0.339075 22.2571 0.21398 22.1455C0.0921758 22.0339 0.019752 21.9387 0 21.8632C0.474047 20.4879 0.87567 19.2932 1.20487 18.2855C1.53736 17.2779 1.81389 16.326 2.04104 15.4299C2.26818 14.5339 2.47229 13.6017 2.65006 12.6302C2.83112 11.6586 3.00888 10.5459 3.18994 9.29207C3.371 8.03824 3.57181 6.52511 3.79896 4.75267C3.83517 4.5262 3.88455 4.36208 3.94052 4.25705C3.99648 4.15202 4.17754 4.10278 4.4804 4.10278C5.06638 4.10278 5.49105 4.25705 5.7577 4.56887C6.02106 4.88068 6.15603 5.22532 6.15603 5.60279C6.15603 5.79316 6.12311 6.12139 6.05727 6.59404C5.99143 7.06668 5.89267 7.62139 5.76099 8.26144C6.11982 7.71329 6.53132 7.19798 6.99549 6.70563C7.45966 6.21657 7.97321 5.81613 8.54272 5.50432C9.10895 5.1925 9.72455 5.03823 10.3862 5.03823C11.3113 5.03823 12.0783 5.35005 12.6841 5.9704C13.2898 6.59404 13.5926 7.41461 13.5926 8.43211C13.5926 9.16735 13.428 9.94525 13.0956 10.7658C12.7631 11.5864 12.2956 12.361 11.6899 13.0864C11.0841 13.8118 10.3566 14.4059 9.50728 14.8687C8.65465 15.3315 7.71973 15.5612 6.69921 15.5612C6.09348 15.5612 5.61285 15.4857 5.25073 15.3348C4.8919 15.1838 4.71084 15.0131 4.71084 14.826C4.71084 14.6947 4.78327 14.6127 4.92482 14.5864C5.06638 14.5601 5.22439 14.5437 5.39229 14.5437C6.28112 14.524 7.09096 14.3369 7.81849 13.9792C8.54602 13.6214 9.17479 13.1553 9.7048 12.5776C10.2348 12.0032 10.6397 11.3862 10.9228 10.7264C11.2059 10.0667 11.3475 9.4168 11.3475 8.77347C11.3475 8.20892 11.2191 7.71658 10.9656 7.30301C10.7089 6.88944 10.3072 6.67938 9.76076 6.67938C9.28671 6.67938 8.80938 6.83036 8.32874 7.13233C7.84811 7.4343 7.39711 7.81504 6.98232 8.27785C6.56753 8.74065 6.19882 9.21986 5.87621 9.72205C5.55359 10.221 5.30999 10.6608 5.1388 11.0382C4.77998 12.2822 4.45407 13.5229 4.16108 14.7571C3.86809 15.9912 3.58827 17.1367 3.32491 18.1936C3.06155 19.2505 2.79161 20.1466 2.51508 20.8818C2.24185 21.617 1.94228 22.116 1.62295 22.3818C1.47152 22.5131 1.31021 22.5788 1.14232 22.5788L1.13903 22.5689Z" fill="black" />
                    <path d="M20.9683 15.3874C20.2671 15.3874 19.7009 15.2036 19.2663 14.836C18.8318 14.4684 18.6145 13.9728 18.6145 13.3524C18.6145 12.824 18.7462 12.2594 19.0128 11.6555C19.2762 11.0515 19.5461 10.4575 19.8227 9.87321C20.0959 9.28896 20.2342 8.77036 20.2342 8.31741C20.2342 7.86445 20.0926 7.51981 19.8095 7.22769C19.5264 6.93557 19.1939 6.69596 18.8153 6.50559C18.4005 7.54279 17.9298 8.54717 17.4096 9.51872C16.8895 10.4903 16.4681 11.2485 16.1488 11.7966L15.7241 10.9761C15.9875 10.487 16.3397 9.78787 16.7743 8.88196C17.2088 7.97605 17.6269 6.96839 18.0219 5.8557C17.831 5.66861 17.7388 5.41259 17.7388 5.09092C17.7388 4.60186 17.8903 4.13906 18.1931 3.7058C18.496 3.27254 18.789 3.05591 19.0721 3.05591C19.2992 3.05591 19.4638 3.18392 19.5692 3.43665C19.6745 3.68939 19.7239 3.86663 19.7239 3.95854C19.7239 4.05044 19.6811 4.2244 19.5955 4.46729C19.5099 4.71346 19.4474 4.8907 19.4112 5.00558C19.4309 5.21237 19.5955 5.41587 19.9082 5.61281C20.221 5.80974 20.5765 6.04278 20.9716 6.30537C21.3699 6.57123 21.7188 6.89946 22.0217 7.29662C22.3246 7.69377 22.476 8.19268 22.476 8.79662C22.476 9.34476 22.3542 9.89947 22.1073 10.464C21.8604 11.0286 21.6168 11.557 21.3699 12.0494C21.123 12.5417 21.0012 12.9651 21.0012 13.3229C21.0012 13.5888 21.0736 13.7627 21.2152 13.8448C21.3567 13.9301 21.5213 13.9728 21.7123 13.9728C22.1666 13.9728 22.6373 13.8349 23.1311 13.5625C23.6216 13.2901 24.1055 12.9356 24.5763 12.5023C25.0503 12.0691 25.4651 11.6128 25.824 11.1303C26.1828 10.6511 26.456 10.2113 26.647 9.81413L27.3284 10.3229C26.9696 11.1336 26.4494 11.9312 25.768 12.7124C25.0866 13.4936 24.3294 14.1369 23.4998 14.6358C22.6669 15.1347 21.8275 15.3842 20.9749 15.3842L20.9683 15.3874Z" fill="black" />
                    <path d="M30.5848 15.8961C29.3734 15.8961 28.4417 15.5712 27.7899 14.9213C27.1381 14.2714 26.8122 13.4541 26.8122 12.476C26.8122 11.6455 27.0262 10.7659 27.4508 9.83044C27.8755 8.89827 28.4483 8.0219 29.166 7.20133C29.8836 6.38076 30.6803 5.71774 31.5494 5.20899C32.4185 4.70023 33.2875 4.44421 34.1599 4.44421C34.6504 4.44421 35.1179 4.57222 35.5656 4.82496C36.01 5.07769 36.2339 5.58317 36.2339 6.33809C36.2339 7.09302 36.0265 7.72321 35.6084 8.34685C35.1936 8.97048 34.634 9.52519 33.9361 10.0142C33.2349 10.5066 32.4645 10.907 31.6251 11.2156C30.7823 11.5274 29.9363 11.7309 29.087 11.8228C29.0672 11.8983 29.054 11.9771 29.0442 12.0624C29.0343 12.1477 29.031 12.2856 29.031 12.4727C29.031 12.5679 29.0442 12.732 29.0738 12.9683C29.1034 13.2046 29.1824 13.4541 29.3141 13.7167C29.4458 13.9792 29.6631 14.2057 29.9659 14.3961C30.2688 14.5865 30.6836 14.6784 31.2136 14.6784C32.007 14.6784 32.8069 14.4585 33.6102 14.0121C34.4134 13.569 35.1706 12.9814 35.8783 12.2462C36.5861 11.511 37.1787 10.6904 37.6527 9.78449L38.219 10.2374C37.7087 11.3698 37.0503 12.3578 36.2471 13.2079C35.4438 14.058 34.555 14.7178 33.5805 15.1871C32.6061 15.6598 31.6086 15.8928 30.5881 15.8928L30.5848 15.8961ZM29.3931 10.7757C29.8836 10.7199 30.4334 10.5493 31.0391 10.267C31.6448 9.98471 32.2242 9.62694 32.7839 9.19368C33.3402 8.76042 33.8011 8.28448 34.1599 7.76588C34.5188 7.24728 34.6998 6.7254 34.6998 6.19695C34.6998 5.99017 34.6603 5.84903 34.5879 5.77354C34.5122 5.69805 34.3904 5.66194 34.2192 5.66194C33.7846 5.66194 33.3303 5.81621 32.8563 6.12802C32.3822 6.43984 31.9214 6.84356 31.4671 7.34575C31.0128 7.84466 30.6079 8.39608 30.2457 9.00002C29.8869 9.60396 29.6038 10.1981 29.3931 10.7823V10.7757Z" fill="black" />
                    <path d="M53.0797 15.5284C52.3423 15.5284 51.7926 15.3118 51.4337 14.8785C51.0749 14.4453 50.8938 13.9267 50.8938 13.3227C50.8938 12.8895 50.9597 12.4562 51.0914 12.023C51.223 11.5897 51.3547 11.1597 51.4897 10.7363C51.6214 10.3129 51.6872 9.92887 51.6872 9.59079C51.6872 9.26913 51.6247 9.04921 51.5029 8.92777C51.3811 8.80633 51.223 8.74396 51.0354 8.74396C50.6009 8.74396 50.0939 9.07547 49.5178 9.73521C48.9417 10.395 48.2273 11.3567 47.3747 12.6203C47.0718 13.0733 46.7887 13.5492 46.5221 14.0481C46.2554 14.547 46.0217 14.9672 45.8143 15.3052C45.6431 15.3052 45.4226 15.2757 45.1493 15.2199C44.8761 15.1641 44.6325 15.082 44.4251 14.9803C44.2177 14.8753 44.1123 14.7407 44.1123 14.57C44.1123 14.3993 44.2078 14.0711 44.3954 13.5788C44.5831 13.0897 44.8004 12.5186 45.0473 11.8687C45.2942 11.2188 45.5114 10.5788 45.6991 9.94528C45.8867 9.31508 45.9822 8.78007 45.9822 8.34681C45.9822 8.08422 45.9361 7.87744 45.8406 7.72317C45.7452 7.57219 45.5937 7.4967 45.3863 7.4967C44.988 7.4967 44.5107 7.73302 43.9543 8.20239C43.398 8.67503 42.8087 9.2921 42.1964 10.0536C41.5808 10.8184 41.0047 11.6652 40.4648 12.6006C39.9249 13.5328 39.4871 14.4715 39.1447 15.4136C38.9373 15.4136 38.6805 15.3709 38.3777 15.2856C38.0748 15.2002 37.8115 15.0952 37.5843 14.9737C37.3572 14.8523 37.2452 14.744 37.2452 14.6488C37.2452 14.6291 37.3111 14.3599 37.4428 13.8413C37.5744 13.3227 37.7357 12.6761 37.9267 11.9048C38.1176 11.1302 38.3151 10.3392 38.5225 9.52843C38.7299 8.7177 38.911 8.01201 39.0624 7.40807C39.1184 7.20129 39.3258 7.01748 39.6879 6.85665C40.0467 6.69582 40.3595 6.61704 40.6228 6.61704C40.8862 6.61704 41.1133 6.70238 41.3043 6.87306C41.4919 7.04374 41.5874 7.27022 41.5874 7.55249C41.5874 7.73958 41.5479 8.0153 41.4755 8.37306C41.3997 8.73083 41.3043 9.13784 41.1923 9.58751C41.5907 9.05906 42.0088 8.53718 42.4532 8.01858C42.8976 7.49998 43.3618 7.03389 43.8424 6.61704C44.3263 6.20348 44.8069 5.87197 45.2909 5.62579C45.7715 5.37962 46.2488 5.25818 46.7229 5.25818C47.4208 5.25818 47.8948 5.50763 48.1417 6.00654C48.3886 6.50545 48.5104 7.0503 48.5104 7.63455C48.5104 7.88072 48.4907 8.12033 48.4545 8.35665C48.415 8.59298 48.3656 8.8293 48.2998 9.06234C48.2339 9.29867 48.145 9.57766 48.0298 9.89604C48.3886 9.3676 48.7804 8.88182 49.2083 8.43871C49.633 7.9956 50.0906 7.64112 50.5844 7.37853C51.0749 7.11595 51.595 6.98138 52.1448 6.98138C52.8822 6.98138 53.3925 7.20457 53.6756 7.6444C53.9587 8.08751 54.1003 8.57328 54.1003 9.10173C54.1003 9.59079 54.0179 10.1061 53.8599 10.6444C53.6986 11.1827 53.5373 11.6915 53.376 12.1707C53.2147 12.6499 53.1357 13.0602 53.1357 13.4015C53.1357 13.5886 53.1818 13.7659 53.2773 13.9234C53.3727 14.0842 53.5604 14.163 53.8435 14.163C54.3537 14.163 54.8442 13.9267 55.3183 13.4573C55.7923 12.988 56.2302 12.407 56.6384 11.7177C57.0433 11.0284 57.3889 10.3753 57.6721 9.75162L58.156 10.3457C57.8531 11.1203 57.4614 11.9048 56.9774 12.709C56.4968 13.5098 55.9339 14.1794 55.2887 14.7177C54.6467 15.256 53.9093 15.5252 53.0764 15.5252L53.0797 15.5284Z" fill="black" />
                    <path d="M60.5139 15.4989C59.6811 15.4989 59.0589 15.2528 58.6408 14.7637C58.2227 14.2746 58.0153 13.6806 58.0153 12.9814C58.0153 12.5482 58.091 12 58.2425 11.3403C58.3939 10.6805 58.6079 9.98798 58.8811 9.2626C59.1543 8.53722 59.4704 7.8545 59.8325 7.21117C60.1913 6.57113 60.5798 6.04596 60.9946 5.64224C61.4094 5.23852 61.8274 5.03502 62.2422 5.03502C62.4694 5.03502 62.6669 5.10723 62.8381 5.24837C63.0093 5.38951 63.0949 5.59301 63.0949 5.85559C63.0949 6.10176 62.9467 6.46938 62.6537 6.95844C62.3608 7.45078 62.0184 8.01533 61.6332 8.65538C61.2448 9.29542 60.9057 9.96173 60.6127 10.651C60.3197 11.3403 60.1716 11.9935 60.1716 12.6171C60.1716 13.2407 60.2802 13.6215 60.4975 13.8184C60.7148 14.0153 61.0308 14.1171 61.4489 14.1171C62.0908 14.1171 62.792 13.7954 63.5492 13.1554C64.3063 12.5153 65.0898 11.3928 65.9029 9.79105L66.3276 10.244C65.6659 11.9048 64.8232 13.1948 63.8026 14.1204C62.7821 15.0427 61.6859 15.5055 60.5106 15.5055L60.5139 15.4989ZM63.8619 2.74399C63.5031 2.74399 63.1772 2.65537 62.8842 2.47484C62.5912 2.29432 62.443 2.0186 62.443 1.64114C62.443 1.18819 62.6899 0.800877 63.1805 0.482496C63.671 0.160832 64.1812 0 64.7112 0C65.0503 0 65.34 0.0754925 65.577 0.226477C65.8141 0.377462 65.9326 0.649892 65.9326 1.04705C65.9326 1.4442 65.7153 1.82495 65.2807 2.19256C64.8462 2.56018 64.3722 2.74399 63.8619 2.74399Z" fill="black" />
                    <path d="M69.7304 15.8961C68.5189 15.8961 67.5873 15.5712 66.9355 14.9213C66.2837 14.2714 65.9578 13.4541 65.9578 12.476C65.9578 11.6455 66.1717 10.7659 66.5964 9.83044C67.0211 8.89827 67.5939 8.0219 68.3115 7.20133C69.0292 6.38076 69.8259 5.71774 70.6949 5.20899C71.564 4.70023 72.4331 4.44421 73.3055 4.44421C73.796 4.44421 74.2635 4.57222 74.7112 4.82496C75.1556 5.07769 75.3795 5.58317 75.3795 6.33809C75.3795 7.09302 75.1721 7.72321 74.754 8.34685C74.3392 8.97048 73.7795 9.52519 73.0816 10.0142C72.3804 10.5066 71.6101 10.907 70.7707 11.2156C69.9279 11.5274 69.0819 11.7309 68.2325 11.8228C68.2128 11.8983 68.1996 11.9771 68.1897 12.0624C68.1799 12.1477 68.1766 12.2856 68.1766 12.4727C68.1766 12.5679 68.1897 12.732 68.2194 12.9683C68.249 13.2046 68.328 13.4541 68.4597 13.7167C68.5914 13.9792 68.8086 14.2057 69.1115 14.3961C69.4144 14.5865 69.8292 14.6784 70.3592 14.6784C71.1525 14.6784 71.9525 14.4585 72.7557 14.0121C73.559 13.569 74.3161 12.9814 75.0239 12.2462C75.7317 11.511 76.3243 10.6904 76.7983 9.78449L77.3645 10.2374C76.8543 11.3698 76.1959 12.3578 75.3926 13.2079C74.5894 14.058 73.7005 14.7178 72.7261 15.1871C71.7517 15.6598 70.7542 15.8928 69.7337 15.8928L69.7304 15.8961ZM68.5387 10.7757C69.0292 10.7199 69.579 10.5493 70.1847 10.267C70.7904 9.98471 71.3698 9.62694 71.9294 9.19368C72.4858 8.76042 72.9467 8.28448 73.3055 7.76588C73.6643 7.24728 73.8454 6.7254 73.8454 6.19695C73.8454 5.99017 73.8059 5.84903 73.7335 5.77354C73.6577 5.69805 73.5359 5.66194 73.3647 5.66194C72.9302 5.66194 72.4759 5.81621 72.0019 6.12802C71.5278 6.43984 71.0669 6.84356 70.6126 7.34575C70.1583 7.84466 69.7534 8.39608 69.3913 9.00002C69.0325 9.60396 68.7494 10.1981 68.5387 10.7823V10.7757Z" fill="black" />
                    <path d="M82.639 15.3874C81.9378 15.3874 81.3716 15.2036 80.9371 14.836C80.5025 14.4684 80.2853 13.9728 80.2853 13.3524C80.2853 12.824 80.4169 12.2594 80.6836 11.6555C80.947 11.0515 81.2169 10.4575 81.4934 9.87321C81.7667 9.28896 81.9049 8.77036 81.9049 8.31741C81.9049 7.86445 81.7634 7.51981 81.4803 7.22769C81.1972 6.93557 80.8647 6.69596 80.4861 6.50559C80.0713 7.54279 79.6005 8.54717 79.0804 9.51872C78.5603 10.4903 78.1389 11.2485 77.8196 11.7966L77.3949 10.9761C77.6583 10.487 78.0105 9.78787 78.445 8.88196C78.8796 7.97605 79.2977 6.96839 79.6927 5.8557C79.5018 5.66861 79.4096 5.41259 79.4096 5.09092C79.4096 4.60186 79.561 4.13906 79.8639 3.7058C80.1668 3.27254 80.4597 3.05591 80.7429 3.05591C80.97 3.05591 81.1346 3.18392 81.2399 3.43665C81.3453 3.68939 81.3947 3.86663 81.3947 3.95854C81.3947 4.05044 81.3519 4.2244 81.2663 4.46729C81.1807 4.71346 81.1181 4.8907 81.0819 5.00558C81.1017 5.21237 81.2663 5.41587 81.579 5.61281C81.8918 5.80974 82.2473 6.04278 82.6423 6.30537C83.0407 6.57123 83.3896 6.89946 83.6925 7.29662C83.9953 7.69377 84.1468 8.19268 84.1468 8.79662C84.1468 9.34476 84.025 9.89947 83.7781 10.464C83.5312 11.0286 83.2876 11.557 83.0407 12.0494C82.7938 12.5417 82.672 12.9651 82.672 13.3229C82.672 13.5888 82.7444 13.7627 82.8859 13.8448C83.0275 13.9301 83.1921 13.9728 83.383 13.9728C83.8373 13.9728 84.3081 13.8349 84.8019 13.5625C85.2924 13.2901 85.7763 12.9356 86.2471 12.5023C86.7211 12.0691 87.1359 11.6128 87.4947 11.1303C87.8536 10.6511 88.1268 10.2113 88.3177 9.81413L88.9992 10.3229C88.6403 11.1336 88.1202 11.9312 87.4388 12.7124C86.7573 13.4936 86.0002 14.1369 85.1706 14.6358C84.3377 15.1347 83.4983 15.3842 82.6456 15.3842L82.639 15.3874Z" fill="black" />
                    <path d="M23.0816 26.7274C24.53 27.0392 25.8304 27.4758 26.9859 28.0338L24.8131 34.6837L24.1712 34.9791C23.2824 34.3226 22.2783 33.8139 21.159 33.4528C20.0398 33.0918 18.904 32.9112 17.7485 32.9112C14.8483 32.9112 12.7184 33.9123 11.3522 35.9145C9.98601 37.9167 9.30128 40.9397 9.30128 44.9769C9.30128 50.4616 11.4082 53.2023 15.6252 53.2023C16.7445 53.2023 17.9461 53.048 19.2332 52.7329C20.5171 52.4211 21.6858 52.001 22.7425 51.4758L23.3844 51.8697L21.903 58.5688C20.6192 59.094 19.3912 59.4616 18.2226 59.6783C17.0539 59.8916 15.8095 59.9999 14.4927 59.9999C10.0123 59.9999 6.5788 58.8084 4.1921 56.4288C1.80541 54.0491 0.610413 50.6585 0.610413 46.257C0.610413 42.118 1.30832 38.5469 2.7107 35.5436C4.1098 32.5371 6.15084 30.2395 8.8371 28.6476C11.5201 27.0557 14.7561 26.2581 18.5452 26.2581C20.1254 26.2581 21.6397 26.4156 23.0914 26.7274H23.0816Z" fill="black" />
                    <path d="M51.4643 41.7997C50.2627 43.7198 48.574 45.3051 46.4012 46.5524C48.2118 50.1334 50.187 53.6782 52.3301 57.1936L52.182 58.0305C49.5813 58.8511 46.928 59.3599 44.2285 59.5568L43.5372 58.9168C41.9241 54.9747 40.637 51.5776 39.6823 48.722H35.4817V48.8697L34.5929 59.0185H26.7382L28.3183 49.6115L30.6886 27.2493L43.3858 27.2001C46.4802 27.2001 48.9032 27.9156 50.6479 29.3434C52.3927 30.7712 53.265 32.7996 53.265 35.4255C53.265 37.7559 52.6626 39.8828 51.461 41.8029L51.4643 41.7997ZM36.3705 42.8598L40.6699 43.0568C42.1513 42.5316 43.2311 41.7439 43.9059 40.6935C44.5808 39.6432 44.9198 38.3139 44.9198 36.7023C44.9198 35.4222 44.5577 34.4703 43.8335 33.8467C43.1092 33.2231 42.0064 32.8784 40.5217 32.8128L37.8058 32.9605L36.3738 42.8631L36.3705 42.8598Z" fill="black" />
                    <path d="M82.3681 43.3521L81.7755 47.8849C81.3146 51.63 79.8991 54.502 77.5255 56.5042C75.1553 58.5064 71.8765 59.5075 67.6956 59.5075C64.0382 59.5075 61.1907 58.7132 59.1496 57.118C57.1086 55.5261 56.0881 53.2679 56.0881 50.3434C56.0881 49.6213 56.1375 48.8499 56.2362 48.0294L56.9275 43.2504L58.7052 27.2427H66.5105L63.742 46.9954C63.6761 47.7832 63.6432 48.3248 63.6432 48.6202C63.6432 50.1957 64.0218 51.3543 64.7789 52.0928C65.5361 52.8314 66.7212 53.2022 68.3376 53.2022C70.2469 53.2022 71.7053 52.7198 72.7093 51.7482C73.7134 50.7799 74.3323 49.2602 74.5627 47.1924L76.6861 27.2427H84.5902L82.3681 43.3521Z" fill="black" />
                  </svg>
                </a>

              <?php } else { ?>
                <span>

                  <svg width="130" height="88" viewBox="0 0 89 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.13903 22.5689C0.987598 22.5689 0.82629 22.5262 0.655107 22.4409C0.483923 22.3556 0.339075 22.2571 0.21398 22.1455C0.0921758 22.0339 0.019752 21.9387 0 21.8632C0.474047 20.4879 0.87567 19.2932 1.20487 18.2855C1.53736 17.2779 1.81389 16.326 2.04104 15.4299C2.26818 14.5339 2.47229 13.6017 2.65006 12.6302C2.83112 11.6586 3.00888 10.5459 3.18994 9.29207C3.371 8.03824 3.57181 6.52511 3.79896 4.75267C3.83517 4.5262 3.88455 4.36208 3.94052 4.25705C3.99648 4.15202 4.17754 4.10278 4.4804 4.10278C5.06638 4.10278 5.49105 4.25705 5.7577 4.56887C6.02106 4.88068 6.15603 5.22532 6.15603 5.60279C6.15603 5.79316 6.12311 6.12139 6.05727 6.59404C5.99143 7.06668 5.89267 7.62139 5.76099 8.26144C6.11982 7.71329 6.53132 7.19798 6.99549 6.70563C7.45966 6.21657 7.97321 5.81613 8.54272 5.50432C9.10895 5.1925 9.72455 5.03823 10.3862 5.03823C11.3113 5.03823 12.0783 5.35005 12.6841 5.9704C13.2898 6.59404 13.5926 7.41461 13.5926 8.43211C13.5926 9.16735 13.428 9.94525 13.0956 10.7658C12.7631 11.5864 12.2956 12.361 11.6899 13.0864C11.0841 13.8118 10.3566 14.4059 9.50728 14.8687C8.65465 15.3315 7.71973 15.5612 6.69921 15.5612C6.09348 15.5612 5.61285 15.4857 5.25073 15.3348C4.8919 15.1838 4.71084 15.0131 4.71084 14.826C4.71084 14.6947 4.78327 14.6127 4.92482 14.5864C5.06638 14.5601 5.22439 14.5437 5.39229 14.5437C6.28112 14.524 7.09096 14.3369 7.81849 13.9792C8.54602 13.6214 9.17479 13.1553 9.7048 12.5776C10.2348 12.0032 10.6397 11.3862 10.9228 10.7264C11.2059 10.0667 11.3475 9.4168 11.3475 8.77347C11.3475 8.20892 11.2191 7.71658 10.9656 7.30301C10.7089 6.88944 10.3072 6.67938 9.76076 6.67938C9.28671 6.67938 8.80938 6.83036 8.32874 7.13233C7.84811 7.4343 7.39711 7.81504 6.98232 8.27785C6.56753 8.74065 6.19882 9.21986 5.87621 9.72205C5.55359 10.221 5.30999 10.6608 5.1388 11.0382C4.77998 12.2822 4.45407 13.5229 4.16108 14.7571C3.86809 15.9912 3.58827 17.1367 3.32491 18.1936C3.06155 19.2505 2.79161 20.1466 2.51508 20.8818C2.24185 21.617 1.94228 22.116 1.62295 22.3818C1.47152 22.5131 1.31021 22.5788 1.14232 22.5788L1.13903 22.5689Z" fill="black" />
                    <path d="M20.9683 15.3874C20.2671 15.3874 19.7009 15.2036 19.2663 14.836C18.8318 14.4684 18.6145 13.9728 18.6145 13.3524C18.6145 12.824 18.7462 12.2594 19.0128 11.6555C19.2762 11.0515 19.5461 10.4575 19.8227 9.87321C20.0959 9.28896 20.2342 8.77036 20.2342 8.31741C20.2342 7.86445 20.0926 7.51981 19.8095 7.22769C19.5264 6.93557 19.1939 6.69596 18.8153 6.50559C18.4005 7.54279 17.9298 8.54717 17.4096 9.51872C16.8895 10.4903 16.4681 11.2485 16.1488 11.7966L15.7241 10.9761C15.9875 10.487 16.3397 9.78787 16.7743 8.88196C17.2088 7.97605 17.6269 6.96839 18.0219 5.8557C17.831 5.66861 17.7388 5.41259 17.7388 5.09092C17.7388 4.60186 17.8903 4.13906 18.1931 3.7058C18.496 3.27254 18.789 3.05591 19.0721 3.05591C19.2992 3.05591 19.4638 3.18392 19.5692 3.43665C19.6745 3.68939 19.7239 3.86663 19.7239 3.95854C19.7239 4.05044 19.6811 4.2244 19.5955 4.46729C19.5099 4.71346 19.4474 4.8907 19.4112 5.00558C19.4309 5.21237 19.5955 5.41587 19.9082 5.61281C20.221 5.80974 20.5765 6.04278 20.9716 6.30537C21.3699 6.57123 21.7188 6.89946 22.0217 7.29662C22.3246 7.69377 22.476 8.19268 22.476 8.79662C22.476 9.34476 22.3542 9.89947 22.1073 10.464C21.8604 11.0286 21.6168 11.557 21.3699 12.0494C21.123 12.5417 21.0012 12.9651 21.0012 13.3229C21.0012 13.5888 21.0736 13.7627 21.2152 13.8448C21.3567 13.9301 21.5213 13.9728 21.7123 13.9728C22.1666 13.9728 22.6373 13.8349 23.1311 13.5625C23.6216 13.2901 24.1055 12.9356 24.5763 12.5023C25.0503 12.0691 25.4651 11.6128 25.824 11.1303C26.1828 10.6511 26.456 10.2113 26.647 9.81413L27.3284 10.3229C26.9696 11.1336 26.4494 11.9312 25.768 12.7124C25.0866 13.4936 24.3294 14.1369 23.4998 14.6358C22.6669 15.1347 21.8275 15.3842 20.9749 15.3842L20.9683 15.3874Z" fill="black" />
                    <path d="M30.5848 15.8961C29.3734 15.8961 28.4417 15.5712 27.7899 14.9213C27.1381 14.2714 26.8122 13.4541 26.8122 12.476C26.8122 11.6455 27.0262 10.7659 27.4508 9.83044C27.8755 8.89827 28.4483 8.0219 29.166 7.20133C29.8836 6.38076 30.6803 5.71774 31.5494 5.20899C32.4185 4.70023 33.2875 4.44421 34.1599 4.44421C34.6504 4.44421 35.1179 4.57222 35.5656 4.82496C36.01 5.07769 36.2339 5.58317 36.2339 6.33809C36.2339 7.09302 36.0265 7.72321 35.6084 8.34685C35.1936 8.97048 34.634 9.52519 33.9361 10.0142C33.2349 10.5066 32.4645 10.907 31.6251 11.2156C30.7823 11.5274 29.9363 11.7309 29.087 11.8228C29.0672 11.8983 29.054 11.9771 29.0442 12.0624C29.0343 12.1477 29.031 12.2856 29.031 12.4727C29.031 12.5679 29.0442 12.732 29.0738 12.9683C29.1034 13.2046 29.1824 13.4541 29.3141 13.7167C29.4458 13.9792 29.6631 14.2057 29.9659 14.3961C30.2688 14.5865 30.6836 14.6784 31.2136 14.6784C32.007 14.6784 32.8069 14.4585 33.6102 14.0121C34.4134 13.569 35.1706 12.9814 35.8783 12.2462C36.5861 11.511 37.1787 10.6904 37.6527 9.78449L38.219 10.2374C37.7087 11.3698 37.0503 12.3578 36.2471 13.2079C35.4438 14.058 34.555 14.7178 33.5805 15.1871C32.6061 15.6598 31.6086 15.8928 30.5881 15.8928L30.5848 15.8961ZM29.3931 10.7757C29.8836 10.7199 30.4334 10.5493 31.0391 10.267C31.6448 9.98471 32.2242 9.62694 32.7839 9.19368C33.3402 8.76042 33.8011 8.28448 34.1599 7.76588C34.5188 7.24728 34.6998 6.7254 34.6998 6.19695C34.6998 5.99017 34.6603 5.84903 34.5879 5.77354C34.5122 5.69805 34.3904 5.66194 34.2192 5.66194C33.7846 5.66194 33.3303 5.81621 32.8563 6.12802C32.3822 6.43984 31.9214 6.84356 31.4671 7.34575C31.0128 7.84466 30.6079 8.39608 30.2457 9.00002C29.8869 9.60396 29.6038 10.1981 29.3931 10.7823V10.7757Z" fill="black" />
                    <path d="M53.0797 15.5284C52.3423 15.5284 51.7926 15.3118 51.4337 14.8785C51.0749 14.4453 50.8938 13.9267 50.8938 13.3227C50.8938 12.8895 50.9597 12.4562 51.0914 12.023C51.223 11.5897 51.3547 11.1597 51.4897 10.7363C51.6214 10.3129 51.6872 9.92887 51.6872 9.59079C51.6872 9.26913 51.6247 9.04921 51.5029 8.92777C51.3811 8.80633 51.223 8.74396 51.0354 8.74396C50.6009 8.74396 50.0939 9.07547 49.5178 9.73521C48.9417 10.395 48.2273 11.3567 47.3747 12.6203C47.0718 13.0733 46.7887 13.5492 46.5221 14.0481C46.2554 14.547 46.0217 14.9672 45.8143 15.3052C45.6431 15.3052 45.4226 15.2757 45.1493 15.2199C44.8761 15.1641 44.6325 15.082 44.4251 14.9803C44.2177 14.8753 44.1123 14.7407 44.1123 14.57C44.1123 14.3993 44.2078 14.0711 44.3954 13.5788C44.5831 13.0897 44.8004 12.5186 45.0473 11.8687C45.2942 11.2188 45.5114 10.5788 45.6991 9.94528C45.8867 9.31508 45.9822 8.78007 45.9822 8.34681C45.9822 8.08422 45.9361 7.87744 45.8406 7.72317C45.7452 7.57219 45.5937 7.4967 45.3863 7.4967C44.988 7.4967 44.5107 7.73302 43.9543 8.20239C43.398 8.67503 42.8087 9.2921 42.1964 10.0536C41.5808 10.8184 41.0047 11.6652 40.4648 12.6006C39.9249 13.5328 39.4871 14.4715 39.1447 15.4136C38.9373 15.4136 38.6805 15.3709 38.3777 15.2856C38.0748 15.2002 37.8115 15.0952 37.5843 14.9737C37.3572 14.8523 37.2452 14.744 37.2452 14.6488C37.2452 14.6291 37.3111 14.3599 37.4428 13.8413C37.5744 13.3227 37.7357 12.6761 37.9267 11.9048C38.1176 11.1302 38.3151 10.3392 38.5225 9.52843C38.7299 8.7177 38.911 8.01201 39.0624 7.40807C39.1184 7.20129 39.3258 7.01748 39.6879 6.85665C40.0467 6.69582 40.3595 6.61704 40.6228 6.61704C40.8862 6.61704 41.1133 6.70238 41.3043 6.87306C41.4919 7.04374 41.5874 7.27022 41.5874 7.55249C41.5874 7.73958 41.5479 8.0153 41.4755 8.37306C41.3997 8.73083 41.3043 9.13784 41.1923 9.58751C41.5907 9.05906 42.0088 8.53718 42.4532 8.01858C42.8976 7.49998 43.3618 7.03389 43.8424 6.61704C44.3263 6.20348 44.8069 5.87197 45.2909 5.62579C45.7715 5.37962 46.2488 5.25818 46.7229 5.25818C47.4208 5.25818 47.8948 5.50763 48.1417 6.00654C48.3886 6.50545 48.5104 7.0503 48.5104 7.63455C48.5104 7.88072 48.4907 8.12033 48.4545 8.35665C48.415 8.59298 48.3656 8.8293 48.2998 9.06234C48.2339 9.29867 48.145 9.57766 48.0298 9.89604C48.3886 9.3676 48.7804 8.88182 49.2083 8.43871C49.633 7.9956 50.0906 7.64112 50.5844 7.37853C51.0749 7.11595 51.595 6.98138 52.1448 6.98138C52.8822 6.98138 53.3925 7.20457 53.6756 7.6444C53.9587 8.08751 54.1003 8.57328 54.1003 9.10173C54.1003 9.59079 54.0179 10.1061 53.8599 10.6444C53.6986 11.1827 53.5373 11.6915 53.376 12.1707C53.2147 12.6499 53.1357 13.0602 53.1357 13.4015C53.1357 13.5886 53.1818 13.7659 53.2773 13.9234C53.3727 14.0842 53.5604 14.163 53.8435 14.163C54.3537 14.163 54.8442 13.9267 55.3183 13.4573C55.7923 12.988 56.2302 12.407 56.6384 11.7177C57.0433 11.0284 57.3889 10.3753 57.6721 9.75162L58.156 10.3457C57.8531 11.1203 57.4614 11.9048 56.9774 12.709C56.4968 13.5098 55.9339 14.1794 55.2887 14.7177C54.6467 15.256 53.9093 15.5252 53.0764 15.5252L53.0797 15.5284Z" fill="black" />
                    <path d="M60.5139 15.4989C59.6811 15.4989 59.0589 15.2528 58.6408 14.7637C58.2227 14.2746 58.0153 13.6806 58.0153 12.9814C58.0153 12.5482 58.091 12 58.2425 11.3403C58.3939 10.6805 58.6079 9.98798 58.8811 9.2626C59.1543 8.53722 59.4704 7.8545 59.8325 7.21117C60.1913 6.57113 60.5798 6.04596 60.9946 5.64224C61.4094 5.23852 61.8274 5.03502 62.2422 5.03502C62.4694 5.03502 62.6669 5.10723 62.8381 5.24837C63.0093 5.38951 63.0949 5.59301 63.0949 5.85559C63.0949 6.10176 62.9467 6.46938 62.6537 6.95844C62.3608 7.45078 62.0184 8.01533 61.6332 8.65538C61.2448 9.29542 60.9057 9.96173 60.6127 10.651C60.3197 11.3403 60.1716 11.9935 60.1716 12.6171C60.1716 13.2407 60.2802 13.6215 60.4975 13.8184C60.7148 14.0153 61.0308 14.1171 61.4489 14.1171C62.0908 14.1171 62.792 13.7954 63.5492 13.1554C64.3063 12.5153 65.0898 11.3928 65.9029 9.79105L66.3276 10.244C65.6659 11.9048 64.8232 13.1948 63.8026 14.1204C62.7821 15.0427 61.6859 15.5055 60.5106 15.5055L60.5139 15.4989ZM63.8619 2.74399C63.5031 2.74399 63.1772 2.65537 62.8842 2.47484C62.5912 2.29432 62.443 2.0186 62.443 1.64114C62.443 1.18819 62.6899 0.800877 63.1805 0.482496C63.671 0.160832 64.1812 0 64.7112 0C65.0503 0 65.34 0.0754925 65.577 0.226477C65.8141 0.377462 65.9326 0.649892 65.9326 1.04705C65.9326 1.4442 65.7153 1.82495 65.2807 2.19256C64.8462 2.56018 64.3722 2.74399 63.8619 2.74399Z" fill="black" />
                    <path d="M69.7304 15.8961C68.5189 15.8961 67.5873 15.5712 66.9355 14.9213C66.2837 14.2714 65.9578 13.4541 65.9578 12.476C65.9578 11.6455 66.1717 10.7659 66.5964 9.83044C67.0211 8.89827 67.5939 8.0219 68.3115 7.20133C69.0292 6.38076 69.8259 5.71774 70.6949 5.20899C71.564 4.70023 72.4331 4.44421 73.3055 4.44421C73.796 4.44421 74.2635 4.57222 74.7112 4.82496C75.1556 5.07769 75.3795 5.58317 75.3795 6.33809C75.3795 7.09302 75.1721 7.72321 74.754 8.34685C74.3392 8.97048 73.7795 9.52519 73.0816 10.0142C72.3804 10.5066 71.6101 10.907 70.7707 11.2156C69.9279 11.5274 69.0819 11.7309 68.2325 11.8228C68.2128 11.8983 68.1996 11.9771 68.1897 12.0624C68.1799 12.1477 68.1766 12.2856 68.1766 12.4727C68.1766 12.5679 68.1897 12.732 68.2194 12.9683C68.249 13.2046 68.328 13.4541 68.4597 13.7167C68.5914 13.9792 68.8086 14.2057 69.1115 14.3961C69.4144 14.5865 69.8292 14.6784 70.3592 14.6784C71.1525 14.6784 71.9525 14.4585 72.7557 14.0121C73.559 13.569 74.3161 12.9814 75.0239 12.2462C75.7317 11.511 76.3243 10.6904 76.7983 9.78449L77.3645 10.2374C76.8543 11.3698 76.1959 12.3578 75.3926 13.2079C74.5894 14.058 73.7005 14.7178 72.7261 15.1871C71.7517 15.6598 70.7542 15.8928 69.7337 15.8928L69.7304 15.8961ZM68.5387 10.7757C69.0292 10.7199 69.579 10.5493 70.1847 10.267C70.7904 9.98471 71.3698 9.62694 71.9294 9.19368C72.4858 8.76042 72.9467 8.28448 73.3055 7.76588C73.6643 7.24728 73.8454 6.7254 73.8454 6.19695C73.8454 5.99017 73.8059 5.84903 73.7335 5.77354C73.6577 5.69805 73.5359 5.66194 73.3647 5.66194C72.9302 5.66194 72.4759 5.81621 72.0019 6.12802C71.5278 6.43984 71.0669 6.84356 70.6126 7.34575C70.1583 7.84466 69.7534 8.39608 69.3913 9.00002C69.0325 9.60396 68.7494 10.1981 68.5387 10.7823V10.7757Z" fill="black" />
                    <path d="M82.639 15.3874C81.9378 15.3874 81.3716 15.2036 80.9371 14.836C80.5025 14.4684 80.2853 13.9728 80.2853 13.3524C80.2853 12.824 80.4169 12.2594 80.6836 11.6555C80.947 11.0515 81.2169 10.4575 81.4934 9.87321C81.7667 9.28896 81.9049 8.77036 81.9049 8.31741C81.9049 7.86445 81.7634 7.51981 81.4803 7.22769C81.1972 6.93557 80.8647 6.69596 80.4861 6.50559C80.0713 7.54279 79.6005 8.54717 79.0804 9.51872C78.5603 10.4903 78.1389 11.2485 77.8196 11.7966L77.3949 10.9761C77.6583 10.487 78.0105 9.78787 78.445 8.88196C78.8796 7.97605 79.2977 6.96839 79.6927 5.8557C79.5018 5.66861 79.4096 5.41259 79.4096 5.09092C79.4096 4.60186 79.561 4.13906 79.8639 3.7058C80.1668 3.27254 80.4597 3.05591 80.7429 3.05591C80.97 3.05591 81.1346 3.18392 81.2399 3.43665C81.3453 3.68939 81.3947 3.86663 81.3947 3.95854C81.3947 4.05044 81.3519 4.2244 81.2663 4.46729C81.1807 4.71346 81.1181 4.8907 81.0819 5.00558C81.1017 5.21237 81.2663 5.41587 81.579 5.61281C81.8918 5.80974 82.2473 6.04278 82.6423 6.30537C83.0407 6.57123 83.3896 6.89946 83.6925 7.29662C83.9953 7.69377 84.1468 8.19268 84.1468 8.79662C84.1468 9.34476 84.025 9.89947 83.7781 10.464C83.5312 11.0286 83.2876 11.557 83.0407 12.0494C82.7938 12.5417 82.672 12.9651 82.672 13.3229C82.672 13.5888 82.7444 13.7627 82.8859 13.8448C83.0275 13.9301 83.1921 13.9728 83.383 13.9728C83.8373 13.9728 84.3081 13.8349 84.8019 13.5625C85.2924 13.2901 85.7763 12.9356 86.2471 12.5023C86.7211 12.0691 87.1359 11.6128 87.4947 11.1303C87.8536 10.6511 88.1268 10.2113 88.3177 9.81413L88.9992 10.3229C88.6403 11.1336 88.1202 11.9312 87.4388 12.7124C86.7573 13.4936 86.0002 14.1369 85.1706 14.6358C84.3377 15.1347 83.4983 15.3842 82.6456 15.3842L82.639 15.3874Z" fill="black" />
                    <path d="M23.0816 26.7274C24.53 27.0392 25.8304 27.4758 26.9859 28.0338L24.8131 34.6837L24.1712 34.9791C23.2824 34.3226 22.2783 33.8139 21.159 33.4528C20.0398 33.0918 18.904 32.9112 17.7485 32.9112C14.8483 32.9112 12.7184 33.9123 11.3522 35.9145C9.98601 37.9167 9.30128 40.9397 9.30128 44.9769C9.30128 50.4616 11.4082 53.2023 15.6252 53.2023C16.7445 53.2023 17.9461 53.048 19.2332 52.7329C20.5171 52.4211 21.6858 52.001 22.7425 51.4758L23.3844 51.8697L21.903 58.5688C20.6192 59.094 19.3912 59.4616 18.2226 59.6783C17.0539 59.8916 15.8095 59.9999 14.4927 59.9999C10.0123 59.9999 6.5788 58.8084 4.1921 56.4288C1.80541 54.0491 0.610413 50.6585 0.610413 46.257C0.610413 42.118 1.30832 38.5469 2.7107 35.5436C4.1098 32.5371 6.15084 30.2395 8.8371 28.6476C11.5201 27.0557 14.7561 26.2581 18.5452 26.2581C20.1254 26.2581 21.6397 26.4156 23.0914 26.7274H23.0816Z" fill="black" />
                    <path d="M51.4643 41.7997C50.2627 43.7198 48.574 45.3051 46.4012 46.5524C48.2118 50.1334 50.187 53.6782 52.3301 57.1936L52.182 58.0305C49.5813 58.8511 46.928 59.3599 44.2285 59.5568L43.5372 58.9168C41.9241 54.9747 40.637 51.5776 39.6823 48.722H35.4817V48.8697L34.5929 59.0185H26.7382L28.3183 49.6115L30.6886 27.2493L43.3858 27.2001C46.4802 27.2001 48.9032 27.9156 50.6479 29.3434C52.3927 30.7712 53.265 32.7996 53.265 35.4255C53.265 37.7559 52.6626 39.8828 51.461 41.8029L51.4643 41.7997ZM36.3705 42.8598L40.6699 43.0568C42.1513 42.5316 43.2311 41.7439 43.9059 40.6935C44.5808 39.6432 44.9198 38.3139 44.9198 36.7023C44.9198 35.4222 44.5577 34.4703 43.8335 33.8467C43.1092 33.2231 42.0064 32.8784 40.5217 32.8128L37.8058 32.9605L36.3738 42.8631L36.3705 42.8598Z" fill="black" />
                    <path d="M82.3681 43.3521L81.7755 47.8849C81.3146 51.63 79.8991 54.502 77.5255 56.5042C75.1553 58.5064 71.8765 59.5075 67.6956 59.5075C64.0382 59.5075 61.1907 58.7132 59.1496 57.118C57.1086 55.5261 56.0881 53.2679 56.0881 50.3434C56.0881 49.6213 56.1375 48.8499 56.2362 48.0294L56.9275 43.2504L58.7052 27.2427H66.5105L63.742 46.9954C63.6761 47.7832 63.6432 48.3248 63.6432 48.6202C63.6432 50.1957 64.0218 51.3543 64.7789 52.0928C65.5361 52.8314 66.7212 53.2022 68.3376 53.2022C70.2469 53.2022 71.7053 52.7198 72.7093 51.7482C73.7134 50.7799 74.3323 49.2602 74.5627 47.1924L76.6861 27.2427H84.5902L82.3681 43.3521Z" fill="black" />
                  </svg>

                </span>
              <?php } ?>

            </div>
            <p class="white footer__logo_subtitle">
              Управляющая компания «Премьер КРЮ»
            </p>
          </div>

          <ul class="navigation footer__nav">
            <?php
            $args = array(
              'menu' => 'bottom',
              'theme_location' => 'bottom',
              'container' => false,
              'walker' => new main_service_mobile_menu_Walker,
              'items_wrap' => '%3$s'
            );
            wp_nav_menu($args);
            ?>
          </ul>

          <div class="footer__contacts">
            <div class="footer__number"><a class="footer__number" href="tel:+<?php the_field('link_appstore', 'option'); ?>">Служба качества +<?php the_field('number', 'option'); ?></a></div>
            <div class="soc-net">
              <a href="<?php the_field('link_instagram', 'option'); ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="" /></a>
              <a href="<?php the_field('link_facebook', 'option'); ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="" /></a>
              <a href="<?php the_field('link_vk', 'option'); ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/vk.png" alt="" /></a>
            </div>
          </div>
        </div>

        <span class="footer__line"></span>
        <div class="block2-1024">
          <div class="block2">
            <p class="white block2__font-1024">
              Процедура заказа в мобильном приложении
            </p>
            <a href="/politika/">
              <p class="white block2__font-1024">Политика конфиденциальности</p>
            </a>
            <a href="https://abeta.ru/" target="_blank">
              <p class="white block2__font-1024">Разработка сайта - ABETA</p>
            </a>
          </div>
          <div class="footer__contacts-1024">
            <div class="footer__number"><a class="footer__number" href="tel:+<?php the_field('link_appstore', 'option'); ?>">Служба качества <?php the_field('number', 'option'); ?></a></div>
            <div class="soc-net">
              <a href="<?php the_field('link_instagram', 'option'); ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="" /></a>
              <a href="<?php the_field('link_facebook', 'option'); ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="" /></a>
              <a href="<?php the_field('link_vk', 'option'); ?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/vk.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php } ?>
<?php wp_footer(); ?>
<script type='text/javascript'>
  (function() {
    var widget_id = 'uRunsePbrq';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = '//code.jivosite.com/script/widget/' + widget_id;
    var ss = document.getElementsByTagName('script')[0];
    ss.parentNode.insertBefore(s, ss);
  })();
</script>
</body>

</html>