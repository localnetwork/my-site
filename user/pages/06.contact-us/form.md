---
title: 'Contact Us'
media_order: background-services.jpg
visible: true
twitterenable: true
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
musicalbumenabled: false
productenabled: false
product:
    ratingValue: 2.5
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
facebookenable: true
form:
    classes: 'row has-validator'
    name: contact
    validation_fail: test
    fields:
        first_name:
            outerclasses: 'col-12 col-md-6'
            name: 'First Name'
            label: 'First Name'
            type: text
            validate:
                required: true
        last_name:
            outerclasses: 'col-12 col-md-6'
            name: 'Last Name'
            label: 'Last Name'
            type: text
            validate:
                required: true
        email:
            outerclasses: col-12
            label: Email
            type: email
            validate:
                required: true
        message:
            outerclasses: col-12
            label: Message
            type: textarea
            validate:
                required: true
        g-recaptcha-response:
            outerclasses: 'col-12 captcha'
            label: Captcha
            type: captcha
            recaptcha_not_validated: 'Captcha is not valid!'
    buttons:
        submit:
            outerclasses: col-12
            type: submit
            value: Submit
    process:
        captcha: true
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Site Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Thank you for getting in touch!'
        display: /thank-you
location:
    'user/pages/05.contact-us/CC Location Map PDF ver.5 (2).pdf':
        name: 'CC Location Map PDF ver.5 (2).pdf'
        type: application/pdf
        size: 802051
        path: 'user/pages/05.contact-us/CC Location Map PDF ver.5 (2).pdf'
---

<p>Office &amp; Plant Address:&nbsp; Lot 7 Block 7 Springbook St., Sterling Technopark, Silang, Cavite, Philippines 4118</p>
<p>Lot 7 Block 7 Springbook St., Sterling Technopark, Silang, Cavite, Philippines 4118</p>
<p>Phone (Manila Line):&nbsp;+ 632 245 8740 to 41 / +632 245 8942 to 43<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Cavite Line):&nbsp;+ 6346 404 2938</p>
<p>Mobile (Globe):&nbsp;+63956 058 6057</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (Sun):&nbsp;+63933 817 8416</p>
<p>Email Address:&nbsp;info@cianancorp.com</p>
<p>Website:&nbsp;<a href="http://www.cianancorp.com" target="_blank" rel="noopener">www.cianancorp.com</a></p>