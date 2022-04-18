<?php
// Text
$_['text_new_card']                     = '+ Yeni kart ekle';
$_['text_loading']                      = 'Yükleniyor... Lütfen bekleyiniz...';
$_['text_card_details']                 = 'Kart Detayları';
$_['text_saved_card']                   = 'Kayıtlı Kartı Kullan:';
$_['text_card_ends_in']                 = 'XXXX XXXX XXXX %s tarihinde biten mevcut %s kartıyla ödeme yapın';
$_['text_card_number']                  = 'Kart Numarası:';
$_['text_card_expiry']                  = 'Kart Son Kullanım Tarihi (MM/YY):';
$_['text_card_cvc']                     = 'Kart Güvenlik Kodu (CVC):';
$_['text_card_zip']                     = 'Kart Posta Kodu:';
$_['text_card_save']                    = 'Kart ileride kullanmak üzere kaydedilsin mi?';
$_['text_trial']                        = '%s ödeme için %s her %s %s sonra ';
$_['text_recurring']                    = '%s her %s %s';
$_['text_length']                       = ' %s ödemeleri için';
$_['text_cron_subject']                 = 'Kare CRON iş özeti';
$_['text_cron_message']                 = 'İşte Square uzantınız tarafından gerçekleştirilen tüm CRON görevlerinin bir listesi:';
$_['text_squareup_profile_suspended']   = ' Yinelenen ödemeleriniz askıya alındı. Daha fazla bilgi için lütfen bizimle iletişime geçin.';
$_['text_squareup_trial_expired']       = ' Deneme süreniz sona erdi.';
$_['text_squareup_recurring_expired']   = ' Yinelenen ödemelerinizin süresi doldu. Bu senin son ödemendi.';
$_['text_cron_summary_token_heading']   = 'Erişim belirtecinin yenilenmesi:';
$_['text_cron_summary_token_updated']   = 'Erişim belirteci başarıyla güncellendi!';
$_['text_cron_summary_error_heading']   = 'İşlem Hataları:';
$_['text_cron_summary_fail_heading']    = 'Başarısız İşlemler (Profiller Askıya Alındı):';
$_['text_cron_summary_success_heading'] = 'Başarılı İşlemler:';
$_['text_cron_fail_charge']             = '<strong>#%s</strong> profili <strong>%s</strong> ile ücretlendirilemedi';
$_['text_cron_success_charge']          = '<strong>#%s</strong> profili <strong>%s</strong ile ücretlendirildi>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Kredi / Banka Kart';
$_['text_token_issue_customer_error']   = 'Ödeme sistemimizde teknik bir kesinti yaşıyoruz. Lütfen daha sonra tekrar deneyiniz.';
$_['text_token_revoked_subject']        = 'Square erişim jetonunuz iptal edildi!';
$_['text_token_revoked_message']        = "Kare ödeme uzantısının Kare hesabınıza erişimi, Kare Dashboard üzerinden iptal edildi. Uzantı ayarlarında uygulama kimlik bilgilerinizi doğrulamanız ve tekrar bağlanmanız gerekir.";
$_['text_token_expired_subject']        = 'Kare erişim tokeninizin süresi doldu!';
$_['text_token_expired_message']        = "Kare ödeme uzantısının, onu Kare hesabınıza bağlayan erişim jetonunun süresi doldu. Uzantı ayarlarında uygulama kimlik bilgilerinizi ve CRON işinizi doğrulamanız ve tekrar bağlanmanız gerekir.";

// Error
$_['error_browser_not_supported']       = 'Hata: Ödeme sistemi artık web tarayıcınızı desteklemiyor. Lütfen güncelleyin veya farklı bir tane kullanın.';
$_['error_card_invalid']                = 'Hata: Kart geçersiz!';
$_['error_squareup_cron_token']         = 'Hata: Erişim belirteci yenilenemedi. Lütfen Kare Ödeme uzantınızı OpenCart yönetici paneli aracılığıyla bağlayın.';

// Warning
$_['warning_test_mode']                 = 'Uyarı: Sandbox modu etkinleştirildi! İşlemler tamamlanmış gibi görünecek, ancak herhangi bir ücret alınmayacaktır.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Kart işlemine izin verildi ancak henüz kaydedilmedi.';
$_['squareup_status_comment_captured']      = 'Kart işlemi yetkilendirildi ve ardından yakalandı (tamamlandı).';
$_['squareup_status_comment_voided']        = 'Kart işlemi yetkilendirilmiş ve daha sonra geçersiz kılınmıştır (iptal edilmiştir).   ';
$_['squareup_status_comment_failed']        = 'Kart işlemi başarısız oldu.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Ödeme Adresi ülkesi geçerli değil. Lütfen düzenle ve tekrar dene.';
$_['squareup_override_error_shipping_address.country']      = 'Sevkiyat Adresi ülke geçerli değil. Lütfen düzenle ve tekrar dene.';
$_['squareup_override_error_email_address']                 = 'Müşteri e-posta adresiniz geçerli değil. Lütfen düzenle ve tekrar dene.';
$_['squareup_override_error_phone_number']                  = 'Müşteri telefon numaranız geçerli değil. Lütfen düzenle ve tekrar dene.';
$_['squareup_error_field']                                  = ' Alan: %s';