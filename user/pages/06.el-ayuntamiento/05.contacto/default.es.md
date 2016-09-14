---
title: Contacto
body_classes: page-contacto
process:
    markdown: true
    twig: true
cache_enable: false
form:
    name: formulario-de-contacto
    fields:
        -
            name: name
            label: Nombre
            placeholder: 'Introduce tu nombre y apellidos...'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Introducie tu email...'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Mensaje
            size: long
            placeholder: 'Deja tu mensaje...'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Envíar
            classes: 'gdlr-button with-border excerpt-read-more'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Gracias por su colaboración!'
        -
            display: gracias
---

Para cualquier consulta puedes utilizar alguno de estos medios:

###### Físicamente:
Pza. Don Vicente Tena 1 50196 LA MUELA (Zaragoza)

###### Telefónicamente:
Tel.: **976 144 002** / FAX: 976 144 287

###### Email:
<a href="mailto:info@lamuela.org?Subject=Consulta">info@lamuela.org</a>