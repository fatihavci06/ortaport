<?php
// Text
$_['text_title']				= 'Sorumluluk Vardiyası Yok ...';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Fatura, siparişinizi işleme koymadan önce bazı ek bilgiler gerektirir..';
$_['text_male']					= 'Erkek';
$_['text_female']				= 'Kadın';
$_['text_year']					= 'Yıl';
$_['text_month']				= 'Ay';
$_['text_day']					= 'Gün';
$_['text_comment']				= 'Klarna\'s Fatura ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Cinsiyet';
$_['entry_pno']					= 'Personel sayısı';
$_['entry_dob']					= 'Doğum tarihi';
$_['entry_phone_no']			= 'Telefon numarası';
$_['entry_street']				= 'Cadde/Sokak';
$_['entry_house_no']			= 'Apt No.';
$_['entry_house_ext']			= 'Daire No.';
$_['entry_company']				= 'Şirket Kayıt Numarası';

// Help
$_['help_pno']					= 'Lütfen Sosyal Güvenlik numaranızı buraya girini.';
$_['help_phone_no']				= 'Lütfen telefon numaranızı girin.';
$_['help_street']				= 'Teslimatın yalnızca Klarna ile ödeme yapıldığında kayıtlı adrese yapılabileceğini lütfen unutmayın.';
$_['help_house_no']				= 'Lütfen apartman numaranızı giriniz.';
$_['help_house_ext']			= 'Lütfen ev uzantınızı buraya gönderin. Örneğin. A, B, C, Kırmızı, Mavi vb.';
$_['help_company']				= 'Lütfen Şirketinizin kayıt numarasını buraya giriniz. ';

// Error
$_['error_deu_terms']			= 'Klarna\'nın gizlilik politikasını (Datenschutz) kabul etmelisiniz.';
$_['error_address_match']		= 'Klarna Faturayı kullanmak istiyorsanız Fatura ve Sevkiyat adresleri eşleşmelidir.';
$_['error_network']				= 'Klarnaya bağlanırken hata oluştu. Lütfen daha sonra tekrar deneyiniz.';