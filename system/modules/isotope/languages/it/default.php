<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009, Intelligent Spark 2010, iserv.ch GmbH 2010
 * @author     Angelica Schempp <aschempp@gmx.net>
 * @author     Paolo B. <paolob@contaocms.it>
 * @author     Dan N <dan@dss.uniud.it>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_LANG']['ERR']['systemColumn'] = 'Questo nome è riservato per l\'uso del sistema. Si prega di scegliere un nome diverso.';
$GLOBALS['TL_LANG']['ERR']['missingButtonTemplate'] = 'Si prega di specificare un template per il pulsante "%s".';
$GLOBALS['TL_LANG']['ERR']['order_conditions'] = 'Deve accettare i termini e le condizioni per poter continuare.';
$GLOBALS['TL_LANG']['ERR']['noStoreConfigurationSet'] = 'Configurazione negozio non disponibile.';
$GLOBALS['TL_LANG']['ERR']['noDefaultStoreConfiguration'] = 'Si prega di creare una configurazione preimpostata del negozio.';
$GLOBALS['TL_LANG']['ERR']['productNameMissing'] = '<nome prodotto non trovato>';
$GLOBALS['TL_LANG']['ERR']['noSubProducts'] = 'nessun sotto-prodotto trovato';
$GLOBALS['TL_LANG']['ERR']['emptyOrderHistory'] = 'Non ha ancora fatto nessun ordine.';
$GLOBALS['TL_LANG']['ERR']['orderNotFound'] = 'L\'ordine richiesto non è stato trovato.';
$GLOBALS['TL_LANG']['ERR']['missingCurrencyFormat'] = 'Formattazione valuta non trovata';
$GLOBALS['TL_LANG']['ERR']['searchNotEnabled'] = 'Funzione ricerca non attivata!';
$GLOBALS['TL_LANG']['ERR']['isoLoginRequired'] = 'Deve essere autenticato per procedere al checkout.';
$GLOBALS['TL_LANG']['ERR']['mandatoryOption'] = 'Si prega di selezionare un\'opzione.';
$GLOBALS['TL_LANG']['ERR']['noAddressData'] = 'E\' richiesto l\'indirizzo postale per poter calcolare le tasse!';
$GLOBALS['TL_LANG']['ERR']['variantDuplicate'] = 'Una variante con questi attributi è già disponibile. Si prega di scegliere una combinazione diversa.';
$GLOBALS['TL_LANG']['ERR']['breadcrumbEmpty'] = 'La categoria filtrata è vuota, tutti prodotti sono visualizzati.';
$GLOBALS['TL_LANG']['ERR']['discount'] = 'Si prega di inserire numeri interi o decimali con il segno + o - e facoltativamente con una percentuale.';
$GLOBALS['TL_LANG']['ERR']['surcharge'] = 'Si prega di inserire numeri interi o decimali, facoltativamente con una percentuale.';
$GLOBALS['TL_LANG']['ERR']['orderFailed'] = 'Checkout fallito. Si prega di riprovare o di scegliere un altro metodo di pagamento.';
$GLOBALS['TL_LANG']['ERR']['specifyBillingAddress'] = 'Non è stato trovato un indirizzo di fatturazione. Si prega di specificarne uno.';
$GLOBALS['TL_LANG']['ERR']['cc_num'] = 'Si prega di inserire un numero valido per la carta di credito.';
$GLOBALS['TL_LANG']['ERR']['cc_type'] = 'Si prega di scegliere il tipo della carta di credito.';
$GLOBALS['TL_LANG']['ERR']['cc_exp'] = 'Si prega di inserire la data di scadenza della carta di credito nel formato mm/aa.';
$GLOBALS['TL_LANG']['ERR']['cc_ccv'] = 'Si prega di inserire il codice di sicurezza della carta di credito (numero di tre o quattro cifre presente sul retro o sul fronte della carta).';
$GLOBALS['TL_LANG']['ERR']['cc_match'] = 'Il suo numero della carta di credito non corrisponde con il tipo della carta di credito selezionato.';
$GLOBALS['TL_LANG']['ERR']['addressDoesNotExist'] = 'Questo indirizzo non esiste nella sua rubrica.';
$GLOBALS['TL_LANG']['ERR']['noAddressBookEntries'] = 'La sua rubrica è vuota.';
$GLOBALS['TL_LANG']['MSC']['labelLanguage'] = 'Lingua';
$GLOBALS['TL_LANG']['MSC']['editLanguage'] = 'Modifica';
$GLOBALS['TL_LANG']['MSC']['deleteLanguage'] = 'Cancella';
$GLOBALS['TL_LANG']['MSC']['defaultLanguage'] = 'Lingua preimpostata';
$GLOBALS['TL_LANG']['MSC']['editingLanguage'] = 'Attenzione: sta per modificare i dati di lingua.';
$GLOBALS['TL_LANG']['MSC']['deleteLanguageConfirm'] = 'E\' sicuro di voler cancellare questa lingua? Non c\'è la possbilità di ripristino!';
$GLOBALS['TL_LANG']['MSC']['undefinedLanguage'] = 'indefinito';
$GLOBALS['TL_LANG']['MSC']['copyFallback'] = 'Duplica la lingua preimpostata';
$GLOBALS['TL_LANG']['MSC']['noSurcharges'] = 'Nessun sovrapprezzo è stato trovato.';
$GLOBALS['TL_LANG']['MSC']['ajaxLoadingMessage'] = 'Caricamento...';
$GLOBALS['TL_LANG']['MSC']['orderDetailsHeadline'] = 'Ordine no %s / %s';
$GLOBALS['TL_LANG']['MSC']['payment_processing'] = 'Stiamo processando il suo pagamento. Si prega di avere un attimo di pazienza...';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet_process_failed'] = 'Il suo pagamento non ha potuto essere processato.<br/><br/>Motivo: %s';
$GLOBALS['TL_LANG']['MSC']['mmNoUploads'] = 'Nessun file caricato.';
$GLOBALS['TL_LANG']['MSC']['mmUpload'] = 'Caricare un nuovo file.';
$GLOBALS['TL_LANG']['MSC']['quantity'] = 'Quantità';
$GLOBALS['TL_LANG']['MSC']['order_conditions'] = 'Accetto i termini e le condizioni';
$GLOBALS['TL_LANG']['MSC']['defaultSearchText'] = 'cercare prodotti';
$GLOBALS['TL_LANG']['MSC']['blankSelectOptionLabel'] = '-';
$GLOBALS['TL_LANG']['MSC']['emptySelectOptionLabel'] = 'Per cortesia scelga...';
$GLOBALS['TL_LANG']['MSC']['downloadsLabel'] = 'I suoi prodotti scaricabili';
$GLOBALS['TL_LANG']['MSC']['priceRangeLabel'] = '<span class="from">Da</span> %s';
$GLOBALS['TL_LANG']['MSC']['detailLabel'] = 'Visualizzare i dettagli';
$GLOBALS['TL_LANG']['MSC']['searchTextBoxLabel'] = 'Cercare termine:';
$GLOBALS['TL_LANG']['MSC']['searchFieldsLabel'] = 'Cercare campi:';
$GLOBALS['TL_LANG']['MSC']['perPageLabel'] = 'Prodotti per pagina';
$GLOBALS['TL_LANG']['MSC']['searchTermsLabel'] = 'Parole chiave';
$GLOBALS['TL_LANG']['MSC']['submitLabel'] = 'Inviare';
$GLOBALS['TL_LANG']['MSC']['clearFiltersLabel'] = 'Cancellare i filtri';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['update'] = 'Aggiornamento';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_cart'] = 'Aggiungere al carello';
$GLOBALS['TL_LANG']['MSC']['pagerSectionTitleLabel'] = 'Pagina:';
$GLOBALS['TL_LANG']['MSC']['orderByLabel'] = 'Ordina per:';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_cart'] = 'Aggiunga il prodotto %s  al carello.';
$GLOBALS['TL_LANG']['MSC']['noProducts'] = 'Nessun prodotto trovato.';
$GLOBALS['TL_LANG']['MSC']['invalidProductInformation'] = 'Spiacenti, l\'informazione sul prodotto riechiesto non puo\' essere visualizzata. Si prega di contattarci per ulteriore assistenza.';
$GLOBALS['TL_LANG']['MSC']['productOptionsLabel'] = 'Opzioni';
$GLOBALS['TL_LANG']['MSC']['previousStep'] = 'Indietro';
$GLOBALS['TL_LANG']['MSC']['nextStep'] = 'Continuare';
$GLOBALS['TL_LANG']['MSC']['confirmOrder'] = 'Ordine';
$GLOBALS['TL_LANG']['MSC']['noCategoriesAssociated'] = 'Nessuna categoria è associata a questo prodotto.';
$GLOBALS['TL_LANG']['MSC']['labelPerPage'] = 'Per pagina';
$GLOBALS['TL_LANG']['MSC']['labelSortBy'] = 'Ordinare per';
$GLOBALS['TL_LANG']['MSC']['labelSubmit'] = 'Inviare';
$GLOBALS['TL_LANG']['MSC']['labelProductVariants'] = 'Per favore selezioni';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkText'] = 'Togliere';
$GLOBALS['TL_LANG']['MSC']['noItemsInCart'] = 'Non ci sono prodotti nel suo carrello.';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkTitle'] = 'Togliere %s dal carrello.';
$GLOBALS['TL_LANG']['MSC']['subTotalLabel'] = 'Subtotale ordine:';
$GLOBALS['TL_LANG']['MSC']['shippingLabel'] = 'Spedizione';
$GLOBALS['TL_LANG']['MSC']['paymentLabel'] = 'Pagamento';
$GLOBALS['TL_LANG']['MSC']['taxLabel'] = '%s Tasse:';
$GLOBALS['TL_LANG']['MSC']['grandTotalLabel'] = 'Totale Ordine:';
$GLOBALS['TL_LANG']['MSC']['shippingOptionsLabel'] = 'Opzioni di spedizione selezionati:';
$GLOBALS['TL_LANG']['MSC']['noVariants'] = 'Nessuna versione di prodotto trovata.';
$GLOBALS['TL_LANG']['MSC']['generateSubproducts'] = 'Crea sottoprodotti';
$GLOBALS['TL_LANG']['MSC']['selectItemPrompt'] = '(seleziona)';
$GLOBALS['TL_LANG']['MSC']['actualPrice'] = 'Prezzo attuale';
$GLOBALS['TL_LANG']['MSC']['noPaymentModules'] = 'Nessun opzione di pagamento è disponibile al momento.';
$GLOBALS['TL_LANG']['MSC']['noShippingModules'] = 'Nessun opzione di spedizione è disponibile al momento.';
$GLOBALS['TL_LANG']['MSC']['noOrderEmails'] = 'Nessun ordine per email trovato.';
$GLOBALS['TL_LANG']['MSC']['noOrders'] = 'Nessun ordine trovato.';
$GLOBALS['TL_LANG']['ISO']['couponsInputLabel'] = 'Codice promozionale';
$GLOBALS['TL_LANG']['ISO']['couponsHeadline'] = 'Applica Codici Promozionali';
$GLOBALS['TL_LANG']['ISO']['couponsSubmitLabel'] = 'Applicare';
$GLOBALS['TL_LANG']['MSC']['cartBT'] = 'Carrello';
$GLOBALS['TL_LANG']['MSC']['checkoutBT'] = 'Procede al Checkout';
$GLOBALS['TL_LANG']['MSC']['continueShoppingBT'] = 'Continuare ad acquistare';
$GLOBALS['TL_LANG']['MSC']['updateCartBT'] = 'Aggiornare il carrello';
$GLOBALS['TL_LANG']['MSC']['orderStatusHeadline'] = 'Stato Ordine: %s';
$GLOBALS['TL_LANG']['MSC']['checkboutStepBack'] = 'Indietro al passo "%s"';
$GLOBALS['TL_LANG']['MSC']['createNewAddressLabel'] = 'Creare un nuovo indirizzo';
$GLOBALS['TL_LANG']['MSC']['useBillingAddress'] = 'Usare l\'indirizzo di fatturazione';
$GLOBALS['TL_LANG']['MSC']['useCustomerAddress'] = 'Usare l\'indirizzo del cliente';
$GLOBALS['TL_LANG']['MSC']['differentShippingAddress'] = 'Indirizzo di spedizione diverso';
$GLOBALS['TL_LANG']['MSC']['addressBookLabel'] = 'Indirizzi';
$GLOBALS['TL_LANG']['MSC']['editAddressLabel'] = 'Modificare';
$GLOBALS['TL_LANG']['MSC']['deleteAddressLabel'] = 'Cancellare';
$GLOBALS['TL_LANG']['MSC']['iso_invoice_title'] = 'Fattura';
$GLOBALS['TL_LANG']['MSC']['iso_order_status'] = 'Stato';
$GLOBALS['TL_LANG']['MSC']['iso_order_date'] = 'Data dell\'ordine';
$GLOBALS['TL_LANG']['MSC']['iso_billing_address_header'] = 'Indirizzo di fattura';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_address_header'] = 'Indirizzo di spedizione';
$GLOBALS['TL_LANG']['MSC']['iso_tax_header'] = 'Tasse';
$GLOBALS['TL_LANG']['MSC']['iso_subtotal_header'] = 'Subtotale';
$GLOBALS['TL_LANG']['MSC']['iso_order_shipping_header'] = 'Servizio di imballaggio e spedizione';
$GLOBALS['TL_LANG']['MSC']['iso_order_grand_total_header'] = 'Importo totale';
$GLOBALS['TL_LANG']['MSC']['iso_order_items'] = 'Oggetti';
$GLOBALS['TL_LANG']['MSC']['iso_quantity_header'] = 'Quantità';
$GLOBALS['TL_LANG']['MSC']['iso_price_header'] = 'Prezzo';
$GLOBALS['TL_LANG']['MSC']['iso_sku_header'] = 'Numero dell\'articolo';
$GLOBALS['TL_LANG']['MSC']['iso_product_name_header'] = 'Nome Prodotto';
$GLOBALS['TL_LANG']['MSC']['iso_card_name_title'] = 'Nome sulla Carta di Credito';
$GLOBALS['TL_LANG']['ORDER']['pending'] = 'Pendente';
$GLOBALS['TL_LANG']['ORDER']['processing'] = 'In elaborazione';
$GLOBALS['TL_LANG']['ORDER']['complete'] = 'Completato';
$GLOBALS['TL_LANG']['ORDER']['on_hold'] = 'In attesa';
$GLOBALS['TL_LANG']['ORDER']['cancelled'] = 'Cancellato';
$GLOBALS['TL_LANG']['MSC']['low_to_high'] = 'dal basso all\'alto';
$GLOBALS['TL_LANG']['MSC']['high_to_low'] = 'dall\'alto al basso';
$GLOBALS['TL_LANG']['MSC']['a_to_z'] = 'dalla A alla Z';
$GLOBALS['TL_LANG']['MSC']['z_to_a'] = 'dalla Z alla A';
$GLOBALS['TL_LANG']['MSC']['old_to_new'] = 'dal meno recente all\'ultimo';
$GLOBALS['TL_LANG']['MSC']['new_to_old'] = 'dall\'ultimo al meno recente';
$GLOBALS['ISO_LANG']['MSC']['useDefault'] = 'Usa valori preimpostati';
$GLOBALS['TL_LANG']['ISO']['productSingle'] = '1 Prodotto';
$GLOBALS['TL_LANG']['ISO']['productMultiple'] = '%s Prodotti';
$GLOBALS['TL_LANG']['ISO']['shipping_address_message'] = 'Inserire l\'informazione sulla spedizione o scegliere un indirizzo esistente.';
$GLOBALS['TL_LANG']['ISO']['billing_address_message'] = 'Inserire l\'informazione sul pagamento o scegliere un indirizzo esistente.';
$GLOBALS['TL_LANG']['ISO']['billing_address_guest_message'] = 'Inserire l\'informazione sul pagamento.';
$GLOBALS['TL_LANG']['ISO']['customer_address_message'] = 'Inserisca i suoi dati cliente o scelga un indirizzo esistente.';
$GLOBALS['TL_LANG']['ISO']['customer_address_guest_message'] = 'Inserisca le sue informazioni cliente';
$GLOBALS['TL_LANG']['ISO']['shipping_method_message'] = 'Selezionare un servizio di spedizione.';
$GLOBALS['TL_LANG']['ISO']['shipping_method_missing'] = 'Si prega di selezionare un servizio di spedizione.';
$GLOBALS['TL_LANG']['ISO']['payment_method_message'] = 'Inserire l\'informazione sul pagamento.';
$GLOBALS['TL_LANG']['ISO']['payment_method_missing'] = 'Si prega di selezionare un metodo di pagamento.';
$GLOBALS['TL_LANG']['ISO']['order_review_message'] = 'Controlli e confermi i dettagli dell\'ordine.';
$GLOBALS['TL_LANG']['ISO']['checkout_address'] = 'Indirizzo';
$GLOBALS['TL_LANG']['ISO']['checkout_shipping'] = 'Spedizione';
$GLOBALS['TL_LANG']['ISO']['checkout_payment'] = 'Pagamento';
$GLOBALS['TL_LANG']['ISO']['checkout_review'] = 'Controllare';
$GLOBALS['TL_LANG']['ISO']['billing_address'] = 'Indirizzo di pagamento';
$GLOBALS['TL_LANG']['ISO']['shipping_address'] = 'Indirizzo di spedizione';
$GLOBALS['TL_LANG']['ISO']['billing_shipping_address'] = 'Indirizzo di pagamento e spedizione';
$GLOBALS['TL_LANG']['ISO']['customer_address'] = 'Indirizzo del cliente';
$GLOBALS['TL_LANG']['ISO']['shipping_method'] = 'Servizio di spedizione';
$GLOBALS['TL_LANG']['ISO']['payment_method'] = 'Metodo di pagamento';
$GLOBALS['TL_LANG']['ISO']['order_conditions'] = 'Condizioni per poter ordinare';
$GLOBALS['TL_LANG']['ISO']['order_review'] = 'Controllare l\'ordine';
$GLOBALS['TL_LANG']['ISO']['changeCheckoutInfo'] = 'Cambia';
$GLOBALS['TL_LANG']['ISO']['cc_num'] = 'Numero della carta di credito';
$GLOBALS['TL_LANG']['ISO']['cc_type'] = 'Tipo della carta di credito';
$GLOBALS['TL_LANG']['ISO']['cc_ccv'] = 'Numero CCV (codice di 3 o 4 cifre)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_paypal'] = 'Data di scadenza';
$GLOBALS['TL_LANG']['ISO']['cc_exp_date'] = 'Scadenza mese/anno';
$GLOBALS['TL_LANG']['ISO']['cc_exp_month'] = 'Mese di scadenza';
$GLOBALS['TL_LANG']['ISO']['cc_exp_year'] = 'Anno di scadenza';
$GLOBALS['TL_LANG']['ISO']['cc_issue_number'] = 'Data di rilascio della carta di credito, 2 cifre (richiesta per carte Maestro e Solo)';
$GLOBALS['TL_LANG']['ISO']['cc_start_date'] = 'Data d\'inizio della carta di credito (richiesta per carte Maestro e Solo)';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][0] = 'Il pagamento viene elaborato';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][1] = 'Si prega di inserire l\'informazione richiesta per poter elaborare il pagamento.';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][2] = 'Paga ora';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][0] = 'Il pagamento viene processato';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][1] = 'Sarà automaticamente deviato/a sul sito del prestatore di servizi di pagamento. Se la deviazione non avviene automaticamente, si prega di cliccare sul bottone "Paga ora".';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][2] = 'Paga ora';
$GLOBALS['TL_LANG']['MSC']['backendPaymentEPay'] = 'Per cortesia usi il seguente indirizzo per accedere al pannello amministratore di ePay';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNotFound'] = 'Modulo di pagamento non trovato!';
$GLOBALS['TL_LANG']['ISO']['backendShippingNotFound'] = 'Modulo di spedizione non trovato!';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNoInfo'] = 'Questo modulo di pagamento non ha informazioni aggiuntivi.';
$GLOBALS['TL_LANG']['ISO']['backendShippingNoInfo'] = 'Questo modulo di spedizione non ha informazioni aggiuntivi.';
$GLOBALS['ISO_LANG']['SHIP']['flat'][0] = 'Spedizione a prezzo fisso';
$GLOBALS['ISO_LANG']['SHIP']['weight_total'][0] = 'Spedizione in base al peso totale';
$GLOBALS['ISO_LANG']['SHIP']['order_total'][0] = 'Spedizione in base all\'ordine totale';
$GLOBALS['ISO_LANG']['SHIP']['collection'][0] = 'Incasso';
$GLOBALS['ISO_LANG']['SHIP']['ups'][0] = 'Tariffe e servizio spedizione UPS Live';
$GLOBALS['ISO_LANG']['SHIP']['usps'][0] = 'Tariffe e servizio spedizione USPS Live';
$GLOBALS['ISO_LANG']['PAY']['cash'][0] = 'Pagamento in contanti (bonifico)';
$GLOBALS['ISO_LANG']['PAY']['cash'][1] = 'Usa questo per tutti i pagamenti elaborati offline.';
$GLOBALS['ISO_LANG']['PAY']['paypal'][0] = 'Checkout PayPal Standard';
$GLOBALS['ISO_LANG']['PAY']['paypal'][1] = 'Questo modulo PayPal supporta IPN (Notifiche Pagamenti Istantanee)';
$GLOBALS['ISO_LANG']['PAY']['paypalpayflowpro'][0] = 'PayPal Payflow Pro';
$GLOBALS['ISO_LANG']['PAY']['paypalpayflowpro'][1] = 'Il modulo Paypal Payflow è un\'interfaccia per carte di credito che offre un servizio completo. Una soluzione robusta per la maggior parte dei siti e-commerce.';
$GLOBALS['ISO_LANG']['PAY']['postfinance'][0] = 'Postfinance';
$GLOBALS['ISO_LANG']['PAY']['postfinance'][1] = 'Un\'interfaccia di pagamento per il sistema di pagamento delle Poste Svizzere che supporta vari tipi di carte di credito. Il negozio viene subito avvertito di tutte le transazioni andate a buon fine.';
$GLOBALS['ISO_LANG']['PAY']['authorizedotnet'][0] = 'Authorize.net';
$GLOBALS['ISO_LANG']['PAY']['authorizedotnet'][1] = 'Un\'interfaccia di pagamento Authorize.net';
$GLOBALS['ISO_LANG']['PAY']['cybersource'][0] = 'Cybersource';
$GLOBALS['ISO_LANG']['PAY']['cybersource'][1] = 'Per utenti Cybersource. Usa il metodo Simple Order API.';
$GLOBALS['ISO_LANG']['GAL']['default'][0] = 'Galleria preimpostata (Lightbox / Mediabox)';
$GLOBALS['ISO_LANG']['GAL']['default'][1] = '<p>Usa la lightbox/mediabox per immagini di misura 1:1. Assicurarsi di selezionare il moo_template appropriato nella configurazione del layout della pagina.</p><p>Può fornire un attributo "rel" al link target usando una pipe (ad esempio "tl_files/video.mov|lightbox[400 300]"). Se nessun attributo "rel" è stato fornito, il link sarà aperto in una nuova finestra.</p>';
$GLOBALS['ISO_LANG']['GAL']['inline'][0] = 'Galleria inline';
$GLOBALS['ISO_LANG']['GAL']['inline'][1] = '<p>Cliccando sulla galleria l\'immagine la caricherà al posto dell\'immagine principale. Deve caricare l\'immagine principale due volte nel sistema per averla disponibile nella gallery</p>';
$GLOBALS['ISO_LANG']['PRODUCT']['regular'][0] = 'Prodotto normale';
$GLOBALS['ISO_LANG']['PRODUCT']['regular'][1] = 'Prodotto preimpostato. Scegliere questo nel caso nessun\'altro prodotto fosse appropriato.';
$GLOBALS['ISO_LANG']['CCT']['mc'] = 'MasterCard';
$GLOBALS['ISO_LANG']['CCT']['visa'] = 'Visa';
$GLOBALS['ISO_LANG']['CCT']['amex'] = 'American Express';
$GLOBALS['ISO_LANG']['CCT']['discover'] = 'Discover';
$GLOBALS['ISO_LANG']['CCT']['jcb'] = 'JCB';
$GLOBALS['ISO_LANG']['CCT']['diners'] = 'Diner\'s Club';
$GLOBALS['ISO_LANG']['CCT']['enroute'] = 'EnRoute';
$GLOBALS['ISO_LANG']['CCT']['carte_blanche'] = 'Carte Blanche';
$GLOBALS['ISO_LANG']['CCT']['jal'] = 'JAL';
$GLOBALS['ISO_LANG']['CCT']['maestro'] = 'Maestro UK';
$GLOBALS['ISO_LANG']['CCT']['delta'] = 'Delta';
$GLOBALS['ISO_LANG']['CCT']['solo'] = 'Solo';
$GLOBALS['ISO_LANG']['CCT']['visa_electron'] = 'Visa Electron';
$GLOBALS['ISO_LANG']['CCT']['dankort'] = 'Dankort';
$GLOBALS['ISO_LANG']['CCT']['laser'] = 'Laser';
$GLOBALS['ISO_LANG']['CCT']['carte_bleue'] = 'Carte Bleue';
$GLOBALS['ISO_LANG']['CCT']['carta_si'] = 'Carta Sì';
$GLOBALS['ISO_LANG']['CCT']['enc_acct_num'] = 'Encoded Account Number';
$GLOBALS['ISO_LANG']['CCT']['uatp'] = 'UniveUniversal Air Travel Program';
$GLOBALS['ISO_LANG']['CCT']['maestro_intl'] = 'Maestro International';
$GLOBALS['ISO_LANG']['CCT']['ge_money_uk'] = 'GE Money UK';
$GLOBALS['ISO_LANG']['WGT']['mg'][0] = 'Miligrammo (mg)';
$GLOBALS['ISO_LANG']['WGT']['mg'][1] = 'Un\'unità di misura equivalente ad un millesimo di un grammo.';
$GLOBALS['ISO_LANG']['WGT']['g'][0] = 'Grammo (g)';
$GLOBALS['ISO_LANG']['WGT']['g'][1] = 'Un\'unità di peso equivalente ad un millesimo di un chilogrammo.';
$GLOBALS['ISO_LANG']['WGT']['kg'][0] = 'Kilogrammo (kg)';
$GLOBALS['ISO_LANG']['WGT']['kg'][1] = 'Un kilogrammo è equivalente a 1000 grammi o 2,2 libbre; la misura di un litro d\'acqua.';
$GLOBALS['ISO_LANG']['WGT']['t'][0] = 'Tonnellata metrica (t)';
$GLOBALS['ISO_LANG']['WGT']['t'][1] = 'Un\'unità equivalente a 1000 chilogrammi, o 2204,6 libbre.';
$GLOBALS['ISO_LANG']['WGT']['ct'][0] = 'Carato (ct)';
$GLOBALS['ISO_LANG']['WGT']['ct'][1] = 'Una misura di peso per pietre preziose. Un carato è equivalente ad 1/5 di un grammo (200 milligrammo). Si prega di notificare che un carato con la lettera "K" è una misura per la purità di una lega d\'oro.';
$GLOBALS['ISO_LANG']['WGT']['oz'][0] = 'Oncia (oz)';
$GLOBALS['ISO_LANG']['WGT']['oz'][1] = 'Un\'unità equivalente ad un sedicesimo di una libbra o 28,35 grammi.';
$GLOBALS['ISO_LANG']['WGT']['lb'][0] = 'Libbra (lb)';
$GLOBALS['ISO_LANG']['WGT']['lb'][1] = 'Un\'unità equivalente a 16 once.';
$GLOBALS['ISO_LANG']['WGT']['st'][0] = 'Stone (st)';
$GLOBALS['ISO_LANG']['WGT']['st'][1] = 'Un\'unità di misura britannica equivalente a quattordici libbre.';
$GLOBALS['ISO_LANG']['WGT']['grain'][0] = 'Grain';
$GLOBALS['ISO_LANG']['WGT']['grain'][1] = '1/7000 libbre, equivalente ad un troy grain o 64,799 milligrammo.';
$GLOBALS['ISO_LANG']['ATTR']['text'][0] = 'Campo di testo';
$GLOBALS['ISO_LANG']['ATTR']['text'][1] = 'Un campo d\'inserimento di una riga per un testo di piccola o media dimensione.';
$GLOBALS['ISO_LANG']['ATTR']['textarea'][0] = 'Area di testo';
$GLOBALS['ISO_LANG']['ATTR']['textarea'][1] = 'Un campo d\'inserimento di piu\' righe per un testo di media o grande dimensione.';
$GLOBALS['ISO_LANG']['ATTR']['select'][0] = 'Menu selezione';
$GLOBALS['ISO_LANG']['ATTR']['select'][1] = 'Un menu a tendina di una o piu\' righe.</br><i>Questo campo puo\' essere utilizzato per vari prodotti.</i>';
$GLOBALS['ISO_LANG']['ATTR']['radio'][0] = 'Menu bottoni radio';
$GLOBALS['ISO_LANG']['ATTR']['radio'][1] = 'Una lista di varie opzioni dalla quale una puo\' essere selezionata.<br/><i> Questo campo puo\' essere utilizzato per vari prodotti.</i>';
$GLOBALS['ISO_LANG']['ATTR']['checkbox'][0] = 'Menu checkbox';
$GLOBALS['ISO_LANG']['ATTR']['checkbox'][1] = 'Una lista con varie opzioni dalla quale qualsiasi può essere selezionata.';
$GLOBALS['ISO_LANG']['ATTR']['mediaManager'][0] = 'Media Manager';
$GLOBALS['ISO_LANG']['ATTR']['mediaManager'][1] = 'Carica immagini ed altri file nel sistema Isotope eCommerce. L\'output è processato tramite una classe IsotopeGallery.';
$GLOBALS['ISO_LANG']['ATTR']['conditionalselect'][0] = 'Menu Selezione Condizionale';
$GLOBALS['ISO_LANG']['ATTR']['conditionalselect'][1] = 'Mostra opzioni di selezione basato su un altro menu di selezione.';
$GLOBALS['ISO_LANG']['CUR']['AED'] = 'AED - Dirham Emirati Arabi Uniti';
$GLOBALS['ISO_LANG']['CUR']['AFN'] = 'AFN - Afghani';
$GLOBALS['ISO_LANG']['CUR']['ALL'] = 'ALL - Lek';
$GLOBALS['ISO_LANG']['CUR']['AMD'] = 'AMD - Dram';
$GLOBALS['ISO_LANG']['CUR']['ANG'] = 'ANG - Fiorino Antille Olandesi';
$GLOBALS['ISO_LANG']['CUR']['AOA'] = 'AOA - Kwanza';
$GLOBALS['ISO_LANG']['CUR']['ARS'] = 'ARS - Peso Nuovo \'Argentina';
$GLOBALS['ISO_LANG']['CUR']['AUD'] = 'AUD - Dollaro Australia';
$GLOBALS['ISO_LANG']['CUR']['AWG'] = 'AWG - Fiorino Aruba';
$GLOBALS['ISO_LANG']['CUR']['AZN'] = 'AZN - Nuova Manat Azerbaigian';
$GLOBALS['ISO_LANG']['CUR']['BAM'] = 'BAM - Marco Bosnia';
$GLOBALS['ISO_LANG']['CUR']['BBD'] = 'BBD - Dollaro delle Barbados';
$GLOBALS['ISO_LANG']['CUR']['BDT'] = 'BDT - Taka';
$GLOBALS['ISO_LANG']['CUR']['BGN'] = 'BGN - Lev della Bulgaria';
$GLOBALS['ISO_LANG']['CUR']['BHD'] = 'BHD - Dinaro del Bahrain';
$GLOBALS['ISO_LANG']['CUR']['BIF'] = 'BIF - Franco del Burundi';
$GLOBALS['ISO_LANG']['CUR']['BMD'] = 'BMD - Dollaro delle Bermuda';
$GLOBALS['ISO_LANG']['CUR']['BND'] = 'BND - Dollaro del Brunei';
$GLOBALS['ISO_LANG']['CUR']['BOB'] = 'BOB - Boliviano';
$GLOBALS['ISO_LANG']['CUR']['BRL'] = 'BRL - Real del Brasile';
$GLOBALS['ISO_LANG']['CUR']['BSD'] = 'BSD - Dollaro delle Bahamas';
$GLOBALS['ISO_LANG']['CUR']['BTN'] = 'BTN - Ngultrum';
$GLOBALS['ISO_LANG']['CUR']['BWP'] = 'BWP - Pula';
$GLOBALS['ISO_LANG']['CUR']['BYR'] = 'BYR - Rublo bielorusso';
$GLOBALS['ISO_LANG']['CUR']['BZD'] = 'BZD - Dollaro del Belize';
$GLOBALS['ISO_LANG']['CUR']['CAD'] = 'CAD - Dollaro canadiano';
$GLOBALS['ISO_LANG']['CUR']['CDZ'] = 'CDZ - Nuova Zaire';
$GLOBALS['ISO_LANG']['CUR']['CHF'] = 'CHF - Franco svizzero';
$GLOBALS['ISO_LANG']['CUR']['CLF'] = 'CLF - Unidades de Fomento';
$GLOBALS['ISO_LANG']['CUR']['CLP'] = 'CLP - Peso cileno';
$GLOBALS['ISO_LANG']['CUR']['CNY'] = 'CNY - Renminbi Yuan della Cina';
$GLOBALS['ISO_LANG']['CUR']['COP'] = 'COP - Peso colombiano';
$GLOBALS['ISO_LANG']['CUR']['CRC'] = 'CRC - Colon della Costa Rica';
$GLOBALS['ISO_LANG']['CUR']['CUP'] = 'CUP - Peso cubano';
$GLOBALS['ISO_LANG']['CUR']['CVE'] = 'CVE - Scudo del Capoverde';
$GLOBALS['ISO_LANG']['CUR']['CZK'] = 'CZK - Corona ceca';
$GLOBALS['ISO_LANG']['CUR']['DJF'] = 'DJF - Franco del Djibouti';
$GLOBALS['ISO_LANG']['CUR']['DKK'] = 'DKK - Corona danese';
$GLOBALS['ISO_LANG']['CUR']['DOP'] = 'DOP - Peso della Repubblica Dominicana';
$GLOBALS['ISO_LANG']['CUR']['DZD'] = 'DZD - Dinaro algerino';
$GLOBALS['ISO_LANG']['CUR']['EEK'] = 'EEK - Corona dell\'Estonia';
$GLOBALS['ISO_LANG']['CUR']['EGP'] = 'EGP - Sterlina egiziana';
$GLOBALS['ISO_LANG']['CUR']['ERN'] = 'ERN - Nakfa dell\'Eritrea';
$GLOBALS['ISO_LANG']['CUR']['ETB'] = 'ETB - Birr dell\'Etiopia';
$GLOBALS['ISO_LANG']['CUR']['EUR'] = 'EUR - Euro';
$GLOBALS['ISO_LANG']['CUR']['FJD'] = 'FJD - Dollaro delle Figi';
$GLOBALS['ISO_LANG']['CUR']['FKP'] = 'FKP - Lira sterlina delle Falkland';
$GLOBALS['ISO_LANG']['CUR']['GBP'] = 'GBP - Sterlina inglese';
$GLOBALS['ISO_LANG']['CUR']['GEL'] = 'GEL - Lari';
$GLOBALS['ISO_LANG']['CUR']['GHS'] = 'GHS - Nuovo cedi del Ghana';
$GLOBALS['ISO_LANG']['CUR']['GIP'] = 'GIP - Lira sterlina della Gibilterra';
$GLOBALS['ISO_LANG']['CUR']['GMD'] = 'GMD - Dalasi';
$GLOBALS['ISO_LANG']['CUR']['GNS'] = 'GNS - Syli (anche franco del Guinea)';
$GLOBALS['ISO_LANG']['CUR']['GTQ'] = 'GTQ - Quetzal';
$GLOBALS['ISO_LANG']['CUR']['GYD'] = 'GYD - Dollaro della Guyana';
$GLOBALS['ISO_LANG']['CUR']['HKD'] = 'HKD - Dollaro del Hong Kong';
$GLOBALS['ISO_LANG']['CUR']['HNL'] = 'HNL - Lempira';
$GLOBALS['ISO_LANG']['CUR']['HRD'] = 'HRD - Dinaro croato';
$GLOBALS['ISO_LANG']['CUR']['HRK'] = 'HRK - Kuna croata';
$GLOBALS['ISO_LANG']['CUR']['HTG'] = 'HTG - Gourde';
$GLOBALS['ISO_LANG']['CUR']['HUF'] = 'HUF - Forint';
$GLOBALS['ISO_LANG']['CUR']['IDR'] = 'IDR - Rupia';
$GLOBALS['ISO_LANG']['CUR']['ILS'] = 'ILS - Nuovo shekel';
$GLOBALS['ISO_LANG']['CUR']['INR'] = 'INR - Rupia indiana';
$GLOBALS['ISO_LANG']['CUR']['IQD'] = 'IQD - Dinaro iracheno';
$GLOBALS['ISO_LANG']['CUR']['IRR'] = 'IRR - Rial del Iran';
$GLOBALS['ISO_LANG']['CUR']['ISK'] = 'ISK - Corona dell\'Islanda';
$GLOBALS['ISO_LANG']['CUR']['JMD'] = 'JMD - Dollaro della Giamaica';
$GLOBALS['ISO_LANG']['CUR']['JOD'] = 'JOD - Dinaro della Jordania';
$GLOBALS['ISO_LANG']['CUR']['JPY'] = 'JPY - Yen';
$GLOBALS['ISO_LANG']['CUR']['KES'] = 'KES - Scellino keniano';
$GLOBALS['ISO_LANG']['CUR']['KGS'] = 'KGS - Som del Kirghizistan';
$GLOBALS['ISO_LANG']['CUR']['KHR'] = 'KHR - Riel';
$GLOBALS['ISO_LANG']['CUR']['KMF'] = 'KMF - Franco del Comore';
$GLOBALS['ISO_LANG']['CUR']['KPW'] = 'KPW - Won del Corea del Nord';
$GLOBALS['ISO_LANG']['CUR']['KRW'] = 'KRW - Won del Corea del Sud';
$GLOBALS['ISO_LANG']['CUR']['KWD'] = 'KWD - Dinaro del Kuwait';
$GLOBALS['ISO_LANG']['CUR']['KYD'] = 'KYD - Dollaro delle Isole Cayman';
$GLOBALS['ISO_LANG']['CUR']['KZT'] = 'KZT - Tenge';
$GLOBALS['ISO_LANG']['CUR']['LAK'] = 'LAK - Kip';
$GLOBALS['ISO_LANG']['CUR']['LBP'] = 'LBP - Sterlina del Libano';
$GLOBALS['ISO_LANG']['CUR']['LKR'] = 'LKR - Rupia dello Sri Lanka';
$GLOBALS['ISO_LANG']['CUR']['LRD'] = 'LRD - Dollaro liberiano';
$GLOBALS['ISO_LANG']['CUR']['LSL'] = 'LSL - Loti';
$GLOBALS['ISO_LANG']['CUR']['LSM'] = 'LSM - Maloti';
$GLOBALS['ISO_LANG']['CUR']['LTL'] = 'LTL - Litas';
$GLOBALS['ISO_LANG']['CUR']['LVL'] = 'LVL - Lats';
$GLOBALS['ISO_LANG']['CUR']['LYD'] = 'LYD - Dinaro della Libia';
$GLOBALS['ISO_LANG']['CUR']['MAD'] = 'MAD - Dirham marochino';
$GLOBALS['ISO_LANG']['CUR']['MDL'] = 'MDL - Leu della Moldavia';
$GLOBALS['ISO_LANG']['CUR']['MGA'] = 'MGA - Ariary del Madagascar';
$GLOBALS['ISO_LANG']['CUR']['MKD'] = 'MKD - Dinaro macedone';
$GLOBALS['ISO_LANG']['CUR']['MMK'] = 'MMK - Kyat';
$GLOBALS['ISO_LANG']['CUR']['MNT'] = 'MNT - Tugrik';
$GLOBALS['ISO_LANG']['CUR']['MOP'] = 'MOP - Pataca';
$GLOBALS['ISO_LANG']['CUR']['MRO'] = 'MRO - Ouguiya';
$GLOBALS['ISO_LANG']['CUR']['MUR'] = 'MUR - Rupia mauriziana';
$GLOBALS['ISO_LANG']['CUR']['MVR'] = 'MVR - Rufiyaa';
$GLOBALS['ISO_LANG']['CUR']['MWK'] = 'MWK - Kwacha del Malawi';
$GLOBALS['ISO_LANG']['CUR']['MYR'] = 'MYR - Ringgit (Dollaro della Malesia)';
$GLOBALS['ISO_LANG']['CUR']['MZN'] = 'MZN - Metical Mozambico';
$GLOBALS['ISO_LANG']['CUR']['NAD'] = 'NAD - Dollaro Namibia';
$GLOBALS['ISO_LANG']['CUR']['NGN'] = 'NGN - Naira';
$GLOBALS['ISO_LANG']['CUR']['NIC'] = 'NIC - Córdoba';
$GLOBALS['ISO_LANG']['CUR']['NOK'] = 'NOK - Corona Norvegese';
$GLOBALS['ISO_LANG']['CUR']['NPR'] = 'NPR - Rupia Nepalese';
$GLOBALS['ISO_LANG']['CUR']['NZD'] = 'NZD - Dollaro Nuova Zeelanda';
$GLOBALS['ISO_LANG']['CUR']['OMR'] = 'OMR - Reale Oman';
$GLOBALS['ISO_LANG']['CUR']['PAB'] = 'PAB - Balboa';
$GLOBALS['ISO_LANG']['CUR']['PEN'] = 'PEN - Nuovo Sol';
$GLOBALS['ISO_LANG']['CUR']['PGK'] = 'PGK - Kina';
$GLOBALS['ISO_LANG']['CUR']['PHP'] = 'PHP - Peso Filipino';
$GLOBALS['ISO_LANG']['CUR']['PKR'] = 'PKR - Rupia Pakistani';
$GLOBALS['ISO_LANG']['CUR']['PLN'] = 'PLN - Nuovo Zloty Polacco';
$GLOBALS['ISO_LANG']['CUR']['PYG'] = 'PYG - Guarani';
$GLOBALS['ISO_LANG']['CUR']['QAR'] = 'QAR - Reale Qatar';
$GLOBALS['ISO_LANG']['CUR']['RON'] = 'RON - Nuovo Leu Romeno';
$GLOBALS['ISO_LANG']['CUR']['RSD'] = 'RSD - Dinar Serbo';
$GLOBALS['ISO_LANG']['CUR']['RUB'] = 'RUB - Rublo Federazione Russa';
$GLOBALS['ISO_LANG']['CUR']['RWF'] = 'RWF - Franco Rwandana';
$GLOBALS['ISO_LANG']['CUR']['SAR'] = 'SAR - Reale Saudita';
$GLOBALS['ISO_LANG']['CUR']['SBD'] = 'SBD - Dollaro Isole Solomon';
$GLOBALS['ISO_LANG']['CUR']['SCR'] = 'SCR - Rupia Seychelles';
$GLOBALS['ISO_LANG']['CUR']['SDG'] = 'SDG - Pound Sudanese';
$GLOBALS['ISO_LANG']['CUR']['SEK'] = 'SEK - Corona Svedese';
$GLOBALS['ISO_LANG']['CUR']['SGD'] = 'SGD - Dollaro Singapore';
$GLOBALS['ISO_LANG']['CUR']['SHP'] = 'SHP - Pound St Helena';
$GLOBALS['ISO_LANG']['CUR']['SLL'] = 'SLL - Leone';
$GLOBALS['ISO_LANG']['CUR']['SOS'] = 'SOS - Somalo Shilling';
$GLOBALS['ISO_LANG']['CUR']['SRD'] = 'SRD - Dollaro Surinam';
$GLOBALS['ISO_LANG']['CUR']['STD'] = 'STD - Dobra';
$GLOBALS['ISO_LANG']['CUR']['SYP'] = 'SYP - Pound Siriano';
$GLOBALS['ISO_LANG']['CUR']['SZL'] = 'SZL - Lilangeni';
$GLOBALS['ISO_LANG']['CUR']['THB'] = 'THB - Baht';
$GLOBALS['ISO_LANG']['CUR']['TJS'] = 'TJS - Somoni Tajikistan';
$GLOBALS['ISO_LANG']['CUR']['TMT'] = 'TMT - Manat Turkmenistani';
$GLOBALS['ISO_LANG']['CUR']['TND'] = 'TND - Dinar Tunisino';
$GLOBALS['ISO_LANG']['CUR']['TOP'] = 'TOP - Pa\'anga';
$GLOBALS['ISO_LANG']['CUR']['TPE'] = 'TPE - Escudo Timorian';
$GLOBALS['ISO_LANG']['CUR']['TRY'] = 'TRY - Nuova Lira Turchia';
$GLOBALS['ISO_LANG']['CUR']['TTD'] = 'TTD - Dollar  Trinidad e Tobago';
$GLOBALS['ISO_LANG']['CUR']['TWD'] = 'TWD - Dollaro Taiwan';
$GLOBALS['ISO_LANG']['CUR']['TZS'] = 'TZS - Shilling Tanzania';
$GLOBALS['ISO_LANG']['CUR']['UAH'] = 'UAH - Hryvna';
$GLOBALS['ISO_LANG']['CUR']['UGX'] = 'UGX - Shilling  Uganda';
$GLOBALS['ISO_LANG']['CUR']['USD'] = 'USD - Dollaro Stati Uniti';
$GLOBALS['ISO_LANG']['CUR']['UYU'] = 'UYU - Peso Uruguay';
$GLOBALS['ISO_LANG']['CUR']['UZS'] = 'UZS - Som Uzbekistan';
$GLOBALS['ISO_LANG']['CUR']['VEF'] = 'VEF - Bolivar Forte';
$GLOBALS['ISO_LANG']['CUR']['VND'] = 'VND - Dông Vietnam';
$GLOBALS['ISO_LANG']['CUR']['VUV'] = 'VUV - Vatu';
$GLOBALS['ISO_LANG']['CUR']['WST'] = 'WST - Tala';
$GLOBALS['ISO_LANG']['CUR']['YER'] = 'YER - Real Yemen';
$GLOBALS['ISO_LANG']['CUR']['ZAR'] = 'ZAR - Rand';
$GLOBALS['ISO_LANG']['CUR']['ZMK'] = 'ZMK -  Kwacha Zambia';
$GLOBALS['ISO_LANG']['CUR']['ZWL'] = 'ZWL - Dollaro Zimbabwe';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['USD'] = '$';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['EUR'] = '€';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['GBP'] = '£';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['JPY'] = '£';

