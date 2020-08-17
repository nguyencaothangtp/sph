<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <style>
        @charset "UTF-8";

        @import url("https://fonts.googleapis.com/css?family=Barlow:300,400,500,700|Crimson+Text:400,600,700&display=swap");

        @import url("https://fonts.googleapis.com/css?family=Noto+Sans+SC:400,700|Noto+Serif+SC:400,900&display=swap&subset=chinese-simplified");

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
            display: block;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important;
        }

        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title], abbr[data-original-title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol, ul, dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol, ul ul, ol ul, ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b, strong {
            font-weight: bolder;
        }

        small {
            font-size: 80%;
        }

        sub, sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        a:not([href]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):hover {
            color: inherit;
            text-decoration: none;
        }

        pre, code, kbd, samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
        }

        figure {
            margin: 0 0 1rem;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #6c757d;
            text-align: left;
            caption-side: bottom;
        }

        th {
            text-align: inherit;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        button {
            border-radius: 0;
        }

        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        input, button, select, optgroup, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button, input {
            overflow: visible;
        }

        button, select {
            text-transform: none;
        }

        select {
            word-wrap: normal;
        }

        button, [type="button"], [type="reset"], [type="submit"] {
            -webkit-appearance: button;
        }

        button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        input[type="radio"], input[type="checkbox"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }

        input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] {
            -webkit-appearance: listbox;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        [type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            outline-offset: -2px;
            -webkit-appearance: none;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none !important;
        }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h1, .h1 {
            font-size: 2.5rem;
        }

        h2, .h2 {
            font-size: 2rem;
        }

        h3, .h3 {
            font-size: 1.75rem;
        }

        h4, .h4 {
            font-size: 1.5rem;
        }

        h5, .h5 {
            font-size: 1.25rem;
        }

        h6, .h6 {
            font-size: 1rem;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.2;
        }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.2;
        }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.2;
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        small, .small {
            font-size: 80%;
            font-weight: 400;
        }

        mark, .mark {
            padding: 0.2em;
            background-color: #fcf8e3;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }

        .list-inline-item:not(:last-child) {
            margin-right: 0.5rem;
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #6c757d;
        }

        .blockquote-footer::before {
            content: "\2014\00A0";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 90%;
            color: #6c757d;
        }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-wrap: break-word;
        }

        a > code {
            color: inherit;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #212529;
            border-radius: 0.2rem;
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700;
        }

        pre {
            display: block;
            font-size: 87.5%;
            color: #212529;
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .container-fluid, .container-sm, .container-md, .container-lg, .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters > .col, .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1;
        }

        .order-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13;
        }

        .order-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0;
        }

        .order-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .order-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .order-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }

        .order-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4;
        }

        .order-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5;
        }

        .order-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6;
        }

        .order-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7;
        }

        .order-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8;
        }

        .order-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9;
        }

        .order-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10;
        }

        .order-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11;
        }

        .order-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12;
        }

        .offset-1 {
            margin-left: 8.33333%;
        }

        .offset-2 {
            margin-left: 16.66667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333%;
        }

        .offset-5 {
            margin-left: 41.66667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333%;
        }

        .offset-8 {
            margin-left: 66.66667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333%;
        }

        .offset-11 {
            margin-left: 91.66667%;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th, .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th, .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th, .table-borderless td, .table-borderless thead th, .table-borderless tbody + tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary, .table-primary > th, .table-primary > td {
            background-color: #b8daff;
        }

        .table-primary th, .table-primary td, .table-primary thead th, .table-primary tbody + tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
            background-color: #9fcdff;
        }

        .table-secondary, .table-secondary > th, .table-secondary > td {
            background-color: #d6d8db;
        }

        .table-secondary th, .table-secondary td, .table-secondary thead th, .table-secondary tbody + tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover > td, .table-hover .table-secondary:hover > th {
            background-color: #c8cbcf;
        }

        .table-success, .table-success > th, .table-success > td {
            background-color: #c3e6cb;
        }

        .table-success th, .table-success td, .table-success thead th, .table-success tbody + tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
            background-color: #b1dfbb;
        }

        .table-info, .table-info > th, .table-info > td {
            background-color: #bee5eb;
        }

        .table-info th, .table-info td, .table-info thead th, .table-info tbody + tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
            background-color: #abdde5;
        }

        .table-warning, .table-warning > th, .table-warning > td {
            background-color: #ffeeba;
        }

        .table-warning th, .table-warning td, .table-warning thead th, .table-warning tbody + tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
            background-color: #ffe8a1;
        }

        .table-danger, .table-danger > th, .table-danger > td {
            background-color: #f5c6cb;
        }

        .table-danger th, .table-danger td, .table-danger thead th, .table-danger tbody + tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
            background-color: #f1b0b7;
        }

        .table-light, .table-light > th, .table-light > td {
            background-color: #fdfdfe;
        }

        .table-light th, .table-light td, .table-light thead th, .table-light tbody + tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover > td, .table-hover .table-light:hover > th {
            background-color: #ececf6;
        }

        .table-dark, .table-dark > th, .table-dark > td {
            background-color: #c6c8ca;
        }

        .table-dark th, .table-dark td, .table-dark thead th, .table-dark tbody + tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover > td, .table-hover .table-dark:hover > th {
            background-color: #b9bbbe;
        }

        .table-active, .table-active > th, .table-active > td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #fff;
            background-color: #343a40;
        }

        .table-dark th, .table-dark td, .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive > .table-bordered {
            border: 0;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .form-control:disabled, .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1;
        }

        select.form-control:focus::-ms-value {
            color: #495057;
            background-color: #fff;
        }

        .form-control-file, .form-control-range {
            display: block;
            width: 100%;
        }

        .col-form-label {
            padding-top: calc(0.375rem + 1px);
            padding-bottom: calc(0.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-form-label-lg {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5;
        }

        .col-form-label-sm {
            padding-top: calc(0.25rem + 1px);
            padding-bottom: calc(0.25rem + 1px);
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.375rem 0;
            margin-bottom: 0;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }

        .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        select.form-control[size], select.form-control[multiple] {
            height: auto;
        }

        textarea.form-control {
            height: auto;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-text {
            display: block;
            margin-top: 0.25rem;
        }

        .form-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }

        .form-row > .col, .form-row > [class*="col-"] {
            padding-right: 5px;
            padding-left: 5px;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem;
        }

        .form-check-input {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: -1.25rem;
        }

        .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
            color: #6c757d;
        }

        .form-check-label {
            margin-bottom: 0;
        }

        .form-check-inline {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 0;
            margin-right: 0.75rem;
        }

        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-right: 0.3125rem;
            margin-left: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #28a745;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: .1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(40, 167, 69, 0.9);
            border-radius: 0.25rem;
        }

        .was-validated :valid ~ .valid-feedback, .was-validated :valid ~ .valid-tooltip, .is-valid ~ .valid-feedback, .is-valid ~ .valid-tooltip {
            display: block;
        }

        .was-validated .form-control:valid, .form-control.is-valid {
            border-color: #28a745;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
            border-color: #28a745;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .custom-select:valid, .custom-select.is-valid {
            border-color: #28a745;
            padding-right: calc(0.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
            border-color: #28a745;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
            color: #28a745;
        }

        .was-validated .form-check-input:valid ~ .valid-feedback, .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback, .form-check-input.is-valid ~ .valid-tooltip {
            display: block;
        }

        .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
            color: #28a745;
        }

        .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
            border-color: #28a745;
        }

        .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
            border-color: #34ce57;
            background-color: #34ce57;
        }

        .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #28a745;
        }

        .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
            border-color: #28a745;
        }

        .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
            border-color: #28a745;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: .1rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(220, 53, 69, 0.9);
            border-radius: 0.25rem;
        }

        .was-validated :invalid ~ .invalid-feedback, .was-validated :invalid ~ .invalid-tooltip, .is-invalid ~ .invalid-feedback, .is-invalid ~ .invalid-tooltip {
            display: block;
        }

        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .custom-select:invalid, .custom-select.is-invalid {
            border-color: #dc3545;
            padding-right: calc(0.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
            color: #dc3545;
        }

        .was-validated .form-check-input:invalid ~ .invalid-feedback, .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback, .form-check-input.is-invalid ~ .invalid-tooltip {
            display: block;
        }

        .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
            color: #dc3545;
        }

        .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
            border-color: #dc3545;
        }

        .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
            border-color: #e4606d;
            background-color: #e4606d;
        }

        .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #dc3545;
        }

        .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
            border-color: #dc3545;
        }

        .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        .form-inline {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .form-inline .form-check {
            width: 100%;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        .btn:hover {
            color: #212529;
            text-decoration: none;
        }

        .btn:focus, .btn.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn.disabled, .btn:disabled {
            opacity: 0.65;
        }

        a.btn.disabled, fieldset:disabled a.btn {
            pointer-events: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-primary:focus, .btn-primary.focus {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-secondary:focus, .btn-secondary.focus {
            color: #fff;
            background-color: #5a6268;
            border-color: #545b62;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
        }

        .btn-secondary.disabled, .btn-secondary:disabled {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #545b62;
            border-color: #4e555b;
        }

        .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-success:focus, .btn-success.focus {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
        }

        .btn-success.disabled, .btn-success:disabled {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active, .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430;
        }

        .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .show > .btn-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
        }

        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-info:focus, .btn-info.focus {
            color: #fff;
            background-color: #138496;
            border-color: #117a8b;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
        }

        .btn-info.disabled, .btn-info:disabled {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
            color: #fff;
            background-color: #117a8b;
            border-color: #10707f;
        }

        .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus, .show > .btn-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
        }

        .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-warning:focus, .btn-warning.focus {
            color: #212529;
            background-color: #e0a800;
            border-color: #d39e00;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
        }

        .btn-warning.disabled, .btn-warning:disabled {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active, .show > .btn-warning.dropdown-toggle {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500;
        }

        .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-danger:focus, .btn-danger.focus {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
        }

        .btn-danger.disabled, .btn-danger:disabled {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active, .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d;
        }

        .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
        }

        .btn-light {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-light:hover {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
        }

        .btn-light:focus, .btn-light.focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
        }

        .btn-light.disabled, .btn-light:disabled {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active, .show > .btn-light.dropdown-toggle {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df;
        }

        .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus, .show > .btn-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
        }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124;
        }

        .btn-dark:focus, .btn-dark.focus {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
        }

        .btn-dark.disabled, .btn-dark:disabled {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active, .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d;
        }

        .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
        }

        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-primary:focus, .btn-outline-primary.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }

        .btn-outline-primary.disabled, .btn-outline-primary:disabled {
            color: #007bff;
            background-color: transparent;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }

        .btn-outline-secondary {
            color: #6c757d;
            border-color: #6c757d;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-outline-secondary:focus, .btn-outline-secondary.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
            color: #6c757d;
            background-color: transparent;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .btn-outline-success {
            color: #28a745;
            border-color: #28a745;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-outline-success:focus, .btn-outline-success.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        .btn-outline-success.disabled, .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent;
        }

        .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .show > .btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        .btn-outline-info {
            color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-outline-info:focus, .btn-outline-info.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        }

        .btn-outline-info.disabled, .btn-outline-info:disabled {
            color: #17a2b8;
            background-color: transparent;
        }

        .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .show > .btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        }

        .btn-outline-warning {
            color: #ffc107;
            border-color: #ffc107;
        }

        .btn-outline-warning:hover {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-outline-warning:focus, .btn-outline-warning.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-outline-warning.disabled, .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent;
        }

        .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .show > .btn-outline-warning.dropdown-toggle {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:focus, .btn-outline-danger.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .btn-outline-danger.disabled, .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent;
        }

        .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active, .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .btn-outline-light {
            color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-outline-light:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-outline-light:focus, .btn-outline-light.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        }

        .btn-outline-light.disabled, .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent;
        }

        .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active, .show > .btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        }

        .btn-outline-dark {
            color: #343a40;
            border-color: #343a40;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-outline-dark:focus, .btn-outline-dark.focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        }

        .btn-outline-dark.disabled, .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent;
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active, .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        }

        .btn-link {
            font-weight: 400;
            color: #007bff;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .btn-link:focus, .btn-link.focus {
            text-decoration: underline;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-link:disabled, .btn-link.disabled {
            color: #6c757d;
            pointer-events: none;
        }

        .btn-lg, .btn-group-lg > .btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        .btn-sm, .btn-group-sm > .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .btn-block + .btn-block {
            margin-top: 0.5rem;
        }

        input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block {
            width: 100%;
        }

        .fade {
            -webkit-transition: opacity 0.15s linear;
            -o-transition: opacity 0.15s linear;
            transition: opacity 0.15s linear;
        }

        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition: height 0.35s ease;
            -o-transition: height 0.35s ease;
            transition: height 0.35s ease;
        }

        .dropup, .dropright, .dropdown, .dropleft {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }

        .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 0.25rem;
        }

        .dropdown-menu-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0.125rem;
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent;
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0.125rem;
        }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
        }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropright .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0.125rem;
        }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
        }

        .dropleft .dropdown-toggle::after {
            display: none;
        }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent;
        }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
            right: auto;
            bottom: auto;
        }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:hover, .dropdown-item:focus {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #007bff;
        }

        .dropdown-item.disabled, .dropdown-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1.5rem;
            margin-bottom: 0;
            font-size: 0.875rem;
            color: #6c757d;
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: 0.25rem 1.5rem;
            color: #212529;
        }

        .btn-group, .btn-group-vertical {
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle;
        }

        .btn-group > .btn, .btn-group-vertical > .btn {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .btn-group > .btn:hover, .btn-group-vertical > .btn:hover {
            z-index: 1;
        }

        .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active, .btn-group-vertical > .btn:focus, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) {
            margin-left: -1px;
        }

        .btn-group > .btn:not(:last-child):not(.dropdown-toggle), .btn-group > .btn-group:not(:last-child) > .btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .btn-group > .btn:not(:first-child), .btn-group > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem;
        }

        .dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropright .dropdown-toggle-split::after {
            margin-left: 0;
        }

        .dropleft .dropdown-toggle-split::before {
            margin-right: 0;
        }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
            padding-right: 0.375rem;
            padding-left: 0.375rem;
        }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }

        .btn-group-vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-group-vertical > .btn, .btn-group-vertical > .btn-group {
            width: 100%;
        }

        .btn-group-vertical > .btn:not(:first-child), .btn-group-vertical > .btn-group:not(:first-child) {
            margin-top: -1px;
        }

        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .btn-group-vertical > .btn-group:not(:last-child) > .btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-group-vertical > .btn:not(:first-child), .btn-group-vertical > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .btn-group-toggle > .btn, .btn-group-toggle > .btn-group > .btn {
            margin-bottom: 0;
        }

        .btn-group-toggle > .btn input[type="radio"], .btn-group-toggle > .btn input[type="checkbox"], .btn-group-toggle > .btn-group > .btn input[type="radio"], .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .input-group {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }

        .input-group > .form-control, .input-group > .form-control-plaintext, .input-group > .custom-select, .input-group > .custom-file {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%;
            min-width: 0;
            margin-bottom: 0;
        }

        .input-group > .form-control + .form-control, .input-group > .form-control + .custom-select, .input-group > .form-control + .custom-file, .input-group > .form-control-plaintext + .form-control, .input-group > .form-control-plaintext + .custom-select, .input-group > .form-control-plaintext + .custom-file, .input-group > .custom-select + .form-control, .input-group > .custom-select + .custom-select, .input-group > .custom-select + .custom-file, .input-group > .custom-file + .form-control, .input-group > .custom-file + .custom-select, .input-group > .custom-file + .custom-file {
            margin-left: -1px;
        }

        .input-group > .form-control:focus, .input-group > .custom-select:focus, .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
            z-index: 3;
        }

        .input-group > .custom-file .custom-file-input:focus {
            z-index: 4;
        }

        .input-group > .form-control:not(:last-child), .input-group > .custom-select:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group > .form-control:not(:first-child), .input-group > .custom-select:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group > .custom-file {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .input-group > .custom-file:not(:last-child) .custom-file-label, .input-group > .custom-file:not(:last-child) .custom-file-label::after {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group > .custom-file:not(:first-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group-prepend, .input-group-append {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .input-group-prepend .btn, .input-group-append .btn {
            position: relative;
            z-index: 2;
        }

        .input-group-prepend .btn:focus, .input-group-append .btn:focus {
            z-index: 3;
        }

        .input-group-prepend .btn + .btn, .input-group-prepend .btn + .input-group-text, .input-group-prepend .input-group-text + .input-group-text, .input-group-prepend .input-group-text + .btn, .input-group-append .btn + .btn, .input-group-append .btn + .input-group-text, .input-group-append .input-group-text + .input-group-text, .input-group-append .input-group-text + .btn {
            margin-left: -1px;
        }

        .input-group-prepend {
            margin-right: -1px;
        }

        .input-group-append {
            margin-left: -1px;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .input-group-text input[type="radio"], .input-group-text input[type="checkbox"] {
            margin-top: 0;
        }

        .input-group-lg > .form-control:not(textarea), .input-group-lg > .custom-select {
            height: calc(1.5em + 1rem + 2px);
        }

        .input-group-lg > .form-control, .input-group-lg > .custom-select, .input-group-lg > .input-group-prepend > .input-group-text, .input-group-lg > .input-group-append > .input-group-text, .input-group-lg > .input-group-prepend > .btn, .input-group-lg > .input-group-append > .btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }

        .input-group-sm > .form-control:not(textarea), .input-group-sm > .custom-select {
            height: calc(1.5em + 0.5rem + 2px);
        }

        .input-group-sm > .form-control, .input-group-sm > .custom-select, .input-group-sm > .input-group-prepend > .input-group-text, .input-group-sm > .input-group-append > .input-group-text, .input-group-sm > .input-group-prepend > .btn, .input-group-sm > .input-group-append > .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }

        .input-group-lg > .custom-select, .input-group-sm > .custom-select {
            padding-right: 1.75rem;
        }

        .input-group > .input-group-prepend > .btn, .input-group > .input-group-prepend > .input-group-text, .input-group > .input-group-append:not(:last-child) > .btn, .input-group > .input-group-append:not(:last-child) > .input-group-text, .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group > .input-group-append > .btn, .input-group > .input-group-append > .input-group-text, .input-group > .input-group-prepend:not(:first-child) > .btn, .input-group > .input-group-prepend:not(:first-child) > .input-group-text, .input-group > .input-group-prepend:first-child > .btn:not(:first-child), .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
        }

        .custom-control-inline {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 1rem;
        }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0;
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #007bff;
            background-color: #007bff;
        }

        .custom-control-input:focus ~ .custom-control-label::before {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #80bdff;
        }

        .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
            color: #fff;
            background-color: #b3d7ff;
            border-color: #b3d7ff;
        }

        .custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
            color: #6c757d;
        }

        .custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
            background-color: #e9ecef;
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top;
        }

        .custom-control-label::before {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #adb5bd solid 1px;
        }

        .custom-control-label::after {
            position: absolute;
            top: 0.25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: no-repeat 50% / 50% 50%;
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: 0.25rem;
        }

        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
            border-color: #007bff;
            background-color: #007bff;
        }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5);
        }

        .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5);
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%;
        }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5);
        }

        .custom-switch {
            padding-left: 2.25rem;
        }

        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: 0.5rem;
        }

        .custom-switch .custom-control-label::after {
            top: calc(0.25rem + 2px);
            left: calc(-2.25rem + 2px);
            width: calc(1rem - 4px);
            height: calc(1rem - 4px);
            background-color: #adb5bd;
            border-radius: 0.5rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #fff;
            -webkit-transform: translateX(0.75rem);
            -ms-transform: translateX(0.75rem);
            transform: translateX(0.75rem);
        }

        .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(0, 123, 255, 0.5);
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 1.75rem 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-select:focus {
            border-color: #80bdff;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #fff;
        }

        .custom-select[multiple], .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: 0.75rem;
            background-image: none;
        }

        .custom-select:disabled {
            color: #6c757d;
            background-color: #e9ecef;
        }

        .custom-select::-ms-expand {
            display: none;
        }

        .custom-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057;
        }

        .custom-select-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem;
        }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem;
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            margin: 0;
            opacity: 0;
        }

        .custom-file-input:focus ~ .custom-file-label {
            border-color: #80bdff;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-file-input[disabled] ~ .custom-file-label, .custom-file-input:disabled ~ .custom-file-label {
            background-color: #e9ecef;
        }

        .custom-file-input:lang(en) ~ .custom-file-label::after {
            content: "Browse";
        }

        .custom-file-input ~ .custom-file-label[data-browse]::after {
            content: attr(data-browse);
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + 0.75rem);
            padding: 0.375rem 0.75rem;
            line-height: 1.5;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 0.25rem 0.25rem 0;
        }

        .custom-range {
            width: 100%;
            height: 1.4rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-range:focus {
            outline: none;
        }

        .custom-range:focus::-webkit-slider-thumb {
            -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .custom-range::-moz-focus-outer {
            border: 0;
        }

        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }

        .custom-range::-webkit-slider-thumb:active {
            background-color: #b3d7ff;
        }

        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
        }

        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-range::-moz-range-thumb:active {
            background-color: #b3d7ff;
        }

        .custom-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
        }

        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: 0.2rem;
            margin-left: 0.2rem;
            background-color: #007bff;
            border: 0;
            border-radius: 1rem;
            -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            appearance: none;
        }

        .custom-range::-ms-thumb:active {
            background-color: #b3d7ff;
        }

        .custom-range::-ms-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: 0.5rem;
        }

        .custom-range::-ms-fill-lower {
            background-color: #dee2e6;
            border-radius: 1rem;
        }

        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dee2e6;
            border-radius: 1rem;
        }

        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd;
        }

        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default;
        }

        .custom-range:disabled::-moz-range-thumb {
            background-color: #adb5bd;
        }

        .custom-range:disabled::-moz-range-track {
            cursor: default;
        }

        .custom-range:disabled::-ms-thumb {
            background-color: #adb5bd;
        }

        .custom-control-label::before, .custom-file-label, .custom-select {
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover, .nav-link:focus {
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #6c757d;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid #dee2e6;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
            border-color: #e9ecef #e9ecef #dee2e6;
        }

        .nav-tabs .nav-link.disabled {
            color: #6c757d;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            border-radius: 0.25rem;
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #007bff;
        }

        .nav-fill .nav-item {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified .nav-item {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
        }

        .tab-content > .tab-pane {
            display: none;
        }

        .tab-content > .active {
            display: block;
        }

        .navbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 0.5rem 1rem;
        }

        .navbar .container, .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }

        .navbar-brand:hover, .navbar-brand:focus {
            text-decoration: none;
        }

        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none;
        }

        .navbar-text {
            display: inline-block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .navbar-toggler {
            padding: 0.25rem 0.75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .navbar-toggler:hover, .navbar-toggler:focus {
            text-decoration: none;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: no-repeat center center;
            background-size: 100% 100%;
        }

        .navbar-expand {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand > .container, .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-expand .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand > .container, .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
        }

        .navbar-expand .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-expand .navbar-toggler {
            display: none;
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(0, 0, 0, 0.7);
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3);
        }

        .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-light .navbar-text a {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-dark .navbar-brand {
            color: #fff;
        }

        .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, 0.5);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, 0.5);
        }

        .navbar-dark .navbar-text a {
            color: #fff;
        }

        .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
            color: #fff;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card > .list-group:first-child .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .card > .list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }

        .card-title {
            margin-bottom: 0.75rem;
        }

        .card-subtitle {
            margin-top: -0.375rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link + .card-link {
            margin-left: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        }

        .card-header + .list-group .list-group-item:first-child {
            border-top: 0;
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-top: 1px solid rgba(0, 0, 0, 0.125);
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
        }

        .card-header-tabs {
            margin-right: -0.625rem;
            margin-bottom: -0.75rem;
            margin-left: -0.625rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.625rem;
            margin-left: -0.625rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
        }

        .card-img, .card-img-top, .card-img-bottom {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
        }

        .card-img, .card-img-top {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }

        .card-img, .card-img-bottom {
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px);
        }

        .card-deck .card {
            margin-bottom: 15px;
        }

        .card-group > .card {
            margin-bottom: 15px;
        }

        .card-columns .card {
            margin-bottom: 0.75rem;
        }

        .accordion > .card {
            overflow: hidden;
        }

        .accordion > .card:not(:last-of-type) {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .accordion > .card:not(:first-of-type) {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .accordion > .card > .card-header {
            border-radius: 0;
            margin-bottom: -1px;
        }

        .breadcrumb {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #e9ecef;
            border-radius: 0.25rem;
        }

        .breadcrumb-item + .breadcrumb-item {
            padding-left: 0.5rem;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            display: inline-block;
            padding-right: 0.5rem;
            color: #6c757d;
            content: "/";
        }

        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: underline;
        }

        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        .pagination {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem;
        }

        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .page-link:hover {
            z-index: 2;
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .page-link:focus {
            z-index: 3;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .page-item:last-child .page-link {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .pagination-lg .page-link {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5;
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem;
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
        }

        .pagination-sm .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem;
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem;
        }

        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        a.badge:hover, a.badge:focus {
            text-decoration: none;
        }

        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .badge-pill {
            padding-right: 0.6em;
            padding-left: 0.6em;
            border-radius: 10rem;
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff;
        }

        a.badge-primary:hover, a.badge-primary:focus {
            color: #fff;
            background-color: #0062cc;
        }

        a.badge-primary:focus, a.badge-primary.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d;
        }

        a.badge-secondary:hover, a.badge-secondary:focus {
            color: #fff;
            background-color: #545b62;
        }

        a.badge-secondary:focus, a.badge-secondary.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .badge-success {
            color: #fff;
            background-color: #28a745;
        }

        a.badge-success:hover, a.badge-success:focus {
            color: #fff;
            background-color: #1e7e34;
        }

        a.badge-success:focus, a.badge-success.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8;
        }

        a.badge-info:hover, a.badge-info:focus {
            color: #fff;
            background-color: #117a8b;
        }

        a.badge-info:focus, a.badge-info.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107;
        }

        a.badge-warning:hover, a.badge-warning:focus {
            color: #212529;
            background-color: #d39e00;
        }

        a.badge-warning:focus, a.badge-warning.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545;
        }

        a.badge-danger:hover, a.badge-danger:focus {
            color: #fff;
            background-color: #bd2130;
        }

        a.badge-danger:focus, a.badge-danger.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa;
        }

        a.badge-light:hover, a.badge-light:focus {
            color: #212529;
            background-color: #dae0e5;
        }

        a.badge-light:focus, a.badge-light.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40;
        }

        a.badge-dark:hover, a.badge-dark:focus {
            color: #fff;
            background-color: #1d2124;
        }

        a.badge-dark:focus, a.badge-dark.focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: 0.3rem;
        }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0;
        }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
        }

        .alert-dismissible {
            padding-right: 4rem;
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff;
        }

        .alert-primary hr {
            border-top-color: #9fcdff;
        }

        .alert-primary .alert-link {
            color: #002752;
        }

        .alert-secondary {
            color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db;
        }

        .alert-secondary hr {
            border-top-color: #c8cbcf;
        }

        .alert-secondary .alert-link {
            color: #202326;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-success hr {
            border-top-color: #b1dfbb;
        }

        .alert-success .alert-link {
            color: #0b2e13;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }

        .alert-info hr {
            border-top-color: #abdde5;
        }

        .alert-info .alert-link {
            color: #062c33;
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        .alert-warning hr {
            border-top-color: #ffe8a1;
        }

        .alert-warning .alert-link {
            color: #533f03;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-danger hr {
            border-top-color: #f1b0b7;
        }

        .alert-danger .alert-link {
            color: #491217;
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe;
        }

        .alert-light hr {
            border-top-color: #ececf6;
        }

        .alert-light .alert-link {
            color: #686868;
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca;
        }

        .alert-dark hr {
            border-top-color: #b9bbbe;
        }

        .alert-dark .alert-link {
            color: #040505;
        }

        .progress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: 0.75rem;
            background-color: #e9ecef;
            border-radius: 0.25rem;
        }

        .progress-bar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #007bff;
            -webkit-transition: width 0.6s ease;
            -o-transition: width 0.6s ease;
            transition: width 0.6s ease;
        }

        .progress-bar-striped {
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite;
        }

        .media {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .media-body {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .list-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
        }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit;
        }

        .list-group-item-action:hover, .list-group-item-action:focus {
            z-index: 1;
            color: #495057;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        .list-group-item-action:active {
            color: #212529;
            background-color: #e9ecef;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .list-group-item.disabled, .list-group-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .list-group-item + .list-group-item {
            border-top-width: 0;
        }

        .list-group-item + .list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px;
        }

        .list-group-horizontal {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal .list-group-item:first-child {
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal .list-group-item:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal .list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal .list-group-item + .list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal .list-group-item + .list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }

        .list-group-flush .list-group-item {
            border-right-width: 0;
            border-left-width: 0;
            border-radius: 0;
        }

        .list-group-flush .list-group-item:first-child {
            border-top-width: 0;
        }

        .list-group-flush:last-child .list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            color: #004085;
            background-color: #b8daff;
        }

        .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
            color: #004085;
            background-color: #9fcdff;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #004085;
            border-color: #004085;
        }

        .list-group-item-secondary {
            color: #383d41;
            background-color: #d6d8db;
        }

        .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
            color: #383d41;
            background-color: #c8cbcf;
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #383d41;
            border-color: #383d41;
        }

        .list-group-item-success {
            color: #155724;
            background-color: #c3e6cb;
        }

        .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
            color: #155724;
            background-color: #b1dfbb;
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #155724;
            border-color: #155724;
        }

        .list-group-item-info {
            color: #0c5460;
            background-color: #bee5eb;
        }

        .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
            color: #0c5460;
            background-color: #abdde5;
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #0c5460;
            border-color: #0c5460;
        }

        .list-group-item-warning {
            color: #856404;
            background-color: #ffeeba;
        }

        .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
            color: #856404;
            background-color: #ffe8a1;
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #856404;
            border-color: #856404;
        }

        .list-group-item-danger {
            color: #721c24;
            background-color: #f5c6cb;
        }

        .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
            color: #721c24;
            background-color: #f1b0b7;
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #721c24;
            border-color: #721c24;
        }

        .list-group-item-light {
            color: #818182;
            background-color: #fdfdfe;
        }

        .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #818182;
            background-color: #ececf6;
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #818182;
            border-color: #818182;
        }

        .list-group-item-dark {
            color: #1b1e21;
            background-color: #c6c8ca;
        }

        .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
            color: #1b1e21;
            background-color: #b9bbbe;
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #1b1e21;
            border-color: #1b1e21;
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
        }

        .close:hover {
            color: #000;
            text-decoration: none;
        }

        .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
            opacity: .75;
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        a.close.disabled {
            pointer-events: none;
        }

        .toast {
            max-width: 350px;
            overflow: hidden;
            font-size: 0.875rem;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            opacity: 0;
            border-radius: 0.25rem;
        }

        .toast:not(:last-child) {
            margin-bottom: 0.75rem;
        }

        .toast.showing {
            opacity: 1;
        }

        .toast.show {
            display: block;
            opacity: 1;
        }

        .toast.hide {
            display: none;
        }

        .toast-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.25rem 0.75rem;
            color: #6c757d;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .toast-body {
            padding: 0.75rem;
        }

        .modal-open {
            overflow: hidden;
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 0.5rem;
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            -webkit-transition: -webkit-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            -o-transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            -webkit-transform: translate(0, -50px);
            -ms-transform: translate(0, -50px);
            transform: translate(0, -50px);
        }

        .modal.show .modal-dialog {
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .modal.modal-static .modal-dialog {
            -webkit-transform: scale(1.02);
            -ms-transform: scale(1.02);
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            max-height: calc(100% - 1rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 1rem);
            overflow: hidden;
        }

        .modal-dialog-scrollable .modal-header, .modal-dialog-scrollable .modal-footer {
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem);
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            content: "";
        }

        .modal-dialog-centered.modal-dialog-scrollable {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: 100%;
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none;
        }

        .modal-dialog-centered.modal-dialog-scrollable::before {
            content: none;
        }

        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.3rem;
            outline: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.show {
            opacity: 0.5;
        }

        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px);
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem auto;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 1px solid #dee2e6;
            border-bottom-right-radius: calc(0.3rem - 1px);
            border-bottom-left-radius: calc(0.3rem - 1px);
        }

        .modal-footer > * {
            margin: 0.25rem;
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            opacity: 0;
        }

        .tooltip.show {
            opacity: 0.9;
        }

        .tooltip .arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem;
        }

        .tooltip .arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
            bottom: 0;
        }

        .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
            top: 0;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #000;
        }

        .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
            right: 0;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: #000;
        }

        .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
            top: 0;
        }

        .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
            bottom: 0;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: #000;
        }

        .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
            left: 0;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: #000;
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.25rem 0.5rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 0.25rem;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.3rem;
        }

        .popover .arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
            margin: 0 0.3rem;
        }

        .popover .arrow::before, .popover .arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
            margin-bottom: 0.5rem;
        }

        .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
            bottom: calc(-0.5rem - 1px);
        }

        .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #fff;
        }

        .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
            margin-left: 0.5rem;
        }

        .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
            left: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.3rem 0;
        }

        .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #fff;
        }

        .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
            margin-top: 0.5rem;
        }

        .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
            top: calc(-0.5rem - 1px);
        }

        .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #fff;
        }

        .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -0.5rem;
            content: "";
            border-bottom: 1px solid #f7f7f7;
        }

        .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
            margin-right: 0.5rem;
        }

        .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
            right: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.3rem 0;
        }

        .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: rgba(0, 0, 0, 0.25);
        }

        .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #fff;
        }

        .popover-header {
            padding: 0.5rem 0.75rem;
            margin-bottom: 0;
            font-size: 1rem;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px);
        }

        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: 0.5rem 0.75rem;
            color: #212529;
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: -webkit-transform 0.6s ease-in-out;
            transition: -webkit-transform 0.6s ease-in-out;
            -o-transition: transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
        }

        .carousel-item.active, .carousel-item-next, .carousel-item-prev {
            display: block;
        }

        .carousel-item-next:not(.carousel-item-left), .active.carousel-item-right {
            -webkit-transform: translateX(100%);
            -ms-transform: translateX(100%);
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-right), .active.carousel-item-left {
            -webkit-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-property: opacity;
            -o-transition-property: opacity;
            transition-property: opacity;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
        }

        .carousel-fade .carousel-item.active, .carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right {
            z-index: 1;
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            -webkit-transition: opacity 0s 0.6s;
            -o-transition: opacity 0s 0.6s;
            transition: opacity 0s 0.6s;
        }

        .carousel-control-prev, .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: 0.5;
            -webkit-transition: opacity 0.15s ease;
            -o-transition: opacity 0.15s ease;
            transition: opacity 0.15s ease;
        }

        .carousel-control-prev:hover, .carousel-control-prev:focus, .carousel-control-next:hover, .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: no-repeat 50% / 100% 100%;
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-indicators li {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            -webkit-transition: opacity 0.6s ease;
            -o-transition: opacity 0.6s ease;
            transition: opacity 0.6s ease;
        }

        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: 0.25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner-border .75s linear infinite;
            animation: spinner-border .75s linear infinite;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em;
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner-grow .75s linear infinite;
            animation: spinner-grow .75s linear infinite;
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .bg-primary {
            background-color: #007bff !important;
        }

        a.bg-primary:hover, a.bg-primary:focus, button.bg-primary:hover, button.bg-primary:focus {
            background-color: #0062cc !important;
        }

        .bg-secondary {
            background-color: #6c757d !important;
        }

        a.bg-secondary:hover, a.bg-secondary:focus, button.bg-secondary:hover, button.bg-secondary:focus {
            background-color: #545b62 !important;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        a.bg-success:hover, a.bg-success:focus, button.bg-success:hover, button.bg-success:focus {
            background-color: #1e7e34 !important;
        }

        .bg-info {
            background-color: #17a2b8 !important;
        }

        a.bg-info:hover, a.bg-info:focus, button.bg-info:hover, button.bg-info:focus {
            background-color: #117a8b !important;
        }

        .bg-warning {
            background-color: #ffc107 !important;
        }

        a.bg-warning:hover, a.bg-warning:focus, button.bg-warning:hover, button.bg-warning:focus {
            background-color: #d39e00 !important;
        }

        .bg-danger {
            background-color: #dc3545 !important;
        }

        a.bg-danger:hover, a.bg-danger:focus, button.bg-danger:hover, button.bg-danger:focus {
            background-color: #bd2130 !important;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        a.bg-light:hover, a.bg-light:focus, button.bg-light:hover, button.bg-light:focus {
            background-color: #dae0e5 !important;
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        a.bg-dark:hover, a.bg-dark:focus, button.bg-dark:hover, button.bg-dark:focus {
            background-color: #1d2124 !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .bg-transparent {
            background-color: transparent !important;
        }

        .border {
            border: 1px solid #dee2e6 !important;
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important;
        }

        .border-right {
            border-right: 1px solid #dee2e6 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .border-left {
            border-left: 1px solid #dee2e6 !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-right-0 {
            border-right: 0 !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-left-0 {
            border-left: 0 !important;
        }

        .border-primary {
            border-color: #007bff !important;
        }

        .border-secondary {
            border-color: #6c757d !important;
        }

        .border-success {
            border-color: #28a745 !important;
        }

        .border-info {
            border-color: #17a2b8 !important;
        }

        .border-warning {
            border-color: #ffc107 !important;
        }

        .border-danger {
            border-color: #dc3545 !important;
        }

        .border-light {
            border-color: #f8f9fa !important;
        }

        .border-dark {
            border-color: #343a40 !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .rounded-sm {
            border-radius: 0.2rem !important;
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        .rounded-top {
            border-top-left-radius: 0.25rem !important;
            border-top-right-radius: 0.25rem !important;
        }

        .rounded-right {
            border-top-right-radius: 0.25rem !important;
            border-bottom-right-radius: 0.25rem !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important;
        }

        .rounded-left {
            border-top-left-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important;
        }

        .rounded-lg {
            border-radius: 0.3rem !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .d-none {
            display: none !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive::before {
            display: block;
            content: "";
        }

        .embed-responsive .embed-responsive-item, .embed-responsive iframe, .embed-responsive embed, .embed-responsive object, .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .embed-responsive-21by9::before {
            padding-top: 42.85714%;
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%;
        }

        .embed-responsive-4by3::before {
            padding-top: 75%;
        }

        .embed-responsive-1by1::before {
            padding-top: 100%;
        }

        .flex-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .flex-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .justify-content-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .align-items-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .sr-only-focusable:active, .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal;
        }

        .shadow-sm {
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        }

        .shadow {
            -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }

        .shadow-lg {
            -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }

        .shadow-none {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0, 0, 0, 0);
        }

        .m-0 {
            margin: 0 !important;
        }

        .mt-0, .my-0 {
            margin-top: 0 !important;
        }

        .mr-0, .mx-0 {
            margin-right: 0 !important;
        }

        .mb-0, .my-0 {
            margin-bottom: 0 !important;
        }

        .ml-0, .mx-0 {
            margin-left: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .mt-1, .my-1 {
            margin-top: 0.25rem !important;
        }

        .mr-1, .mx-1 {
            margin-right: 0.25rem !important;
        }

        .mb-1, .my-1 {
            margin-bottom: 0.25rem !important;
        }

        .ml-1, .mx-1 {
            margin-left: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .mt-2, .my-2 {
            margin-top: 0.5rem !important;
        }

        .mr-2, .mx-2 {
            margin-right: 0.5rem !important;
        }

        .mb-2, .my-2 {
            margin-bottom: 0.5rem !important;
        }

        .ml-2, .mx-2 {
            margin-left: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .mt-3, .my-3 {
            margin-top: 1rem !important;
        }

        .mr-3, .mx-3 {
            margin-right: 1rem !important;
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }

        .ml-3, .mx-3 {
            margin-left: 1rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .mt-4, .my-4 {
            margin-top: 1.5rem !important;
        }

        .mr-4, .mx-4 {
            margin-right: 1.5rem !important;
        }

        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-4, .mx-4 {
            margin-left: 1.5rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .mt-5, .my-5 {
            margin-top: 3rem !important;
        }

        .mr-5, .mx-5 {
            margin-right: 3rem !important;
        }

        .mb-5, .my-5 {
            margin-bottom: 3rem !important;
        }

        .ml-5, .mx-5 {
            margin-left: 3rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .pt-0, .py-0 {
            padding-top: 0 !important;
        }

        .pr-0, .px-0 {
            padding-right: 0 !important;
        }

        .pb-0, .py-0 {
            padding-bottom: 0 !important;
        }

        .pl-0, .px-0 {
            padding-left: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .pt-1, .py-1 {
            padding-top: 0.25rem !important;
        }

        .pr-1, .px-1 {
            padding-right: 0.25rem !important;
        }

        .pb-1, .py-1 {
            padding-bottom: 0.25rem !important;
        }

        .pl-1, .px-1 {
            padding-left: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .pt-2, .py-2 {
            padding-top: 0.5rem !important;
        }

        .pr-2, .px-2 {
            padding-right: 0.5rem !important;
        }

        .pb-2, .py-2 {
            padding-bottom: 0.5rem !important;
        }

        .pl-2, .px-2 {
            padding-left: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .pt-3, .py-3 {
            padding-top: 1rem !important;
        }

        .pr-3, .px-3 {
            padding-right: 1rem !important;
        }

        .pb-3, .py-3 {
            padding-bottom: 1rem !important;
        }

        .pl-3, .px-3 {
            padding-left: 1rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .pt-4, .py-4 {
            padding-top: 1.5rem !important;
        }

        .pr-4, .px-4 {
            padding-right: 1.5rem !important;
        }

        .pb-4, .py-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-4, .px-4 {
            padding-left: 1.5rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .pt-5, .py-5 {
            padding-top: 3rem !important;
        }

        .pr-5, .px-5 {
            padding-right: 3rem !important;
        }

        .pb-5, .py-5 {
            padding-bottom: 3rem !important;
        }

        .pl-5, .px-5 {
            padding-left: 3rem !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .mt-n1, .my-n1 {
            margin-top: -0.25rem !important;
        }

        .mr-n1, .mx-n1 {
            margin-right: -0.25rem !important;
        }

        .mb-n1, .my-n1 {
            margin-bottom: -0.25rem !important;
        }

        .ml-n1, .mx-n1 {
            margin-left: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .mt-n2, .my-n2 {
            margin-top: -0.5rem !important;
        }

        .mr-n2, .mx-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-n2, .my-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-n2, .mx-n2 {
            margin-left: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .mt-n3, .my-n3 {
            margin-top: -1rem !important;
        }

        .mr-n3, .mx-n3 {
            margin-right: -1rem !important;
        }

        .mb-n3, .my-n3 {
            margin-bottom: -1rem !important;
        }

        .ml-n3, .mx-n3 {
            margin-left: -1rem !important;
        }

        .m-n4 {
            margin: -1.5rem !important;
        }

        .mt-n4, .my-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-n4, .mx-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-n4, .my-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-n4, .mx-n4 {
            margin-left: -1.5rem !important;
        }

        .m-n5 {
            margin: -3rem !important;
        }

        .mt-n5, .my-n5 {
            margin-top: -3rem !important;
        }

        .mr-n5, .mx-n5 {
            margin-right: -3rem !important;
        }

        .mb-n5, .my-n5 {
            margin-bottom: -3rem !important;
        }

        .ml-n5, .mx-n5 {
            margin-left: -3rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mt-auto, .my-auto {
            margin-top: auto !important;
        }

        .mr-auto, .mx-auto {
            margin-right: auto !important;
        }

        .mb-auto, .my-auto {
            margin-bottom: auto !important;
        }

        .ml-auto, .mx-auto {
            margin-left: auto !important;
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
        }

        .text-justify {
            text-align: justify !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        .text-truncate {
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .font-weight-light {
            font-weight: 300 !important;
        }

        .font-weight-lighter {
            font-weight: lighter !important;
        }

        .font-weight-normal {
            font-weight: 400 !important;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .font-weight-bolder {
            font-weight: bolder !important;
        }

        .font-italic {
            font-style: italic !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-primary {
            color: #007bff !important;
        }

        a.text-primary:hover, a.text-primary:focus {
            color: #0056b3 !important;
        }

        .text-secondary {
            color: #6c757d !important;
        }

        a.text-secondary:hover, a.text-secondary:focus {
            color: #494f54 !important;
        }

        .text-success {
            color: #28a745 !important;
        }

        a.text-success:hover, a.text-success:focus {
            color: #19692c !important;
        }

        .text-info {
            color: #17a2b8 !important;
        }

        a.text-info:hover, a.text-info:focus {
            color: #0f6674 !important;
        }

        .text-warning {
            color: #ffc107 !important;
        }

        a.text-warning:hover, a.text-warning:focus {
            color: #ba8b00 !important;
        }

        .text-danger {
            color: #dc3545 !important;
        }

        a.text-danger:hover, a.text-danger:focus {
            color: #a71d2a !important;
        }

        .text-light {
            color: #f8f9fa !important;
        }

        a.text-light:hover, a.text-light:focus {
            color: #cbd3da !important;
        }

        .text-dark {
            color: #343a40 !important;
        }

        a.text-dark:hover, a.text-dark:focus {
            color: #121416 !important;
        }

        .text-body {
            color: #212529 !important;
        }

        .text-muted {
            color: #6c757d !important;
        }

        .text-black-50 {
            color: rgba(0, 0, 0, 0.5) !important;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-break {
            word-break: break-word !important;
            overflow-wrap: break-word !important;
        }

        .text-reset {
            color: inherit !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        .select2-container {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            position: relative;
            vertical-align: middle;
        }

        .select2-container .select2-selection--single {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 28px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 8px;
            padding-right: 20px;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .select2-container .select2-selection--single .select2-selection__clear {
            position: relative;
        }

        .select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
            padding-right: 8px;
            padding-left: 20px;
        }

        .select2-container .select2-selection--multiple {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            min-height: 32px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        .select2-container .select2-selection--multiple .select2-selection__rendered {
            display: inline-block;
            overflow: hidden;
            padding-left: 8px;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .select2-container .select2-search--inline {
            float: left;
        }

        .select2-container .select2-search--inline .select2-search__field {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            border: none;
            font-size: 100%;
            margin-top: 5px;
            padding: 0;
        }

        .select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
            -webkit-appearance: none;
        }

        .select2-dropdown {
            background-color: white;
            border: 1px solid #aaa;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            z-index: 1051;
        }

        .select2-results {
            display: block;
        }

        .select2-results__options {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .select2-results__option {
            padding: 6px;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        .select2-results__option--selectable {
            cursor: pointer;
        }

        .select2-container--open .select2-dropdown {
            left: 0;
        }

        .select2-container--open .select2-dropdown--above {
            border-bottom: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .select2-container--open .select2-dropdown--below {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .select2-search--dropdown {
            display: block;
            padding: 4px;
        }

        .select2-search--dropdown .select2-search__field {
            padding: 4px;
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
            -webkit-appearance: none;
        }

        .select2-search--dropdown.select2-search--hide {
            display: none;
        }

        .select2-close-mask {
            border: 0;
            margin: 0;
            padding: 0;
            display: block;
            position: fixed;
            left: 0;
            top: 0;
            min-height: 100%;
            min-width: 100%;
            height: auto;
            width: auto;
            opacity: 0;
            z-index: 99;
            background-color: #fff;
            filter: alpha(opacity=0);
        }

        .select2-hidden-accessible {
            border: 0 !important;
            clip: rect(0 0 0 0) !important;
            -webkit-clip-path: inset(50%) !important;
            clip-path: inset(50%) !important;
            height: 1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            width: 1px !important;
            white-space: nowrap !important;
        }

        .select2-container--default .select2-selection--single {
            background-color: #f5f5f5;
            border: 1px solid #005daa;
            border-radius: 4px;
            -webkit-box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            height: 45px;
            padding: 10px 8px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 28px;
        }

        .select2-container--default .select2-selection--single .select2-selection__clear {
            cursor: pointer;
            float: right;
            font-weight: bold;
        }

        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #999;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 30px;
            position: absolute;
            top: 50%;
            margin-top: -15px;
            right: 1px;
            width: 25px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            left: 50%;
            margin-left: -4px;
            margin-top: -2px;
            position: absolute;
            top: 50%;
            width: 0;
        }

        .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
            float: left;
        }

        .select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
            left: 1px;
            right: auto;
        }

        .select2-container--default.select2-container--disabled .select2-selection--single {
            background-color: #eee;
            cursor: default;
        }

        .select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
            display: none;
        }

        .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #888 transparent;
            border-width: 0 4px 5px 4px;
        }

        .select2-container--default .select2-selection--multiple {
            background-color: white;
            border: 1px solid #aaa;
            border-radius: 4px;
            cursor: text;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            list-style: none;
            margin: 0;
            padding: 0 5px;
            width: 100%;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
            list-style: none;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__clear {
            cursor: pointer;
            float: right;
            font-weight: bold;
            margin-top: 5px;
            margin-right: 10px;
            padding: 1px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #e4e4e4;
            border: 1px solid #aaa;
            border-radius: 4px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #999;
            cursor: pointer;
            display: inline-block;
            font-weight: bold;
            margin-right: 2px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
            color: #333;
        }

        .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice, .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline {
            float: right;
        }

        .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
            margin-left: 5px;
            margin-right: auto;
        }

        .select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
            margin-left: 2px;
            margin-right: auto;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid black 1px;
            outline: 0;
        }

        .select2-container--default.select2-container--disabled .select2-selection--multiple {
            background-color: #eee;
            cursor: default;
        }

        .select2-container--default.select2-container--disabled .select2-selection__choice__remove {
            display: none;
        }

        .select2-container--default.select2-container--open.select2-container--above .select2-selection--single, .select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #aaa;
        }

        .select2-container--default .select2-search--inline .select2-search__field {
            background: transparent;
            border: none;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-appearance: textfield;
        }

        .select2-container--default .select2-results > .select2-results__options {
            max-height: 200px;
            overflow-y: auto;
        }

        .select2-container--default .select2-results__option .select2-results__option {
            padding-left: 1em;
        }

        .select2-container--default .select2-results__option .select2-results__option .select2-results__group {
            padding-left: 0;
        }

        .select2-container--default .select2-results__option .select2-results__option .select2-results__option {
            margin-left: -1em;
            padding-left: 2em;
        }

        .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
            margin-left: -2em;
            padding-left: 3em;
        }

        .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
            margin-left: -3em;
            padding-left: 4em;
        }

        .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
            margin-left: -4em;
            padding-left: 5em;
        }

        .select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
            margin-left: -5em;
            padding-left: 6em;
        }

        .select2-container--default .select2-results__option--group {
            padding: 0;
        }

        .select2-container--default .select2-results__option--disabled {
            color: #999;
        }

        .select2-container--default .select2-results__option--selected {
            background-color: #ddd;
        }

        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
            background-color: #5897fb;
            color: white;
        }

        .select2-container--default .select2-results__group {
            cursor: default;
            display: block;
            padding: 6px;
        }

        .select2-container--classic .select2-selection--single {
            background-color: #f7f7f7;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            outline: 0;
            background-image: -o-linear-gradient(top, white 50%, #eeeeee 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, white), to(#eeeeee));
            background-image: linear-gradient(to bottom, white 50%, #eeeeee 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
        }

        .select2-container--classic .select2-selection--single:focus {
            border: 1px solid #5897fb;
        }

        .select2-container--classic .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 28px;
        }

        .select2-container--classic .select2-selection--single .select2-selection__clear {
            cursor: pointer;
            float: right;
            font-weight: bold;
            margin-right: 10px;
        }

        .select2-container--classic .select2-selection--single .select2-selection__placeholder {
            color: #999;
        }

        .select2-container--classic .select2-selection--single .select2-selection__arrow {
            background-color: #ddd;
            border: none;
            border-left: 1px solid #dee2e6;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            height: 26px;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 20px;
            background-image: -o-linear-gradient(top, #eeeeee 50%, #cccccc 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #eeeeee), to(#cccccc));
            background-image: linear-gradient(to bottom, #eeeeee 50%, #cccccc 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFCCCCCC', GradientType=0);
        }

        .select2-container--classic .select2-selection--single .select2-selection__arrow b {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            left: 50%;
            margin-left: -4px;
            margin-top: -2px;
            position: absolute;
            top: 50%;
            width: 0;
        }

        .select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear {
            float: left;
        }

        .select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
            border: none;
            border-right: 1px solid #dee2e6;
            border-radius: 0;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            left: 1px;
            right: auto;
        }

        .select2-container--classic.select2-container--open .select2-selection--single {
            border: 1px solid #5897fb;
        }

        .select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
            background: transparent;
            border: none;
        }

        .select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #888 transparent;
            border-width: 0 4px 5px 4px;
        }

        .select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            background-image: -o-linear-gradient(top, white 0%, #eeeeee 50%);
            background-image: -webkit-gradient(linear, left top, left bottom, from(white), color-stop(50%, #eeeeee));
            background-image: linear-gradient(to bottom, white 0%, #eeeeee 50%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
        }

        .select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
            border-bottom: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            background-image: -o-linear-gradient(top, #eeeeee 50%, white 100%);
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #eeeeee), to(white));
            background-image: linear-gradient(to bottom, #eeeeee 50%, white 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFFFFFFF', GradientType=0);
        }

        .select2-container--classic .select2-selection--multiple {
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            cursor: text;
            outline: 0;
        }

        .select2-container--classic .select2-selection--multiple:focus {
            border: 1px solid #5897fb;
        }

        .select2-container--classic .select2-selection--multiple .select2-selection__rendered {
            list-style: none;
            margin: 0;
            padding: 0 5px;
        }

        .select2-container--classic .select2-selection--multiple .select2-selection__clear {
            display: none;
        }

        .select2-container--classic .select2-selection--multiple .select2-selection__choice {
            background-color: #e4e4e4;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }

        .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
            color: #888;
            cursor: pointer;
            display: inline-block;
            font-weight: bold;
            margin-right: 2px;
        }

        .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
            color: #555;
        }

        .select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
            float: right;
            margin-left: 5px;
            margin-right: auto;
        }

        .select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
            margin-left: 2px;
            margin-right: auto;
        }

        .select2-container--classic.select2-container--open .select2-selection--multiple {
            border: 1px solid #5897fb;
        }

        .select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
            border-bottom: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .select2-container--classic .select2-search--dropdown .select2-search__field {
            border: 1px solid #dee2e6;
            outline: 0;
        }

        .select2-container--classic .select2-search--inline .select2-search__field {
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .select2-container--classic .select2-dropdown {
            background-color: white;
            border: 1px solid transparent;
        }

        .select2-container--classic .select2-dropdown--above {
            border-bottom: none;
        }

        .select2-container--classic .select2-dropdown--below {
            border-top: none;
        }

        .select2-container--classic .select2-results > .select2-results__options {
            max-height: 200px;
            overflow-y: auto;
        }

        .select2-container--classic .select2-results__option--group {
            padding: 0;
        }

        .select2-container--classic .select2-results__option--disabled {
            color: grey;
        }

        .select2-container--classic .select2-results__option--highlighted.select2-results__option--selectable {
            background-color: #3875d7;
            color: white;
        }

        .select2-container--classic .select2-results__group {
            cursor: default;
            display: block;
            padding: 6px;
        }

        .select2-container--classic.select2-container--open .select2-dropdown {
            border-color: #5897fb;
        }

        body {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 14px;
            color: #333333;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Crimson Text", serif;
            font-weight: 700;
        }

        h1.body-text, h2.body-text, h3.body-text, h4.body-text, h5.body-text, h6.body-text {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 300;
        }

        h1 {
            font-size: 1.25rem;
            position: relative;
            line-height: 100%;
            font-weight: 500;
        }

        h1.light {
            font-weight: 400;
        }

        h1.notice {
            font-size: 15rem;
            margin-bottom: 0;
        }

        h1.cn {
            font-family: "Noto Serif SC";
            font-weight: 900;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 500;
        }

        h2.regular {
            font-weight: 300;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
        }

        h2.regular.semi {
            font-weight: 500;
        }

        h2.semibold {
            font-weight: 500;
        }

        h2.cn {
            font-family: "Noto Serif SC";
            font-weight: 900;
        }

        h3 {
            font-size: 1.375rem;
        }

        h3.body-text {
            font-size: 1.875rem;
        }

        h3.cn {
            font-family: "Noto Serif SC";
            font-weight: 900;
        }

        h3.regular {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
        }

        h3.regular.help-heading {
            font-weight: 700;
            font-size: 1.6875rem;
        }

        h3.thin {
            font-weight: 300;
        }

        h4 {
            font-size: 1.125rem;
        }

        h4.body-text {
            font-size: 1.375rem;
        }

        h4.regular {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
        }

        h4.cn {
            font-family: "Noto Serif SC";
            font-weight: 900;
        }

        h5 {
            font-size: 1rem;
        }

        h5.cn {
            font-family: "Noto Sans SC";
        }

        h6 {
            font-size: 0.9rem;
        }

        h6.cn {
            font-family: "Noto Sans SC";
        }

        p {
            font-weight: 400;
            line-height: 120%;
            font-size: 1rem;
        }

        p.cn {
            font-family: "Noto Sans SC";
        }

        p.bold-text {
            font-weight: 700;
        }

        p.semi-text {
            font-weight: 500;
        }

        p.primary {
            color: #005daa;
        }

        p.error-text {
            color: #ef4123;
            font-size: 0 0.875rem;
        }

        p.strikethrough {
            text-decoration: line-through;
        }

        p.link-cat {
            text-transform: uppercase;
            font-size: 1.125rem;
            font-weight: 700;
        }

        p.small-txt {
            font-size: 0.875rem;
        }

        p.usual-price {
            font-size: 1rem;
            text-decoration: line-through;
            color: #6c757d;
            text-align: center;
            margin-bottom: 8px;
        }

        p.note {
            color: #6c757d;
            width: 100%;
            text-align: center;
            padding: 0 5%;
            min-height: auto;
        }

        p.term {
            font-size: 0.8rem;
        }

        p.current {
            font-size: 1.25rem;
            text-align: center;
            display: none;
        }

        p.inactive {
            opacity: 0;
            display: none;
        }

        p.option-label {
            font-weight: 500;
        }

        p.help-text {
            color: #0a9fc2;
            display: inline-block;
            margin: 0;
            width: 80%;
        }

        p.overview-total {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        p.cta-secondary {
            border-bottom: solid 1px #333333;
            font-family: "Crimson Text", serif;
            font-weight: bold;
            font-size: 1rem;
            padding: 0;
            line-height: 0.95;
            margin: 25px 0;
            display: inline-block;
        }

        p.subtext {
            font-size: 1rem;
            line-height: 105%;
        }

        p.light-grey {
            color: #848484;
        }

        span.search-term {
            font-weight: bold;
        }

        span.search-string {
            font-style: italic;
        }

        a {
            font-weight: 400;
            color: #333333;
            -webkit-transition: opacity 300ms ease-in-out;
            -o-transition: opacity 300ms ease-in-out;
            transition: opacity 300ms ease-in-out;
        }

        a.primary {
            color: #005daa;
        }

        a:hover {
            color: #005daa;
            text-decoration: none;
        }

        a.cta-secondary {
            border-bottom: solid 1px #f5f5f5;
            font-family: "Crimson Text", serif;
            font-weight: bold;
            font-size: 1rem;
            padding: 0;
            line-height: 0.5rem;
            margin: 0;
        }

        a.cta-secondary.primary {
            color: #1c1c45;
            border-color: #1c1c45;
        }

        a.download {
            margin-top: 25px;
            display: inline-block;
            font-weight: 500;
            text-decoration: underline;
        }

        a.app-download-cta {
            height: 35px;
            width: auto;
            display: inline-block;
            margin-right: 4px;
        }

        a.app-download-cta img {
            width: auto;
            height: 25px;
        }

        header {
            position: relative;
            padding: 0 !important;
            width: 100%;
            z-index: 1250;
            -webkit-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
            background-color: #fff;
            -webkit-box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        header.onScroll {
            background-color: #f5f5f5;
            -webkit-box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            position: fixed;
            top: 0;
        }

        header .top-head {
            padding: 10px 25px 0;
        }

        header .logo-container {
            width: 45px;
            height: auto;
        }

        header .logo-container img {
            width: 100%;
        }

        header .top-navi {
            text-align: right;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-right: 0;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        header .top-navi .top-menu {
            text-align: right;
            display: none;
        }

        header .top-navi .top-menu li {
            list-style: none;
            display: inline-block;
            margin: 2px 8px;
            padding: 0 6px;
        }

        header .top-navi .top-menu li a {
            font-size: 1rem;
            color: #333333;
        }

        header .top-navi .top-menu li a:hover {
            color: #005daa;
        }

        header .top-navi .lang-switcher {
            display: inline-block;
            position: relative;
            margin: 0 10px;
            padding-bottom: 4px;
            text-align: center;
        }

        header .top-navi .lang-switcher label {
            display: inline-block;
            margin-bottom: 9px;
        }

        header .top-navi .lang-switcher label select {
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            background-color: transparent;
            -moz-text-align-last: center;
            text-align-last: center;
            padding: 2px 20px 5px 0;
            color: #333333;
            border: 0;
            font-size: 1rem;
            display: block;
            border-radius: 0;
            border-bottom: 0;
            background-image: url("../images/icons/down-arr-tri-solid.svg");
            background-size: 10px;
            background-position: center right 5px;
            background-repeat: no-repeat;
        }

        header .top-navi .navi-menu {
            text-align: right;
            margin-bottom: 10px;
            display: inline-block;
            padding-left: 0;
        }

        header .top-navi .navi-menu li.nav-item {
            list-style: none;
            display: inline-block;
            margin: 0 8px 0 0;
            padding: 0;
        }

        header .top-navi .navi-menu li.nav-item .prompt {
            display: none;
            position: absolute;
            background-color: #f5f5f5;
            -webkit-box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
            box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
            padding: 15px 11px;
            width: 230px;
            top: 55px;
            right: 0;
            margin-left: -150px;
            text-align: left;
            z-index: 2000;
        }

        header .top-navi .navi-menu li.nav-item .prompt p {
            display: inline-block;
            margin: 0;
        }

        header .top-navi .navi-menu li.nav-item .prompt p.option-label {
            font-weight: 500;
        }

        header .top-navi .navi-menu li.nav-item .prompt a {
            display: inline-block;
            font-size: 1rem;
            text-decoration: underline;
            margin: 0;
        }

        header .top-navi .navi-menu li.nav-item .prompt .dismiss {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 20px;
            height: 20px;
            background-color: #bdbdbd;
            background-image: url("../images/icons/close-icon-white.svg");
            padding: 4px;
            display: block;
            border-radius: 50%;
            background-size: 10px;
            background-repeat: no-repeat;
            background-position: center;
            cursor: pointer;
            content: '';
        }

        header .top-navi .navi-menu li.nav-item a {
            display: block;
            color: #333333;
            font-size: 1rem;
        }

        header .top-navi .navi-menu li.nav-item a span {
            display: none;
        }

        header .top-navi .navi-menu li.nav-item a span.small-txt {
            font-size: 0.9375rem;
            margin-top: -4px;
            display: none;
        }

        header .top-navi .navi-menu li.nav-item a span.small-txt.loggedin {
            color: #005daa;
        }

        header .top-navi .navi-menu li.nav-item a img {
            width: 30px;
            display: inline-block;
            margin-top: -5px;
        }

        header .top-navi .navi-menu li.nav-item .account-nav {
            background-color: #f5f5f5;
            padding: 16px;
            position: fixed;
            right: -100%;
            width: 100%;
            top: 54px;
            margin-top: 0px;
            text-align: left;
            -webkit-box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
            box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }

        header .top-navi .navi-menu li.nav-item .account-nav.show {
            right: 0%;
        }

        header .top-navi .navi-menu li.nav-item .account-nav ul {
            padding: 0;
            margin: 0;
        }

        header .top-navi .navi-menu li.nav-item .account-nav ul li {
            list-style: none;
        }

        header .top-navi .navi-menu li.nav-item .account-nav ul li a {
            font-size: 1rem;
            padding: 2px 0;
            display: block;
        }

        header .top-navi .navi-menu li.nav-item .account-nav ul li a.bold {
            font-weight: 700;
        }

        header .top-navi .navi-menu li.nav-item .account-nav ul li p.current {
            display: block;
            text-align: left;
            font-size: 1rem;
            font-weight: 500;
            margin: 0;
            padding: 2px 0;
        }

        header .top-navi .navi-menu li.nav-item .account-nav ul.child-item {
            padding: 8px 0;
            border-top: solid 1px #bdbdbd;
            border-bottom: solid 1px #bdbdbd;
        }

        header .top-navi .nav-drop {
            position: fixed;
            z-index: 1300;
            right: -120vw;
            top: 0;
            background-color: #f5f5f5;
            -webkit-box-shadow: -10px 0 50px rgba(28, 28, 69, 0.25);
            box-shadow: -10px 0 50px rgba(28, 28, 69, 0.25);
            color: #f5f5f5;
            padding: 2vw 2vh;
            width: 100vw;
            height: 100vh;
            padding: 20px 0;
            -webkit-transition: right 400ms ease-in-out;
            -o-transition: right 400ms ease-in-out;
            transition: right 400ms ease-in-out;
            overflow-y: auto;
        }

        header .top-navi .nav-drop.active {
            right: 0;
        }

        header .top-navi .nav-drop ul {
            text-align: left;
            margin: 0;
            padding: 0;
        }

        header .top-navi .nav-drop ul.in-navi-menu {
            text-align: right;
            margin: 0 15px;
        }

        header .top-navi .nav-drop ul.in-navi-menu li {
            list-style: none;
            display: inline-block;
            margin: 0 8px;
            padding: 0;
        }

        header .top-navi .nav-drop ul.in-navi-menu li.close-menu {
            padding: 3px;
        }

        header .top-navi .nav-drop ul.in-navi-menu li a {
            display: block;
            color: #333333;
        }

        header .top-navi .nav-drop ul.in-navi-menu li a img {
            width: 1.8rem;
        }

        header .top-navi .nav-drop ul.main-nav-menu {
            padding: 21px;
            -webkit-columns: 1;
            -moz-columns: 1;
            columns: 1;
            -webkit-column-fill: auto;
            -moz-column-fill: auto;
            column-fill: auto;
            height: auto;
        }

        header .top-navi .nav-drop ul.main-nav-menu li {
            list-style: none;
            text-align: left;
            margin: 8px 5px;
            font-size: 1.5rem;
            line-height: 1.2rem;
            display: block;
        }

        header .top-navi .nav-drop ul.main-nav-menu li a {
            -webkit-column-break-inside: avoid;
            -moz-column-break-inside: avoid;
            break-inside: avoid;
            color: #333333;
            display: block;
            margin: 5px 0;
            padding: 10px 0;
        }

        header .top-navi .nav-drop ul.main-nav-menu li a:hover {
            background-color: rgba(0, 0, 0, 0.15);
        }

        header .top-navi .nav-drop ul.main-nav-menu li.got-child {
            display: block;
        }

        header .top-navi .nav-drop ul.main-nav-menu li.got-child a {
            line-height: 1.8rem;
            background-image: url("../images/icons/ArrowDown.svg");
            background-position: 95% center;
            background-size: 30px;
            background-repeat: no-repeat;
            border-bottom: solid 1px #333333;
            -webkit-transition: background-image 200ms ease-in-out;
            -o-transition: background-image 200ms ease-in-out;
            transition: background-image 200ms ease-in-out;
        }

        header .top-navi .nav-drop ul.main-nav-menu li.got-child a.active {
            background-image: url("../images/icons/ArrowUp-white.svg");
        }

        header .top-navi .nav-drop ul.main-nav-menu li > ul.second-lvl-nav {
            display: none;
        }

        header .top-navi .nav-drop ul.main-nav-menu li > ul.second-lvl-nav li {
            padding: 0;
            margin: 0;
            font-size: 1.1rem;
        }

        header .top-navi .nav-drop ul.main-nav-menu li > ul.second-lvl-nav li a {
            border: 0;
            display: block;
            background-image: none;
            line-height: 1rem;
        }

        header .top-navi .nav-drop ul.main-nav-menu li > ul.second-lvl-nav li p {
            font-weight: 700;
            padding: 0;
            margin: 15px 0 10px;
            cursor: pointer;
        }

        header .top-navi .nav-drop ul.main-nav-menu li > ul.second-lvl-nav li > ul.third-lvl-nav li a {
            line-height: 1.4rem;
            background-image: none;
            padding: 2px 0;
        }

        footer {
            z-index: -1;
            padding: 25px;
            margin: auto;
            background-color: #333333;
            color: #f5f5f5;
        }

        footer .footer-container {
            max-width: 1440px !important;
            margin: auto;
            width: 100%;
        }

        footer .secure-lock {
            -webkit-box-pack: left;
            -ms-flex-pack: left;
            justify-content: left;
            color: #fff;
        }

        footer .logo-container {
            width: 100%;
            height: auto;
            text-align: right;
            float: right;
        }

        footer .logo-container img {
            width: 100%;
        }

        footer .footer-navi {
            height: auto;
        }

        footer .footer-navi .contact-details {
            font-size: 1.125rem;
        }

        footer .footer-navi .contact-details p {
            margin: 0;
            line-height: 1.2;
        }

        footer .footer-navi .contact-details a {
            margin: 1.2rem 0;
            display: inline-block;
            color: #0088f7;
        }

        footer .footer-navi .contact-details a.mob-only {
            margin: 0;
        }

        footer .footer-navi ul {
            padding: 0;
            margin: 0;
            display: block;
        }

        footer .footer-navi ul.footer-menu {
            padding: 0;
            margin: 0 0 15px;
            list-style: none;
        }

        footer .footer-navi ul.footer-menu li {
            padding: 0;
            margin: 0;
        }

        footer .footer-navi ul.footer-menu li > ul {
            list-style: none;
            padding: 0;
            margin: 0;
            margin-top: 15px;
        }

        footer .footer-navi ul.footer-menu li > ul li {
            padding: 0;
            margin: 0;
        }

        footer .footer-navi ul.footer-menu li > ul li a {
            color: #f5f5f5;
            font-size: 1.125rem;
        }

        footer .footer-navi ul.footer-menu li > ul.column {
            columns: 2;
            -moz-columns: 2;
            -webkit-columns: 2;
            -webkit-column-fill: auto;
            -moz-column-fill: auto;
            column-fill: auto;
            height: auto;
            max-height: 160px;
        }

        footer .newspaper-links {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            display: block;
        }

        footer .company-links {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3;
        }

        footer .company-links .footer-navi {
            border-top: solid 1px #f5f5f5;
            padding-top: 15px;
        }

        footer .newsletter-footer {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            margin-bottom: 25px;
        }

        footer .newsletter-footer .form-style input {
            width: 80%;
            max-width: 310px;
            float: left;
            border: 0;
        }

        footer .newsletter-footer .form-style button {
            width: 20%;
            max-width: 90px;
            float: left;
            border: 0;
            background-color: #f5f5f5;
            font-family: "Crimson Text", serif;
            font-weight: 700;
        }

        footer .copy-container {
            padding-top: 15px;
        }

        footer .copy {
            text-align: left;
            font-size: 0.875rem;
        }

        .cc-picker {
            overflow: hidden;
            display: inline-block;
            cursor: default;
            padding-right: 5px;
            vertical-align: middle;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .cc-picker-flag {
            width: 16px;
            height: 11px;
            margin-right: 7px;
            display: inline-block;
            background: url("../images/country/flags.png");
            position: relative;
            top: 1px;
        }

        .cc-picker-flag.zw {
            background-position: 0 0;
        }

        .cc-picker-flag.zm {
            background-position: -16px 0;
        }

        .cc-picker-flag.za {
            background-position: 0 -11px;
        }

        .cc-picker-flag.yt {
            background-position: -16px -11px;
        }

        .cc-picker-flag.ye {
            background-position: -32px 0;
        }

        .cc-picker-flag.ws {
            background-position: -32px -11px;
        }

        .cc-picker-flag.wf {
            background-position: 0 -22px;
        }

        .cc-picker-flag.vu {
            background-position: -32px -22px;
        }

        .cc-picker-flag.vn {
            background-position: 0 -33px;
        }

        .cc-picker-flag.vi {
            background-position: -16px -33px;
        }

        .cc-picker-flag.vg {
            background-position: -32px -33px;
        }

        .cc-picker-flag.ve {
            background-position: -48px 0;
        }

        .cc-picker-flag.vc {
            background-position: -48px -11px;
        }

        .cc-picker-flag.va {
            background-position: -48px -22px;
        }

        .cc-picker-flag.uz {
            background-position: -48px -33px;
        }

        .cc-picker-flag.uy {
            background-position: 0 -44px;
        }

        .cc-picker-flag.us {
            background-position: -16px -44px;
        }

        .cc-picker-flag.um {
            background-position: -16px -44px;
        }

        .cc-picker-flag.ug {
            background-position: -32px -44px;
        }

        .cc-picker-flag.ua {
            background-position: -48px -44px;
        }

        .cc-picker-flag.tz {
            background-position: -64px 0;
        }

        .cc-picker-flag.tw {
            background-position: -64px -11px;
        }

        .cc-picker-flag.tv {
            background-position: -64px -22px;
        }

        .cc-picker-flag.tt {
            background-position: -64px -33px;
        }

        .cc-picker-flag.tr {
            background-position: -64px -44px;
        }

        .cc-picker-flag.to {
            background-position: 0 -55px;
        }

        .cc-picker-flag.tn {
            background-position: -16px -55px;
        }

        .cc-picker-flag.tm {
            background-position: -32px -55px;
        }

        .cc-picker-flag.tl {
            background-position: -48px -55px;
        }

        .cc-picker-flag.tk {
            background-position: -64px -55px;
        }

        .cc-picker-flag.tj {
            background-position: 0 -66px;
        }

        .cc-picker-flag.th {
            background-position: -16px -66px;
        }

        .cc-picker-flag.tg {
            background-position: -32px -66px;
        }

        .cc-picker-flag.tf {
            background-position: -48px -66px;
        }

        .cc-picker-flag.td {
            background-position: -64px -66px;
        }

        .cc-picker-flag.tc {
            background-position: -80px 0;
        }

        .cc-picker-flag.sz {
            background-position: -80px -11px;
        }

        .cc-picker-flag.sy {
            background-position: -80px -22px;
        }

        .cc-picker-flag.sx {
            background-position: -80px -33px;
        }

        .cc-picker-flag.sv {
            background-position: -80px -44px;
        }

        .cc-picker-flag.st {
            background-position: -80px -55px;
        }

        .cc-picker-flag.ss {
            background-position: -80px -66px;
        }

        .cc-picker-flag.sr {
            background-position: 0 -77px;
        }

        .cc-picker-flag.so {
            background-position: -16px -77px;
        }

        .cc-picker-flag.sn {
            background-position: -32px -77px;
        }

        .cc-picker-flag.sm {
            background-position: -48px -77px;
        }

        .cc-picker-flag.sl {
            background-position: -64px -77px;
        }

        .cc-picker-flag.sk {
            background-position: -80px -77px;
        }

        .cc-picker-flag.si {
            background-position: -96px 0;
        }

        .cc-picker-flag.sh {
            background-position: -96px -11px;
        }

        .cc-picker-flag.sg {
            background-position: -96px -22px;
        }

        .cc-picker-flag.se {
            background-position: -96px -33px;
        }

        .cc-picker-flag.sd {
            background-position: -96px -44px;
        }

        .cc-picker-flag.sc {
            background-position: -96px -66px;
        }

        .cc-picker-flag.sb {
            background-position: -96px -77px;
        }

        .cc-picker-flag.sa {
            background-position: 0 -88px;
        }

        .cc-picker-flag.rw {
            background-position: -16px -88px;
        }

        .cc-picker-flag.ru {
            background-position: -32px -88px;
        }

        .cc-picker-flag.rs {
            background-position: -48px -88px;
        }

        .cc-picker-flag.ro {
            background-position: -64px -88px;
        }

        .cc-picker-flag.qa {
            background-position: -80px -88px;
        }

        .cc-picker-flag.py {
            background-position: -96px -88px;
        }

        .cc-picker-flag.pw {
            background-position: 0 -99px;
        }

        .cc-picker-flag.pt {
            background-position: -16px -99px;
        }

        .cc-picker-flag.ps {
            background-position: -32px -99px;
        }

        .cc-picker-flag.pr {
            background-position: -48px -99px;
        }

        .cc-picker-flag.pn {
            background-position: -64px -99px;
        }

        .cc-picker-flag.pm {
            background-position: -80px -99px;
        }

        .cc-picker-flag.pl {
            background-position: -96px -99px;
        }

        .cc-picker-flag.pk {
            background-position: -112px 0;
        }

        .cc-picker-flag.ph {
            background-position: -112px -11px;
        }

        .cc-picker-flag.pg {
            background-position: -112px -22px;
        }

        .cc-picker-flag.pf {
            background-position: -112px -33px;
        }

        .cc-picker-flag.pe {
            background-position: -112px -44px;
        }

        .cc-picker-flag.pa {
            background-position: -112px -55px;
        }

        .cc-picker-flag.om {
            background-position: -112px -66px;
        }

        .cc-picker-flag.nz {
            background-position: -112px -77px;
        }

        .cc-picker-flag.nu {
            background-position: -112px -88px;
        }

        .cc-picker-flag.nr {
            background-position: -112px -99px;
        }

        .cc-picker-flag.no {
            background-position: 0 -110px;
        }

        .cc-picker-flag.bv {
            background-position: 0 -110px;
        }

        .cc-picker-flag.sj {
            background-position: 0 -110px;
        }

        .cc-picker-flag.nl {
            background-position: -16px -110px;
        }

        .cc-picker-flag.ni {
            background-position: -32px -110px;
        }

        .cc-picker-flag.ng {
            background-position: -48px -110px;
        }

        .cc-picker-flag.nf {
            background-position: -64px -110px;
        }

        .cc-picker-flag.ne {
            background-position: -80px -110px;
        }

        .cc-picker-flag.nc {
            background-position: -96px -110px;
        }

        .cc-picker-flag.na {
            background-position: -112px -110px;
        }

        .cc-picker-flag.mz {
            background-position: -128px 0;
        }

        .cc-picker-flag.my {
            background-position: -128px -11px;
        }

        .cc-picker-flag.mx {
            background-position: -128px -22px;
        }

        .cc-picker-flag.mw {
            background-position: -128px -33px;
        }

        .cc-picker-flag.mv {
            background-position: -128px -44px;
        }

        .cc-picker-flag.mu {
            background-position: -128px -55px;
        }

        .cc-picker-flag.mt {
            background-position: -128px -66px;
        }

        .cc-picker-flag.ms {
            background-position: -128px -77px;
        }

        .cc-picker-flag.mr {
            background-position: -128px -88px;
        }

        .cc-picker-flag.mq {
            background-position: -128px -99px;
        }

        .cc-picker-flag.mp {
            background-position: -128px -110px;
        }

        .cc-picker-flag.mo {
            background-position: 0 -121px;
        }

        .cc-picker-flag.mn {
            background-position: -16px -121px;
        }

        .cc-picker-flag.mm {
            background-position: -32px -121px;
        }

        .cc-picker-flag.ml {
            background-position: -48px -121px;
        }

        .cc-picker-flag.mk {
            background-position: -64px -121px;
        }

        .cc-picker-flag.mh {
            background-position: -80px -121px;
        }

        .cc-picker-flag.mg {
            background-position: -96px -121px;
        }

        .cc-picker-flag.me {
            background-position: 0 -132px;
        }

        .cc-picker-flag.md {
            background-position: -112px -121px;
        }

        .cc-picker-flag.mc {
            background-position: -128px -121px;
        }

        .cc-picker-flag.ma {
            background-position: -16px -132px;
        }

        .cc-picker-flag.ly {
            background-position: -32px -132px;
        }

        .cc-picker-flag.lv {
            background-position: -48px -132px;
        }

        .cc-picker-flag.lu {
            background-position: -64px -132px;
        }

        .cc-picker-flag.lt {
            background-position: -80px -132px;
        }

        .cc-picker-flag.ls {
            background-position: -96px -132px;
        }

        .cc-picker-flag.lr {
            background-position: -112px -132px;
        }

        .cc-picker-flag.lk {
            background-position: -128px -132px;
        }

        .cc-picker-flag.li {
            background-position: -144px 0;
        }

        .cc-picker-flag.lc {
            background-position: -144px -11px;
        }

        .cc-picker-flag.lb {
            background-position: -144px -22px;
        }

        .cc-picker-flag.la {
            background-position: -144px -33px;
        }

        .cc-picker-flag.kz {
            background-position: -144px -44px;
        }

        .cc-picker-flag.ky {
            background-position: -144px -55px;
        }

        .cc-picker-flag.kw {
            background-position: -144px -66px;
        }

        .cc-picker-flag.kr {
            background-position: -144px -77px;
        }

        .cc-picker-flag.kp {
            background-position: -144px -88px;
        }

        .cc-picker-flag.kn {
            background-position: -144px -99px;
        }

        .cc-picker-flag.km {
            background-position: -144px -110px;
        }

        .cc-picker-flag.ki {
            background-position: -144px -121px;
        }

        .cc-picker-flag.kh {
            background-position: -144px -132px;
        }

        .cc-picker-flag.kg {
            background-position: 0 -144px;
        }

        .cc-picker-flag.ke {
            background-position: -16px -144px;
        }

        .cc-picker-flag.jp {
            background-position: -32px -144px;
        }

        .cc-picker-flag.jo {
            background-position: -48px -144px;
        }

        .cc-picker-flag.jm {
            background-position: -64px -144px;
        }

        .cc-picker-flag.je {
            background-position: -80px -144px;
        }

        .cc-picker-flag.it {
            background-position: -96px -144px;
        }

        .cc-picker-flag.is {
            background-position: -112px -144px;
        }

        .cc-picker-flag.ir {
            background-position: -128px -144px;
        }

        .cc-picker-flag.iq {
            background-position: -144px -144px;
        }

        .cc-picker-flag.io {
            background-position: -160px 0;
        }

        .cc-picker-flag.in {
            background-position: -160px -11px;
        }

        .cc-picker-flag.im {
            background-position: -160px -22px;
        }

        .cc-picker-flag.il {
            background-position: -160px -31px;
        }

        .cc-picker-flag.ie {
            background-position: -160px -42px;
        }

        .cc-picker-flag.id {
            background-position: -160px -53px;
        }

        .cc-picker-flag.hu {
            background-position: -160px -64px;
        }

        .cc-picker-flag.ht {
            background-position: -160px -75px;
        }

        .cc-picker-flag.hr {
            background-position: -160px -86px;
        }

        .cc-picker-flag.hn {
            background-position: -160px -97px;
        }

        .cc-picker-flag.hk {
            background-position: -160px -108px;
        }

        .cc-picker-flag.gy {
            background-position: -160px -119px;
        }

        .cc-picker-flag.gw {
            background-position: -160px -130px;
        }

        .cc-picker-flag.gu {
            background-position: -160px -141px;
        }

        .cc-picker-flag.gt {
            background-position: 0 -155px;
        }

        .cc-picker-flag.gs {
            background-position: -16px -155px;
        }

        .cc-picker-flag.gr {
            background-position: -32px -155px;
        }

        .cc-picker-flag.gq {
            background-position: -48px -155px;
        }

        .cc-picker-flag.gp {
            background-position: -64px -155px;
        }

        .cc-picker-flag.gn {
            background-position: -80px -155px;
        }

        .cc-picker-flag.gm {
            background-position: -96px -155px;
        }

        .cc-picker-flag.gl {
            background-position: -112px -155px;
        }

        .cc-picker-flag.gi {
            background-position: -128px -155px;
        }

        .cc-picker-flag.gh {
            background-position: -144px -155px;
        }

        .cc-picker-flag.gg {
            background-position: -160px -155px;
        }

        .cc-picker-flag.ge {
            background-position: -176px 0;
        }

        .cc-picker-flag.gd {
            background-position: -176px -11px;
        }

        .cc-picker-flag.gb {
            background-position: -176px -22px;
        }

        .cc-picker-flag.ga {
            background-position: -176px -33px;
        }

        .cc-picker-flag.fr {
            background-position: -176px -44px;
        }

        .cc-picker-flag.gf {
            background-position: -176px -44px;
        }

        .cc-picker-flag.re {
            background-position: -176px -44px;
        }

        .cc-picker-flag.mf {
            background-position: -176px -44px;
        }

        .cc-picker-flag.bl {
            background-position: -176px -44px;
        }

        .cc-picker-flag.fo {
            background-position: -176px -55px;
        }

        .cc-picker-flag.fm {
            background-position: -176px -66px;
        }

        .cc-picker-flag.fk {
            background-position: -176px -77px;
        }

        .cc-picker-flag.fj {
            background-position: -176px -88px;
        }

        .cc-picker-flag.fi {
            background-position: -176px -99px;
        }

        .cc-picker-flag.eu {
            background-position: -176px -121px;
        }

        .cc-picker-flag.et {
            background-position: -176px -132px;
        }

        .cc-picker-flag.es {
            background-position: -176px -143px;
        }

        .cc-picker-flag.er {
            background-position: -176px -154px;
        }

        .cc-picker-flag.eh {
            background-position: -16px -166px;
        }

        .cc-picker-flag.eg {
            background-position: -32px -166px;
        }

        .cc-picker-flag.ee {
            background-position: -48px -166px;
        }

        .cc-picker-flag.ec {
            background-position: -64px -166px;
        }

        .cc-picker-flag.dz {
            background-position: -80px -166px;
        }

        .cc-picker-flag.do {
            background-position: -96px -166px;
        }

        .cc-picker-flag.dm {
            background-position: -112px -166px;
        }

        .cc-picker-flag.dk {
            background-position: -128px -166px;
        }

        .cc-picker-flag.dj {
            background-position: -144px -166px;
        }

        .cc-picker-flag.de {
            background-position: -160px -166px;
        }

        .cc-picker-flag.cz {
            background-position: -176px -166px;
        }

        .cc-picker-flag.cy {
            background-position: 0 -177px;
        }

        .cc-picker-flag.cx {
            background-position: -16px -177px;
        }

        .cc-picker-flag.cw {
            background-position: -32px -177px;
        }

        .cc-picker-flag.cv {
            background-position: -48px -177px;
        }

        .cc-picker-flag.cu {
            background-position: -64px -177px;
        }

        .cc-picker-flag.cs {
            background-position: -80px -177px;
        }

        .cc-picker-flag.cr {
            background-position: -96px -177px;
        }

        .cc-picker-flag.co {
            background-position: -112px -177px;
        }

        .cc-picker-flag.cn {
            background-position: -128px -177px;
        }

        .cc-picker-flag.cm {
            background-position: -144px -177px;
        }

        .cc-picker-flag.cl {
            background-position: -160px -177px;
        }

        .cc-picker-flag.ck {
            background-position: -176px -177px;
        }

        .cc-picker-flag.ci {
            background-position: -192px 0;
        }

        .cc-picker-flag.cg {
            background-position: -192px -11px;
        }

        .cc-picker-flag.cf {
            background-position: -192px -22px;
        }

        .cc-picker-flag.cd {
            background-position: -192px -33px;
        }

        .cc-picker-flag.cc {
            background-position: -192px -44px;
        }

        .cc-picker-flag.ca {
            background-position: -192px -66px;
        }

        .cc-picker-flag.bz {
            background-position: -192px -77px;
        }

        .cc-picker-flag.by {
            background-position: -192px -88px;
        }

        .cc-picker-flag.bw {
            background-position: -192px -99px;
        }

        .cc-picker-flag.bt {
            background-position: -192px -110px;
        }

        .cc-picker-flag.bs {
            background-position: -192px -121px;
        }

        .cc-picker-flag.br {
            background-position: -192px -132px;
        }

        .cc-picker-flag.bq {
            background-position: -192px -143px;
        }

        .cc-picker-flag.bo {
            background-position: -192px -154px;
        }

        .cc-picker-flag.bn {
            background-position: -192px -165px;
        }

        .cc-picker-flag.bm {
            background-position: -192px -176px;
        }

        .cc-picker-flag.bj {
            background-position: 0 -188px;
        }

        .cc-picker-flag.bi {
            background-position: -16px -188px;
        }

        .cc-picker-flag.bh {
            background-position: -32px -188px;
        }

        .cc-picker-flag.bg {
            background-position: -48px -188px;
        }

        .cc-picker-flag.bf {
            background-position: -64px -188px;
        }

        .cc-picker-flag.be {
            background-position: -80px -188px;
        }

        .cc-picker-flag.bd {
            background-position: -96px -188px;
        }

        .cc-picker-flag.bb {
            background-position: -112px -188px;
        }

        .cc-picker-flag.ba {
            background-position: -128px -188px;
        }

        .cc-picker-flag.az {
            background-position: -144px -188px;
        }

        .cc-picker-flag.ax {
            background-position: -160px -188px;
        }

        .cc-picker-flag.aw {
            background-position: -176px -188px;
        }

        .cc-picker-flag.au {
            background-position: -192px -188px;
        }

        .cc-picker-flag.hm {
            background-position: -192px -188px;
        }

        .cc-picker-flag.at {
            background-position: -208px 0;
        }

        .cc-picker-flag.as {
            background-position: -208px -11px;
        }

        .cc-picker-flag.ar {
            background-position: -208px -22px;
        }

        .cc-picker-flag.ao {
            background-position: -208px -33px;
        }

        .cc-picker-flag.an {
            background-position: -208px -44px;
        }

        .cc-picker-flag.am {
            background-position: -208px -55px;
        }

        .cc-picker-flag.al {
            background-position: -208px -66px;
        }

        .cc-picker-flag.ai {
            background-position: -208px -77px;
        }

        .cc-picker-flag.ag {
            background-position: -208px -88px;
        }

        .cc-picker-flag.af {
            background-position: -208px -99px;
        }

        .cc-picker-flag.ae {
            background-position: -208px -110px;
        }

        .cc-picker-flag.ad {
            background-position: -208px -121px;
        }

        .cc-picker-flag.np {
            background-position: -208px -132px;
        }

        .cc-picker-flag.ch {
            background-position: -208px -143px;
        }

        .cc-picker-code {
            display: inline-block;
            width: 35px;
        }

        .cc-picker-code-select-enabled {
            cursor: pointer;
            padding-right: 18px;
            position: relative;
        }

        .cc-picker-code-select-enabled::after {
            content: '';
            width: 0;
            height: 0;
            position: absolute;
            top: 5px;
            right: 4px;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #512b2b;
        }

        .cc-picker-code-list {
            list-style: none;
            margin: 0 0 0 -5px;
            padding: 1px;
            max-height: 200px;
            overflow-y: scroll;
            position: absolute;
            border: 1px solid #dad8d8;
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .cc-picker-code-list .cc-picker-code {
            color: gray;
            width: 38px;
        }

        .cc-picker-code-list > li {
            cursor: pointer;
            padding: 3px 15px 3px 3px;
        }

        .cc-picker-code-list > li:hover {
            background-color: #e1e1e1;
        }

        .cc-picker-code-list > li.cc-picker-selected-country {
            background-color: #f0f0f0;
        }

        .cc-picker-code-filter {
            margin: 0 0 0 -5px;
            padding: 1px;
            width: 286px;
            height: 23px;
            position: absolute;
            border: 1px solid #dad8d8;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        input[class='cc-picker-code-filter']::-webkit-input-placeholder {
            color: gray;
            font-style: italic;
        }

        input[class='cc-picker-code-filter']:-moz-placeholder {
            color: gray;
            font-style: italic;
        }

        input[class='cc-picker-code-filter']::-moz-placeholder {
            color: gray;
            font-style: italic;
        }

        input[class='cc-picker-code-filter']:-ms-input-placeholder {
            color: gray;
            font-style: italic;
        }

        body {
            color: #333333;
            background-color: #f5f5f5;
        }

        ul {
            padding: 0;
            margin: 0;
        }

        ul.app-dl li {
            list-style: none;
            display: inline-block;
        }

        ul.app-dl li a {
            width: 100%;
            max-width: 150px;
        }

        .container {
            max-width: 1440px !important;
            padding: 0 3vw;
        }

        .page-content {
            padding-bottom: 50px;
            min-height: 79vh;
        }

        .page-content.promotion {
            padding: 0;
        }

        .page-content.inverse {
            background-color: #f5f5f5;
            color: #333333;
        }

        .page-content.inverse a {
            color: #333333;
        }

        .section-container {
            position: relative;
        }

        .section-container .section-header {
            text-align: center;
        }

        .section-container .section-header h2 {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            font-size: 1.875rem;
            position: relative;
            display: inline-block;
            margin: 15px auto;
            text-align: center;
        }

        .section-container .section-header h2.st {
            color: #182d56;
        }

        .section-container .section-header h2::before {
            content: '';
            max-width: 293px;
            height: 1px;
            position: absolute;
            top: 50%;
            background-color: #333333;
            width: 25vw;
            left: -320px;
            display: none;
        }

        .section-container .section-header h2::after {
            content: '';
            max-width: 293px;
            height: 1px;
            position: absolute;
            top: 50%;
            background-color: #333333;
            width: 25vw;
            right: -320px;
            display: none;
        }

        .section-container .section-body {
            padding: 20px 0;
        }

        .section-container .section-body.pushed-up {
            margin-top: -1.5rem;
            padding: 0 2.5vw;
        }

        .section-container .section-body .section-article {
            margin-bottom: 25px;
        }

        .section-container .section-body .terms-condition h4 {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
        }

        .section-container .section-body .terms-condition h4.cn {
            font-family: "Noto Serif SC";
            font-weight: 700;
        }

        .section-container .section-body .terms-condition ol {
            margin-left: 15px;
            padding-left: 0;
        }

        .section-container .section-body .terms-condition li p {
            padding-left: 0.625rem;
        }

        .section-container .section-body .terms-condition li p.cn {
            font-family: "Noto Sans SC";
        }

        .section-container .section-body .section-holder {
            margin: 0 15px;
            background-color: #f5f5f5;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            padding: 25px 15px 0;
            position: relative;
            outline: outside solid 5px transparent;
            border-radius: 4px;
        }

        .section-container .section-body .error-container {
            text-align: center;
            padding-bottom: 5.18rem;
        }

        .section-container .section-body .error-container p {
            line-height: normal;
        }

        .section-container .section-body .error-container .error-cta-container {
            margin: -0.625rem 0 0.9375rem;
        }

        .section-container .section-body .error-container .error-image-placeholder {
            padding-bottom: 1.875rem;
        }

        .section-container .section-body .error-container .error-image-placeholder img {
            width: 113px;
        }

        .section-container .section-body .error-container h1 {
            font-weight: 700;
        }

        .section-container .section-body .publication-container {
            width: 100%;
            height: 13.375rem;
            background-color: #f5f5f5;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            border-radius: 0 4px 4px 0;
            padding: 24px 27px 29px;
            margin-bottom: 20px;
        }

        .section-container .section-body .publication-container .digital-body {
            padding-top: 22px;
        }

        .section-container .section-body .publication-container .digital-body ul {
            padding: 0;
        }

        .section-container .section-body .publication-container .digital-body li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 2px 0;
        }

        .section-container .section-body .publication-container .digital-body li.app-dl a {
            width: 50%;
            display: block;
            max-width: 150px;
        }

        .section-container .section-body .publication-container .digital-body li.app-dl a img {
            width: 100%;
        }

        .section-container .section-body .publication-container .digital-body a {
            font-size: 1.125rem;
            font-weight: 500;
            color: black;
            text-decoration: underline;
            -webkit-text-decoration-style: solid;
            text-decoration-style: solid;
        }

        .section-container .section-body .publication-container .digital-body p {
            font-weight: 500;
            font-size: 1.125rem;
            margin: 0;
        }

        .section-container .section-body .publication-container .digital-body img {
            padding-right: 7px;
        }

        .section-container .section-body .static-imageholder {
            margin-bottom: 25px;
        }

        .section-container .section-body .static-imageholder img {
            width: 100%;
        }

        .section-container.min {
            height: 60vh;
        }

        .section-container.float {
            position: absolute;
            z-index: 500;
        }

        .section-container.with-pads {
            padding: 85px 0;
        }

        .section-container.primary {
            background-color: #005daa;
        }

        .section-container.checkout {
            background-color: #fff;
            padding: 25px 5%;
            margin-top: -30px;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
        }

        .section-container.account {
            background-color: #fff;
            padding: 25px;
            margin-top: -30px;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
        }

        .section-container.account p.option-label {
            margin: 0;
        }

        .section-container.turret {
            -webkit-box-shadow: 0 -8px 15px -8px #91aabe;
            box-shadow: 0 -8px 15px -8px #91aabe;
            background-color: #f5f5f5;
            padding-top: 126px;
            padding-bottom: 42px;
        }

        .section-container.turret .section-header {
            padding: 84px 84px 0;
            position: absolute;
            display: inline-block;
            top: -84px;
            background-color: #f5f5f5;
            -webkit-box-shadow: 0 -5px 17px -13px #91aabe, -75px -78px 20px -81px #91aabe, 90px -78px 20px -83px #91aabe;
            box-shadow: 0 -5px 17px -13px #91aabe, -75px -78px 20px -81px #91aabe, 90px -78px 20px -83px #91aabe;
            left: 50%;
            margin-left: -365px;
            width: 730px;
        }

        .section-container.turret .section-header h1 {
            margin-top: -42px;
            text-align: center;
        }

        .section-container.turret .section-header p.subtxt {
            text-align: center;
        }

        .section-container.turret .section-body {
            margin-top: 20px;
            padding: 10px;
        }

        .section-container.dark {
            background-color: #1c1c45;
        }

        .section-container.dark.slant {
            position: relative;
            background-color: #1c1c45;
            min-height: 40vh;
            margin: 18% 0 0;
            display: block;
            padding: 2% 0 7%;
        }

        .section-container.dark.slant.after-slant {
            padding: 2% 0 10%;
        }

        .section-container.dark.slant.after-slant::after {
            bottom: -6%;
        }

        .section-container.dark.slant::before {
            content: '';
            position: absolute;
            top: -7%;
            left: 50%;
            margin-left: -75%;
            height: 15%;
            width: 150%;
            background-color: #1c1c45;
            -webkit-transform: rotate(-5deg);
            -ms-transform: rotate(-5deg);
            transform: rotate(-5deg);
            z-index: -1;
        }

        .section-container.dark.slant::after {
            content: '';
            position: absolute;
            bottom: -7%;
            left: 50%;
            margin-left: -75%;
            height: 10%;
            width: 150%;
            background-color: #1c1c45;
            -webkit-transform: rotate(5deg);
            -ms-transform: rotate(5deg);
            transform: rotate(5deg);
            z-index: 999;
        }

        .section-container.inverse {
            background-color: #f5f5f5;
        }

        .section-container.after-slant {
            padding: 100px 0 0;
        }

        .section-container.before-slant {
            padding: 0 0 8%;
        }

        .section-container.slant {
            position: relative;
            background-color: #f5f5f5;
            min-height: 40vh;
            margin: 6% 0 0;
            display: block;
            padding: 20px 0;
        }

        .section-container.slant.after-slant {
            padding: 100px 0 0;
        }

        .section-container.slant::before {
            content: '';
            position: absolute;
            top: -7%;
            left: 50%;
            margin-left: -75%;
            height: 15%;
            width: 150%;
            background-color: #f5f5f5;
            -webkit-transform: rotate(-3deg);
            -ms-transform: rotate(-3deg);
            transform: rotate(-3deg);
            z-index: -1;
        }

        .section-container.slant::after {
            content: '';
            position: absolute;
            bottom: -7%;
            left: 50%;
            margin-left: -75%;
            height: 10%;
            width: 150%;
            background-color: #f5f5f5;
            -webkit-transform: rotate(3deg);
            -ms-transform: rotate(3deg);
            transform: rotate(3deg);
            z-index: 999;
        }

        .breadcrumbs {
            margin-bottom: 25px;
        }

        .breadcrumbs ul {
            padding: 0;
            margin: 0;
        }

        .breadcrumbs ul li {
            list-style: none;
            display: inline-block;
            color: #848484;
        }

        .breadcrumbs ul li a {
            color: #848484;
        }

        .breadcrumbs ul li::after {
            content: '>';
            margin: 0 3px;
        }

        .breadcrumbs ul li:last-child::after {
            content: '';
        }

        .page-listing {
            padding: 30px 0;
        }

        .page-listing h2 {
            border-bottom: solid 1px #333333;
        }

        .page-listing ul {
            -webkit-columns: 2;
            -moz-columns: 2;
            columns: 2;
            padding: 0;
            margin: 0;
        }

        .page-listing ul li {
            list-style: none;
        }

        .page-listing ul li.divider {
            border-bottom: solid 1px #bdbdbd;
            margin-bottom: 1rem;
        }

        .page-listing ul li.strikethrough a {
            text-decoration: line-through;
            pointer-events: none;
            cursor: default;
            color: #bdbdbd;
        }

        .page-listing ul li.strikethrough a:hover {
            text-decoration: line-through;
        }

        .page-listing ul li a {
            display: block;
            padding: 4px 0;
            font-weight: 500;
        }

        .page-listing ul li a:hover {
            text-decoration: underline;
            color: #005daa;
        }

        .drag-cur {
            position: fixed;
            display: block;
            width: 80px;
            top: -40px;
            left: 0;
            z-index: -1;
        }

        .drag-cur img {
            width: 100%;
        }

        .capsule {
            border-radius: 500px;
            padding: 4px 16px;
            display: inline-block;
            margin: auto;
            font-size: 0.8em;
        }

        .capsule.blue {
            background-color: #005daa;
        }

        .capsule.orange {
            background-color: #f2994a;
        }

        .capsule img {
            height: 0.8rem;
            width: auto !important;
            float: left;
            margin: 4px;
        }

        .capsule span {
            color: #f5f5f5;
        }

        .mob-only {
            display: block;
            opacity: 1;
        }

        .desk-only {
            display: none;
            opacity: 0;
        }

        .tag {
            display: inline-block;
            background-color: #f5f5f5;
            padding: 4px;
            color: #333333;
            font-weight: bold;
            font-size: 0.75rem;
            text-transform: uppercase;
            border-radius: 2px;
            margin-bottom: 15px;
        }

        .tag.dark {
            background-color: #fbdb32;
        }

        .icon {
            width: 40px;
            height: auto;
        }

        .icon img {
            width: 100%;
            height: auto;
        }

        .clearfix {
            clear: both;
        }

        .pub-icon {
            width: 50px;
        }

        .cta-button {
            display: inline-block;
            border: solid 1px #f5f5f5;
            padding: 16px;
            margin: 10px 5px;
            border-radius: 8px;
            text-align: center;
            font-weight: 500;
            background-color: #005daa;
            color: #f5f5f5;
            -webkit-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
            min-width: 220px;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 1.125rem;
            border-radius: 4px;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }

        .cta-button img {
            height: 1.2rem;
            width: auto;
            margin: -4px 6px 0;
        }

        .cta-button:disabled {
            background-color: #bdbdbd;
            color: #848484;
        }

        .cta-button.primary {
            background-color: #005daa;
            color: #f5f5f5;
        }

        .cta-button.primary:hover {
            background-color: #c7d1ea;
        }

        .cta-button.st {
            background-color: #182d56;
        }

        .cta-button.st:disabled {
            background-color: #bdbdbd;
        }

        .cta-button.zb {
            background-color: #a40034;
        }

        .cta-button.zb:disabled {
            background-color: #bdbdbd;
        }

        .cta-button.cookie-btn {
            margin-left: 38px;
            padding: 14px 0;
            width: 143px;
            background: none;
            border: 2px solid #1c1c45;
            border-radius: 4px;
            color: #1c1c45;
        }

        .cta-button.form-sbumit-btn {
            background-color: #005daa;
            color: #f5f5f5;
            padding-left: 25px;
            padding-right: 25px;
        }

        .cta-button.form-sbumit-btn:hover {
            background-color: #c7d1ea;
        }

        .cta-button.login-prompt {
            background-color: #005daa;
            color: #f5f5f5;
            padding: 8px;
            border-radius: 4px;
            font-weight: bold;
            width: 100%;
            min-width: 0;
            margin: 5px 0;
        }

        .cta-button.login-prompt:hover {
            background-color: #c7d1ea;
        }

        .cta-button.float-right {
            position: absolute;
            right: 0;
        }

        .cta-button.toggle {
            color: #333333;
            background-color: #f5f5f5;
            padding: 5px 10px;
            text-align: left;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            cursor: pointer;
            min-width: auto;
        }

        .cta-button.toggle:hover {
            background-color: #e9ecef;
        }

        .cta-button.toggle p {
            white-space: nowrap;
            margin: 0;
            font-size: 1.125rem;
            display: inline-block;
            width: 80%;
        }

        .cta-button.toggle img {
            display: inline-block;
            width: 10%;
            height: auto;
        }

        .cta-button.back {
            color: #333333;
            background-color: #dee2e6;
            padding: 5px 10px;
            text-align: left;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            cursor: pointer;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-width: 0;
            width: 120px;
        }

        .cta-button.back:hover {
            background-color: #e9ecef;
        }

        .cta-button.back p {
            white-space: nowrap;
            margin: 0;
            font-size: 1.125rem;
            display: inline-block;
            width: 70%;
        }

        .cta-button.back img {
            display: inline-block;
            width: 20%;
            height: auto;
        }

        .cta-button.half {
            width: 50%;
            margin: 5px;
        }

        .cta-button.full {
            width: 100%;
            min-width: 0%;
        }

        .cta-button:hover {
            opacity: 0.8;
        }

        .cta-button.inverse {
            border: solid 1px #005daa;
            color: #005daa;
        }

        .cta-button.inverse:hover {
            background-color: #005daa;
            color: #f5f5f5;
        }

        .cta-button.inverse.dark {
            border: solid 1px #1c1c45;
            color: #1c1c45;
        }

        .cta-button.inverse.dark:hover {
            background-color: #1c1c45;
            color: #f5f5f5;
        }

        form.form-style {
            border: 0;
            border-radius: 0;
            appearance: none !important;
            -moz-appearance: none;
            -webkit-appearance: none;
            color: #f5f5f5;
            text-transform: uppercase;
            font-size: 1.125rem;
            width: 100%;
            margin: 0;
            margin-bottom: 20px;
        }

        form.form-style input {
            background-color: #fff;
            padding: 15px;
            width: 100%;
        }

        form.form-style button {
            padding: 15px;
            margin: 0;
            width: 100%;
            position: relative;
        }

        form.form-style button.cta-button {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 1.25rem;
            font-weight: 500;
            -webkit-transition: opacity 300ms ease-in-out;
            -o-transition: opacity 300ms ease-in-out;
            transition: opacity 300ms ease-in-out;
        }

        form.form-style button.cta-button:disabled {
            background-color: #bdbdbd;
            cursor: not-allowed;
        }

        form.form-style button.cta-button:disabled:hover {
            opacity: 1;
        }

        form.form-style button.cta-button:hover {
            opacity: 0.8;
        }

        form.form-style button.cta-button:hover .tooltip-container {
            -webkit-animation: fadeIn 0.3s ease-in-out;
            animation: fadeIn 0.3s ease-in-out;
            display: block;
            opacity: 1;
        }

        form.form-style button.cta-button.cn {
            font-family: "Noto Serif SC";
        }

        form.form-style button.cta-button.secondary {
            display: inline-block;
            width: auto;
            font-family: "Crimson Text", serif;
            font-weight: 700;
            font-size: 1.375rem;
            background-color: transparent;
            border: 0;
            padding: 0;
            border-bottom: solid 1px #333333;
            -webkit-transition: opacity 300ms ease-in-out;
            -o-transition: opacity 300ms ease-in-out;
            transition: opacity 300ms ease-in-out;
        }

        form.form-style button.cta-button.secondary:disabled {
            background-color: transparent;
            color: #848484;
        }

        form.form-style button.cta-button.secondary.st {
            background-color: transparent;
            color: #182d56;
        }

        form.form-style button.cta-button.secondary.st:disabled {
            background-color: transparent;
            color: #848484;
        }

        form.form-style button.cta-button.secondary.zb {
            background-color: transparent;
            color: #a40034;
        }

        form.form-style button.cta-button.secondary.zb:disabled {
            background-color: transparent;
            color: #848484;
        }

        form.form-style button.cta-button-secondary {
            display: inline-block;
            width: auto;
            font-family: "Crimson Text", serif;
            font-weight: 700;
            font-size: 1.375rem;
            background-color: transparent;
            border: 0;
            padding: 0;
            border-bottom: solid 1px #333333;
            -webkit-transition: opacity 300ms ease-in-out;
            -o-transition: opacity 300ms ease-in-out;
            transition: opacity 300ms ease-in-out;
        }

        form.form-style button.cta-button-secondary:hover {
            opacity: 0.8;
        }

        form.form-style option {
            color: #1c1c45;
            border: 0;
            appearance: none !important;
            -moz-appearance: none;
            -webkit-appearance: none;
        }

        form.form-style option::before {
            background-color: transparent;
        }

        form.address button {
            background-color: #0ac27b;
            color: #f5f5f5;
            border-radius: 4px;
            border: solid 1px #117e54;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            padding: 15px 30px 15px 15px;
            -webkit-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
            position: relative;
        }

        form.address button:hover {
            background-color: #117e54;
        }

        form.address button p {
            margin: 0;
            font-size: 1.25rem;
        }

        form.address button img {
            position: absolute;
            top: 50%;
            margin-top: -10px;
            right: 10px;
            height: 20px;
        }

        form.address input {
            display: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        form.address input:checked + label::before {
            background-color: #0ac27b;
        }

        form.address label {
            color: #333333;
            display: inline-block;
            padding: 10px 25px 10px 10px;
            margin: 0;
            font-size: 1rem;
            line-height: 1;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
            position: relative;
            cursor: pointer;
        }

        form.address label::before {
            content: '';
            width: 15px;
            height: 15px;
            position: absolute;
            top: 50%;
            right: 0;
            z-index: 999;
            margin-top: -7.5px;
            background-color: #bdbdbd;
            border-radius: 50%;
            background-image: url("../images/icons/circle-tick-white.svg");
            background-size: contain;
            background-repeat: no-repeat;
            -webkit-filter: drop-shadow(-3px 2px 3px rgba(0, 0, 0, 0.25));
            filter: drop-shadow(-3px 2px 3px rgba(0, 0, 0, 0.25));
            border: solid 2px #bdbdbd;
        }

        form.checkout-style input {
            width: 100%;
            outline: 0;
        }

        form.checkout-style .error-msg {
            margin-top: -15px;
            color: #a50034;
            width: 100%;
            display: none;
        }

        form.checkout-style .form-row {
            margin: 0;
        }

        form.checkout-style .form-row.foreign {
            display: none;
        }

        form.checkout-style .form-row.cir1 {
            display: none;
        }

        form.checkout-style .form-row.hori {
            width: 100%;
            overflow-x: auto;
        }

        form.checkout-style .form-row.hori .payment-wrapper {
            width: 100%;
            white-space: nowrap;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0;
        }

        form.checkout-style .unit-divider {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 20px 0;
            margin-right: 16px;
        }

        form.checkout-style .hidden {
            display: none;
        }

        form.checkout-style iframe {
            margin-top: 15px;
            border: 0;
            background-color: #f5f5f5;
            min-height: 80vh;
        }

        form.checkout-style .form-element-text {
            position: relative;
            padding: 0 0 20px;
            display: inline-block;
            margin-right: 16px;
        }

        form.checkout-style .form-element-text.short {
            width: 45%;
            margin-right: 5%;
        }

        form.checkout-style .form-element-text.short .error-msg {
            margin-top: 8px;
            margin-bottom: 0;
        }

        form.checkout-style .form-element-text.dashed {
            position: relative;
        }

        form.checkout-style .form-element-text.dashed::after {
            content: '-';
            position: absolute;
            top: 50%;
            margin-top: -20px;
            right: -14px;
        }

        form.checkout-style .form-element-text.long {
            width: 100%;
            margin-right: 5%;
        }

        form.checkout-style .form-element-text.long .error-msg {
            margin-top: 8px;
            margin-bottom: 0;
        }

        form.checkout-style .form-element-text.search {
            width: 100%;
            max-width: 100%;
            margin: auto;
            margin-top: 0;
        }

        form.checkout-style .form-element-text.search input[type='text'] {
            padding: 15px 13px;
        }

        form.checkout-style .form-element-text.search input[type='text']:focus + label {
            top: 4%;
        }

        form.checkout-style .form-element-text.search button {
            padding: 12px;
        }

        form.checkout-style .form-element-text.mid {
            width: 300px;
        }

        form.checkout-style .form-element-text .element-container {
            width: 100%;
            position: relative;
            display: block;
        }

        form.checkout-style .form-element-text .disclaimer {
            font-size: 0.875rem;
            font-weight: 500;
            display: none;
        }

        form.checkout-style .form-element-text .disclaimer a {
            color: #005daa;
        }

        form.checkout-style .form-element-text textarea {
            width: 100%;
            min-height: 80px;
            padding: 10px 13px;
            background-color: #f8f9fa;
            border-radius: 4px;
            border: solid 1px #adb5bd;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        form.checkout-style .form-element-text textarea:focus {
            border-color: #005daa;
        }

        form.checkout-style .form-element-text textarea:focus + label {
            top: 3%;
            color: #005daa;
        }

        form.checkout-style .form-element-text textarea.valid + label {
            top: 3%;
            color: #005daa;
        }

        form.checkout-style .form-element-text button.checkout {
            background-color: #005daa;
            color: #f5f5f5;
            border-radius: 4px;
            border: 0;
            width: 100%;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 0.95;
            text-align: center;
            padding-top: 15px;
        }

        form.checkout-style .form-element-text button:hover {
            opacity: 0.8;
        }

        form.checkout-style .form-element-text button p {
            margin: 0;
            font-size: 1.25rem;
            display: inline-block;
        }

        form.checkout-style .form-element-text button img {
            display: inline-block;
            margin: 8px 4px;
            height: 1rem;
        }

        form.checkout-style .form-element-text button.search {
            background-color: transparent;
            position: absolute;
            right: 0;
            top: 0;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        form.checkout-style .form-element-text .loading-ani {
            position: absolute;
            display: none;
            height: 80%;
            width: auto;
            z-index: 500;
        }

        form.checkout-style .form-element-text label {
            color: #bdbdbd;
            display: inline-block;
            padding: 0.2rem;
            margin: 0;
            background-color: #f8f9fa;
            position: absolute;
            top: 50%;
            left: 12px;
            font-size: 1rem;
            line-height: 1;
            margin-top: -13px;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        form.checkout-style .form-element-text.dd-cont label {
            top: 3%;
            color: #005daa;
        }

        form.checkout-style .form-element-text.dd-cont .select2 {
            width: 100% !important;
        }

        form.checkout-style .form-element-text input[type='text'] {
            padding: 10px 13px;
            background-color: #f8f9fa;
            border-radius: 4px;
            border: solid 1px #adb5bd;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        form.checkout-style .form-element-text input[type='text']:focus {
            border-color: #005daa;
        }

        form.checkout-style .form-element-text input[type='text']:focus + label {
            top: 3%;
            color: #005daa;
        }

        form.checkout-style .form-element-text input[type='text']:valid {
            border-color: #005daa;
        }

        form.checkout-style .form-element-text input[type='text']:valid + label {
            top: 3%;
            color: #005daa;
        }

        form.checkout-style .form-element-text input[type='text'].valid {
            border-color: #005daa;
        }

        form.checkout-style .form-element-text input[type='text'].valid:disabled {
            color: #333333;
        }

        form.checkout-style .form-element-text input[type='text'].valid + label {
            top: 3%;
            color: #005daa;
        }

        form.checkout-style .form-element-text input[type='text'].error {
            border-color: #a50034;
        }

        form.checkout-style .form-element-text input[type='text'].error.error + label {
            color: #a50034;
            top: 3%;
        }

        form.checkout-style .form-element-text input[type='text'].error:focus {
            border-color: #a50034;
        }

        form.checkout-style .form-element-text input[type='text'].error:focus + label {
            color: #a50034;
        }

        form.checkout-style .form-element-text.contact {
            position: relative;
        }

        form.checkout-style .form-element-text.contact .error-msg {
            margin-top: 8px;
            margin-bottom: 0;
        }

        form.checkout-style .form-element-text.contact input[type='text'] {
            padding-left: 120px;
        }

        form.checkout-style .form-element-text.contact input[type='text']:focus + label {
            left: 15px;
        }

        form.checkout-style .form-element-text.contact input[type='text'].error {
            border-color: #a50034;
        }

        form.checkout-style .form-element-text.contact input[type='text'].error.error + label {
            color: #a50034;
            top: 3%;
            left: 15px;
        }

        form.checkout-style .form-element-text.contact input[type='text'].error:focus {
            border-color: #a50034;
        }

        form.checkout-style .form-element-text.contact input[type='text'].error:focus + label {
            color: #a50034;
        }

        form.checkout-style .form-element-text.contact input[type='text'].error:valid {
            border-color: #a50034;
        }

        form.checkout-style .form-element-text.contact input[type='text'].error:valid + label {
            top: 3%;
            left: 15px;
            color: #a50034;
        }

        form.checkout-style .form-element-text.contact input[type='text']:valid {
            border-color: #005daa;
        }

        form.checkout-style .form-element-text.contact input[type='text']:valid + label {
            top: 3%;
            left: 15px;
            color: #005daa;
        }

        form.checkout-style .form-element-text.contact label {
            left: 120px;
        }

        form.checkout-style .form-element-payment {
            display: inline-block;
            position: relative;
            margin-right: 20px;
        }

        form.checkout-style .form-element-payment.order-overview {
            background-color: #c7d1ea;
            padding: 20px;
            text-align: left;
        }

        form.checkout-style .form-element-payment.order-overview p .overview-note {
            color: #6c757d;
            width: 100%;
            text-align: left;
            padding: 0;
        }

        form.checkout-style .form-element-payment input[type='radio'] {
            display: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        form.checkout-style .form-element-payment input[type='radio']:checked + label {
            border: solid 2px #0ac27b;
        }

        form.checkout-style .form-element-payment input[type='radio']:checked + label::before {
            background-color: #0ac27b;
        }

        form.checkout-style .form-element-payment input[type='checkbox'] {
            display: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        form.checkout-style .form-element-payment input[type='checkbox']:checked + label {
            border: solid 2px #0ac27b;
        }

        form.checkout-style .form-element-payment input[type='checkbox']:checked + label::before {
            background-color: #0ac27b;
        }

        form.checkout-style .form-element-payment label {
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
            border: solid 2px #bdbdbd;
            background-color: #f5f5f5;
            border-radius: 4px;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            padding: 0 18px 0 10px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: 100px;
            position: relative;
        }

        form.checkout-style .form-element-payment label img {
            height: 2.5rem;
            width: auto;
        }

        form.checkout-style .form-element-payment label p {
            margin: 0;
            font-size: 1.325rem;
            font-weight: 500px;
            padding: 6px 0;
        }

        form.checkout-style .form-element-payment label.saved-cards p {
            font-size: 1.125rem;
            margin: 0;
        }

        form.checkout-style .form-element-payment label.slim {
            min-height: 0;
            font-weight: bold;
        }

        form.checkout-style .form-element-payment label::before {
            content: '';
            width: 20px;
            height: 20px;
            position: absolute;
            top: 50%;
            right: -10px;
            z-index: 100;
            margin-top: -10px;
            background-color: #bdbdbd;
            border-radius: 50%;
            background-image: url("../images/icons/circle-tick-white.svg");
            background-size: 16px;
            background-repeat: no-repeat;
            -webkit-filter: drop-shadow(-3px 2px 3px rgba(0, 0, 0, 0.25));
            filter: drop-shadow(-3px 2px 3px rgba(0, 0, 0, 0.25));
            border: solid 2px #bdbdbd;
        }

        form.checkout-style .form-element-payment label.solid {
            background-color: #fff;
            -webkit-box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            border: solid 2px transparent;
        }

        form.checkout-style .form-element {
            margin-bottom: 25px;
            display: block;
            position: relative;
        }

        form.checkout-style .form-element.select {
            width: 100%;
            margin: 0;
        }

        form.checkout-style .form-element.select .error-msg {
            margin-top: 8px;
            margin-bottom: 0;
        }

        form.checkout-style .form-element.order-overview {
            background-color: #c7d1ea;
            padding: 20px;
            text-align: left;
        }

        form.checkout-style .form-element.order-overview ul {
            margin: 0;
            padding: 0;
        }

        form.checkout-style .form-element.order-overview ul.item-charge {
            font-size: 1.5rem;
            font-weight: 700;
        }

        form.checkout-style .form-element.order-overview ul.item-charge li {
            list-style: none;
            padding: 8px 0;
            position: relative;
            display: block;
            line-height: 100%;
        }

        form.checkout-style .form-element.order-overview ul.item-charge li:after {
            content: "+";
            position: absolute;
            left: -8px;
            bottom: -12px;
            font-weight: 300;
        }

        form.checkout-style .form-element.order-overview ul.item-charge li:last-child:after {
            display: none;
        }

        form.checkout-style .form-element.order-overview ul.overview-note {
            color: #6c757d;
            width: 100%;
            text-align: left;
            padding: 0;
        }

        form.checkout-style .form-element input[type="radio"] {
            display: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        form.checkout-style .form-element input[type="radio"]:checked + label {
            border: solid 2px #0ac27b;
        }

        form.checkout-style .form-element input[type="radio"]:checked + label::before {
            background-color: #0ac27b;
        }

        form.checkout-style .form-element input[type="radio"]:disabled + label {
            background-color: rgba(189, 189, 189, 0.5);
        }

        form.checkout-style .form-element input[type="radio"]:disabled + label::before {
            display: none;
        }

        form.checkout-style .form-element input[type="radio"].selection:checked + label {
            background-color: #d4f3e7;
            border: 0;
        }

        form.checkout-style .form-element input[type='checkbox'] {
            display: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        form.checkout-style .form-element input[type='checkbox']:checked + label {
            border: solid 2px #0ac27b;
        }

        form.checkout-style .form-element input[type='checkbox']:checked + label::before {
            background-color: #0ac27b;
        }

        form.checkout-style .form-element input[type='checkbox']:disabled + label {
            background-color: rgba(189, 189, 189, 0.5);
        }

        form.checkout-style .form-element input[type='checkbox']:disabled + label::before {
            display: none;
        }

        form.checkout-style .form-element input[type='checkbox']#copyToBilling + label {
            margin-top: 0;
        }

        form.checkout-style .form-element label {
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
            border: solid 2px #bdbdbd;
            padding: 10px 15px 10px 25px;
            display: block;
            margin: 15px 0;
            position: relative;
        }

        form.checkout-style .form-element label.multi-select {
            width: 100%;
            margin: 0;
            border: 0;
            font-size: 1.125rem;
            border-bottom: solid 1px #bdbdbd;
            padding: 16px;
            background-color: #fff;
            border-radius: 0;
            cursor: pointer;
        }

        form.checkout-style .form-element label.multi-select.icon {
            padding: 4px 16px;
        }

        form.checkout-style .form-element label.multi-select img {
            height: 50px;
            width: auto;
        }

        form.checkout-style .form-element label.multi-select:hover {
            opacity: 0.8;
        }

        form.checkout-style .form-element label.multi-select::before {
            display: none;
        }

        form.checkout-style .form-element label.multi-select:last-child {
            border: 0;
        }

        form.checkout-style .form-element label.multi-select p {
            display: inline-block;
            margin: 0 16px;
        }

        form.checkout-style .form-element label.slim {
            min-height: 0;
            font-weight: bold;
        }

        form.checkout-style .form-element label::before {
            content: '';
            width: 30px;
            height: 30px;
            position: absolute;
            top: 50%;
            right: -15px;
            z-index: 100;
            margin-top: -15px;
            background-color: #bdbdbd;
            border-radius: 50%;
            background-image: url("../images/icons/circle-tick-white.svg");
            background-size: contain;
            background-repeat: no-repeat;
            -webkit-filter: drop-shadow(-3px 2px 3px rgba(0, 0, 0, 0.25));
            filter: drop-shadow(-3px 2px 3px rgba(0, 0, 0, 0.25));
            border: solid 2px #bdbdbd;
        }

        form.checkout-style .form-element label.solid {
            background-color: #fff;
            -webkit-box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            border: solid 2px transparent;
        }

        form.checkout-style .form-element label.with-note {
            display: block;
        }

        form.checkout-style .form-element label.with-note p.note {
            width: 100%;
            padding: 15px 0 0;
            margin: 0;
            text-align: left;
            clear: both;
            border-top: solid 1px #333333;
            font-size: 0.875rem;
            color: #333333;
            line-height: 1;
        }

        form.checkout-style .form-element label.vas .left-col {
            width: 20%;
        }

        form.checkout-style .form-element label.vas .right-col {
            width: 79%;
            text-align: left;
            padding-left: 15px;
        }

        form.checkout-style .form-element label.vas .gift-label {
            font-size: 0.875rem;
            font-weight: 700;
        }

        form.checkout-style .form-element label.vas .gift-stock {
            padding-top: 4px;
            width: 48%;
            display: inline-block;
            font-weight: 500;
            font-size: 0.875rem;
            color: #848484;
        }

        form.checkout-style .form-element label.vas .gift-price {
            padding-top: 4px;
            width: 50%;
            text-align: right;
            display: inline-block;
            font-weight: 500;
            font-size: 1.125rem;
        }

        form.checkout-style .form-element label .options-container {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding: 0;
        }

        form.checkout-style .form-element label .left-col {
            width: 40%;
            display: inline-block;
            text-align: left;
        }

        form.checkout-style .form-element label .right-col {
            width: 60%;
            display: inline-block;
            text-align: right;
        }

        form.checkout-style .form-element label .option-nm {
            font-size: 1.5rem;
        }

        form.checkout-style .form-element label .option-nm p {
            padding: 0;
            margin: 0;
            line-height: 100%;
        }

        form.checkout-style .form-element label .option-nm .gift-stock {
            padding-top: 0;
            width: 100%;
            display: inline-block;
            font-weight: 500;
            font-size: 0.875rem;
            color: #848484;
        }

        form.checkout-style .form-element label .option-img {
            display: inline-block;
            text-align: left;
        }

        form.checkout-style .form-element label .option-img img {
            width: 100%;
        }

        form.checkout-style .form-element label .option-details p {
            font-size: 1.875rem;
            font-weight: 300;
            padding: 0;
            margin: 0;
        }

        form.checkout-style .form-element label .option-details p.option-label {
            font-size: 1.125rem;
            font-weight: 500;
        }

        form.checkout-style .form-element label .option-details p sup {
            font-size: 1.25rem;
        }

        form.checkout-style .form-element label .option-details p sup.sec {
            color: #bdbdbd;
            position: relative;
            padding-left: 12px;
            display: inline-block;
            margin-top: 15px;
        }

        form.checkout-style .form-element label .option-details p sup.sec:before {
            content: '/';
            font-size: 2rem;
            display: inline-block;
            position: absolute;
            left: 0;
            top: 80%;
        }

        form.checkout-style .form-element label .option-details p.promo-text {
            font-size: 1rem;
            color: #f2994a;
            margin: 0;
        }

        form.checkout-style .form-element label .note {
            border-top: solid 1px #bdbdbd;
            width: 100%;
            padding-top: 8px;
            margin-top: 8px;
        }

        form.checkout-style .form-element label .note ul {
            padding: 0;
            margin: 0;
            font-size: 0.875rem;
        }

        form.checkout-style .form-element label .note ul li {
            list-style: none;
            margin: 2px 0;
        }

        form.checkout-style button.checkout {
            background-color: #005daa;
            border: 0;
            width: 100%;
            font-size: 1.375rem;
            font-weight: 500;
            line-height: 1;
        }

        form.checkout-style button.short {
            width: auto;
            display: inline-block;
            min-width: 200px;
        }

        form.checkout-style button.icon {
            text-align: left;
        }

        form.checkout-style button.icon img {
            float: right;
            margin: 3px 0;
        }

        form.checkout-style button.cancel {
            background-color: transparent;
            color: #333333;
            font-size: 1.175rem;
            border: 0;
            min-width: 100px;
        }

        form.checkout-style button.paynow {
            background-color: #005daa;
            color: #f5f5f5;
            border: 0;
            outline: 0;
            min-width: 150px;
        }

        form.contact-style select {
            width: 100%;
            outline: 0;
        }

        form.contact-style textarea {
            width: 100%;
            outline: 0;
        }

        form.contact-style input {
            width: 100%;
            outline: 0;
        }

        form.contact-style .error-msg {
            margin-top: -15px;
            color: #a50034;
            width: 100%;
            display: none;
        }

        form.contact-style .form-element-text {
            position: relative;
            padding: 0 0 30px;
        }

        form.contact-style .form-element-text .comp-country-code {
            margin-top: -33px;
        }

        form.contact-style .form-element-text.short {
            width: 125px;
        }

        form.contact-style .form-element-text.long {
            width: 475px;
        }

        form.contact-style .form-element-text.mid {
            width: 300px;
        }

        form.contact-style .form-element-text button {
            background-color: #0ac27b;
            color: #f5f5f5;
            border-radius: 4px;
            border: solid 1px #117e54;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            padding: 8px 15px;
            -webkit-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        form.contact-style .form-element-text button:hover {
            background-color: #117e54;
        }

        form.contact-style .form-element-text button p {
            margin: 0;
            font-size: 1.25rem;
            display: inline-block;
        }

        form.contact-style .form-element-text button img {
            display: inline-block;
            margin: 8px 4px;
            height: 1rem;
        }

        form.contact-style .form-element-text .loading-ani {
            position: absolute;
            display: none;
            height: 80%;
            width: auto;
            z-index: 500;
        }

        form.contact-style .form-element-text label {
            color: #bdbdbd;
            display: inline-block;
            padding: 0.2rem;
            margin: 0;
            background-color: #f5f5f5;
            position: absolute;
            top: 50%;
            left: 12px;
            font-size: 1rem;
            line-height: 1;
            margin-top: -25px;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        form.contact-style .form-element-text input[type='text'] {
            padding: 15px 13px;
            background-color: #f5f5f5;
            border-radius: 4px;
            border: solid 1px #adb5bd;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        form.contact-style .form-element-text input[type='text']:focus {
            border-color: #005daa;
        }

        form.contact-style .form-element-text input[type='text']:focus + label {
            top: 15%;
            color: #005daa;
        }

        form.contact-style .form-element-text input[type='text']:valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text input[type='text']:valid + label {
            top: 15%;
            color: #005daa;
        }

        form.contact-style .form-element-text input[type='text'].valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text input[type='text'].valid:disabled {
            color: #333333;
        }

        form.contact-style .form-element-text input[type='text'].valid + label {
            top: 15%;
            color: #005daa;
        }

        form.contact-style .form-element-text input[type='text'].error {
            border-color: #a50034;
        }

        form.contact-style .form-element-text input[type='text'].error.error + label {
            color: #a50034;
            top: 15%;
        }

        form.contact-style .form-element-text input[type='text'].error:focus {
            border-color: #a50034;
        }

        form.contact-style .form-element-text input[type='text'].error:focus + label {
            color: #a50034;
        }

        form.contact-style .form-element-text select[type='text'] {
            height: 57px;
            padding: 0 13px;
            background-color: #f5f5f5;
            border-radius: 4px;
            border: solid 1px #adb5bd;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
            background: url("../images/icons/contact-arrow-down.svg") no-repeat;
            background-position: 96% 50%;
            -webkit-appearance: none;
        }

        form.contact-style .form-element-text select[type='text']:focus {
            border-color: #005daa;
        }

        form.contact-style .form-element-text select[type='text']:focus + label {
            top: 15%;
            color: #005daa;
        }

        form.contact-style .form-element-text select[type='text']:valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text select[type='text']:valid + label {
            top: 15%;
            color: #005daa;
        }

        form.contact-style .form-element-text select[type='text'].valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text select[type='text'].valid:disabled {
            color: #333333;
        }

        form.contact-style .form-element-text select[type='text'].valid + label {
            top: 15%;
            color: #005daa;
        }

        form.contact-style .form-element-text select[type='text'].error {
            border-color: #a50034;
        }

        form.contact-style .form-element-text select[type='text'].error.error + label {
            color: #a50034;
            top: 15%;
        }

        form.contact-style .form-element-text select[type='text'].error:focus {
            border-color: #a50034;
        }

        form.contact-style .form-element-text select[type='text'].error:focus + label {
            color: #a50034;
        }

        form.contact-style .form-element-text textarea[type='text'] {
            padding: 10px 13px;
            background-color: #f5f5f5;
            border-radius: 4px;
            border: solid 1px #adb5bd;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
        }

        form.contact-style .form-element-text textarea[type='text']:focus {
            border-color: #005daa;
        }

        form.contact-style .form-element-text textarea[type='text']:focus + label {
            top: 4%;
            color: #005daa;
        }

        form.contact-style .form-element-text textarea[type='text']:valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text textarea[type='text']:valid + label {
            top: 4%;
            color: #005daa;
        }

        form.contact-style .form-element-text textarea[type='text'].valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text textarea[type='text'].valid:disabled {
            color: #333333;
        }

        form.contact-style .form-element-text textarea[type='text'].valid + label {
            top: 4%;
            color: #005daa;
        }

        form.contact-style .form-element-text textarea[type='text'].error {
            border-color: #a50034;
        }

        form.contact-style .form-element-text textarea[type='text'].error.error + label {
            color: #a50034;
            top: 4%;
        }

        form.contact-style .form-element-text textarea[type='text'].error:focus {
            border-color: #a50034;
        }

        form.contact-style .form-element-text textarea[type='text'].error:focus + label {
            color: #a50034;
        }

        form.contact-style .form-element-text.contact {
            position: relative;
        }

        form.contact-style .form-element-text.contact input[type='text'] {
            padding-left: 120px;
        }

        form.contact-style .form-element-text.contact input[type='text']:focus + label {
            left: 12px;
            left: 15px;
        }

        form.contact-style .form-element-text.contact input[type='text'].error {
            border-color: #a50034;
        }

        form.contact-style .form-element-text.contact input[type='text'].error.error + label {
            color: #a50034;
            top: 15%;
            left: 15px;
        }

        form.contact-style .form-element-text.contact input[type='text'].error:focus {
            border-color: #a50034;
        }

        form.contact-style .form-element-text.contact input[type='text'].error:focus + label {
            color: #a50034;
        }

        form.contact-style .form-element-text.contact input[type='text'].error:valid {
            border-color: #a50034;
        }

        form.contact-style .form-element-text.contact input[type='text'].error:valid + label {
            top: 15%;
            left: 15px;
            color: #a50034;
        }

        form.contact-style .form-element-text.contact input[type='text']:valid {
            border-color: #005daa;
        }

        form.contact-style .form-element-text.contact input[type='text']:valid + label {
            top: 15%;
            left: 15px;
            color: #005daa;
        }

        form.contact-style .form-element-text.contact label {
            left: 120px;
        }

        form.contact-style .form-description label {
            top: 15%;
        }

        .current-flag {
            position: absolute;
            top: 0;
            z-index: 250;
            border: solid 5px #005daa;
            width: 100%;
            height: 100%;
        }

        .current-flag .flag-wrapper {
            width: 100%;
            text-align: center;
            position: absolute;
            top: -1rem;
        }

        .cta-container {
            text-align: center;
            margin-top: 40px;
        }

        .cta-container.left {
            text-align: left;
        }

        .card-cta {
            padding: 1.8rem;
            -webkit-box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            background-repeat: no-repeat;
            background-size: 20px;
            background-position: center right 15px;
            border-radius: 4px;
            color: #333333;
            background-image: url("../images/icons/right-arr-tri.svg");
            font-size: 1.5125rem;
            -webkit-transition: background-color 300ms ease-in-out;
            -o-transition: background-color 300ms ease-in-out;
            transition: background-color 300ms ease-in-out;
        }

        .card-cta:hover {
            background-image: url("../images/icons/right-arr-tri-solid.svg");
            background-color: #c7d1ea;
        }

        .card-cta p.subtext {
            font-size: 1rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .cta-box {
            display: inline-block;
            color: #333333;
        }

        .cta-box:hover {
            color: #005daa;
        }

        .cta-box:hover span {
            border-bottom: solid 1px #005daa;
        }

        .cta-box img {
            width: 20px;
            height: auto;
            margin: 0 10px;
        }

        .cta-box span {
            font-size: 1rem;
            font-family: "Crimson Text", serif;
            font-weight: bold;
            border-bottom: solid 1px #333333;
            line-height: 0.8;
        }

        .single-event {
            width: 100%;
            min-height: 720px;
            margin-bottom: 15px;
        }

        .single-event .event-img a img {
            width: 100%;
        }

        .single-event .event-content {
            margin: 5px 0;
            display: block;
            position: relative;
        }

        .single-event .event-content p {
            width: 70%;
        }

        .carousel-thb {
            position: absolute;
            bottom: 15%;
            width: 100%;
            left: 0;
            text-align: center;
            z-index: 600;
            bottom: 10%;
        }

        .carousel-thb .dash-container {
            display: inline-block;
        }

        .carousel-thb .dash-container .dash-thb {
            background-color: #f5f5f5;
            height: 5px;
            border-radius: 500px;
            -webkit-filter: drop-shadow(3px 2px 5px #252564);
            filter: drop-shadow(3px 2px 5px #252564);
            width: 42px;
            display: inline-block;
            margin: 0 7px;
            -webkit-transition: background-color 300ms ease-in-out;
            -o-transition: background-color 300ms ease-in-out;
            transition: background-color 300ms ease-in-out;
        }

        .carousel-thb .dash-container .dash-thb.active {
            background-color: #005daa;
        }

        .carousel-thb .circle-container {
            display: inline-block;
        }

        .carousel-thb .circle-container .circ-thb {
            background-color: #848484;
            height: 8px;
            width: 8px;
            border-radius: 500px;
            display: inline-block;
            margin: 0 7px;
            -webkit-transition: background-color 300ms ease-in-out;
            -o-transition: background-color 300ms ease-in-out;
            transition: background-color 300ms ease-in-out;
        }

        .carousel-thb .circle-container .circ-thb.active {
            background-color: #005daa;
        }

        ul.event-options {
            padding: 0;
            margin: 0;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        ul.event-options li {
            list-style: none;
            display: inline-block;
            margin: 0;
            width: 45px;
            position: relative;
            border-radius: 50%;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }

        ul.event-options li:last-child {
            margin: 0 0 0 3px;
        }

        ul.event-options li:hover {
            background-color: #1c1c45;
        }

        ul.event-options li img {
            width: 100%;
        }

        ul.event-options .dropbtn {
            padding: 0;
            margin: 0;
            border: 0;
            background-color: transparent;
            -webkit-appearance: none;
            appearance: none;
            -moz-appearance: none;
            width: 100%;
        }

        ul.event-options .dropdown-content {
            position: absolute;
            width: auto;
            min-width: 280px;
            bottom: 50px;
            text-align: center;
            right: 0;
            padding: 0 5px;
            background-color: #005daa;
            -webkit-box-shadow: -5px -5px 9px #0673ce, 5px 5px 9px #004d8d;
            box-shadow: -5px -5px 9px #0673ce, 5px 5px 9px #004d8d;
            display: none;
            z-index: 9000;
        }

        ul.event-options .dropdown-content.addthis_toolbox a {
            width: 40px;
            display: inline-block;
        }

        ul.event-options .dropdown-content.addthis_toolbox a img {
            width: 100%;
        }

        ul.event-options .dropdown-content.addthis_toolbox a:hover {
            background-color: #1c1c45;
        }

        .center-content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        #overlayer {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 1901;
            top: 0;
            background: #fff;
        }

        #overlayer .loader {
            display: inline-block;
            width: 30px;
            height: 30px;
            position: absolute;
            z-index: 3;
            border: 4px solid #005daa;
            top: 50%;
            left: 50%;
            margin-left: -15px;
            margin-top: -15px;
            -webkit-animation: loader 2s infinite ease;
            animation: loader 2s infinite ease;
        }

        #overlayer .loader .loader-inner {
            vertical-align: top;
            display: inline-block;
            width: 100%;
            background-color: #005daa;
            -webkit-animation: loader-inner 2s infinite ease-in;
            animation: loader-inner 2s infinite ease-in;
        }

        #overlayer .ball-wrap {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        #overlayer .ball-wrap .bounceball {
            position: relative;
            display: inline-block;
            height: 37px;
            width: 15px;
        }

        #overlayer .ball-wrap .bounceball::before {
            position: absolute;
            content: '';
            display: block;
            top: 0;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #005daa;
            -webkit-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-animation: bounce 500ms alternate infinite ease;
            animation: bounce 500ms alternate infinite ease;
        }

        .event-options li:hover {
            background-color: #1c1c45;
        }

        .reminder {
            background-color: #a7dff6;
            max-width: 360px;
            padding: 8px;
            position: absolute;
            font-size: 0.815rem;
            border-radius: 4px;
            top: 0;
            width: 230px;
            -webkit-box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px #ffffff, 5px 5px 9px #c5cde6;
            display: none;
            z-index: 1000;
        }

        .reminder.right {
            left: 101%;
        }

        .reminder .tri-left {
            border-right-color: #a7dff6;
        }

        .reminder p {
            font-weight: bold;
            margin: 0;
        }

        .helper-box-overlay {
            position: fixed;
            top: 0;
            left: 0;
            background-color: transparent;
            width: 100vw;
            height: 100vh;
            display: none;
            z-index: 1300;
        }

        .lightbox-overlay {
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.8);
            width: 100vw;
            height: 100vh;
            display: none;
            z-index: 1300;
        }

        .card-container {
            margin: 16px 0 50px;
            background-color: #f5f5f5;
            -webkit-box-shadow: -10px 0 50px rgba(28, 28, 69, 0.25);
            box-shadow: -10px 0 50px rgba(28, 28, 69, 0.25);
            padding: 9% 8%;
        }

        .account-container {
            position: relative;
            min-height: 25vh;
            width: 100%;
        }

        .account-container.container {
            padding: 15px 0;
        }

        .account-container .account-left .account-body {
            border-top: solid 1px #bdbdbd;
            margin-top: 8px;
            padding-top: 8px;
        }

        .account-container .account-right {
            padding-bottom: 30px;
        }

        .account-container .account-table {
            width: 100%;
        }

        .account-container .account-table table {
            width: 100%;
        }

        .account-container .account-table table thead {
            font-size: 0.875rem;
            font-weight: 500;
            border: 0;
        }

        .account-container .account-table table thead td {
            border: 0;
            padding: 8px 16px;
        }

        .account-container .account-table table tbody {
            background-color: #f5f5f5;
        }

        .account-container .account-table table tbody tr {
            border: solid 1px #bdbdbd;
        }

        .account-container .account-table table tbody tr.alert td {
            color: #a50034;
        }

        .account-container .account-table table tbody td a {
            text-decoration: underline;
        }

        .account-container .account-table table tbody td a img {
            margin: 0 4px;
        }

        .checkout-container {
            padding: 15px 0 0;
            position: relative;
            border-radius: 4px;
            min-height: 25vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .checkout-container .checkout-content {
            padding-bottom: 15%;
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .checkout-container .checkout-details-container {
            width: 100%;
            border-top: solid 1px #333333;
        }

        .checkout-container .checkout-details-container.failed {
            border: 0;
        }

        .checkout-container .checkout-details-container.proceed {
            border: 0;
            padding: 0;
        }

        .checkout-container .checkout-details-container.proceed .checkout-details-body {
            padding: 0;
        }

        .checkout-container .checkout-details-container.payment {
            display: none;
        }

        .checkout-container .checkout-details-container.payment.active {
            display: block;
        }

        .checkout-container .checkout-details-container .saved-cards-container {
            background: #fff;
            border-radius: 6px;
        }

        .checkout-container .checkout-details-container .paynow-container {
            text-align: right;
            width: 100%;
        }

        .checkout-container .checkout-details-container .checkout-details-header {
            padding: 15px 0 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .checkout-container .checkout-details-container .checkout-details-header.payment {
            background-image: unset;
        }

        .checkout-container .checkout-details-container .checkout-details-header h2 {
            margin: 0;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            font-size: 1.175rem;
        }

        .checkout-container .checkout-details-container .checkout-details-header p {
            margin: 0;
        }

        .checkout-container .checkout-details-container .checkout-details-body {
            padding: 24px 0 16px;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details {
            margin: 15px 0;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details .checkout-nm {
            margin-bottom: 8px;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details .checkout-addr {
            margin-bottom: 8px;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details .checkout-addr p {
            margin: 0;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details .checkout-change-addr {
            cursor: pointer;
            display: inline-block;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details .checkout-change-addr:hover {
            opacity: 0.8;
        }

        .checkout-container .checkout-details-container .checkout-details-body .checkout-details .checkout-change-addr p {
            text-decoration: underline;
            color: #005daa;
        }

        .checkout-container .checkout-details-container .checkout-details-body .form-element {
            margin: 0;
            margin-bottom: 15px;
        }

        .checkout-container .checkout-details-container .checkout-details-body .form-element.info {
            padding-right: 32px;
        }

        .checkout-container .checkout-details-container .checkout-details-body .form-element label::before {
            left: -15px;
            right: unset;
        }

        .checkout-container .checkout-right {
            left: 0;
            bottom: 0;
            z-index: 800;
            padding: 15px 0;
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .checkout-container .checkout-right.open {
            height: 90vh;
        }

        .checkout-container .checkout-right .thirdparty-header {
            padding: 0 15px 5px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .checkout-container .checkout-right .thirdparty-header p {
            margin: 0;
            width: 65%;
            display: inline-block;
        }

        .checkout-container .checkout-right .thirdparty-header img {
            width: 35%;
            display: inline-block;
            margin: 0 10px;
        }

        .checkout-container .checkout-right .thirdparty-header h2 {
            font-size: 1.5rem;
            font-weight: 500;
        }

        .checkout-container .checkout-details-right-rail {
            padding: 0 25px;
            width: 100%;
            position: relative;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }

        .checkout-container .checkout-details-right-rail .mobile-toggle {
            height: 80px;
            background-color: #005daa;
            color: #f5f5f5;
            width: 100%;
            background-image: url("../images/icons/arrow-up-white.svg");
            background-size: 16px;
            background-repeat: no-repeat;
            background-position: center right 8px;
            display: none;
            padding: 0 15px;
            border: solid 1px #005daa;
            border-radius: 12px 12px 0 0;
            -webkit-box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.25);
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.25);
        }

        .checkout-container .payment-confirmation {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: left;
            -ms-flex-pack: left;
            justify-content: left;
            width: 100%;
            border-bottom: solid 1px #bdbdbd;
        }

        .checkout-container .payment-confirmation.third-party {
            border: 0;
        }

        .checkout-container .payment-confirmation .payment-confirm-img {
            width: 100px;
            margin: 15px;
            text-align: center;
        }

        .checkout-container .payment-confirmation .payment-confirm-img img {
            max-width: 150px;
            width: 100%;
            height: auto;
        }

        .checkout-container .payment-confirmation .payment-confirm-text {
            padding: 25px;
            width: 100%;
        }

        .checkout-container .payment-confirmation .payment-confirm-text h1 {
            font-size: 1.8rem;
            font-weight: 500;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
        }

        .checkout-container .payment-confirmation .payment-confirm-text p {
            margin-bottom: 0;
        }

        .status-msg {
            border-bottom: solid 1px #bdbdbd;
            width: 100%;
            padding: 0 0 15px;
        }

        .status-msg h2.regular {
            font-size: 1.25rem;
            font-weight: 700;
        }

        .failure-msg-container {
            background-color: #f5f5f5;
            padding: 15px;
            margin: 8px 0;
        }

        .failure-msg-container .failed-img {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .success-next-steps-single {
            text-align: center;
            padding: 25px;
        }

        .success-next-steps-single img {
            width: 120px;
            margin: 15px;
        }

        .success-next-steps-single p {
            margin: 15px;
            font-size: 1.25rem;
        }

        .tri-down {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-top: 20px solid #0a9fc2;
            position: absolute;
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .tri-down.center {
            left: 50%;
            margin-left: -20px;
        }

        .tri-down.bottom {
            bottom: auto;
            top: -20px;
        }

        .tri-up {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 20px solid #f5f5f5;
            position: absolute;
        }

        .tri-up.center {
            left: 50%;
            margin-left: 15px;
        }

        .tri-up.up {
            bottom: auto;
            top: -20px;
        }

        .tri-up.left {
            left: 0%;
            right: auto;
        }

        .tri-up.right {
            right: 0%;
            left: auto;
        }

        .tri-left {
            width: 0;
            height: 0;
            border-right: 16px solid #f5f5f5;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
            position: absolute;
        }

        .tri-left.center {
            left: 50%;
            margin-left: 15px;
        }

        .tri-left.down {
            top: auto;
            bottom: -20px;
        }

        .tri-left.up {
            bottom: auto;
            top: -20px;
        }

        .tri-left.left {
            left: -15px;
            right: auto;
        }

        .tri-left.right {
            right: 0%;
            left: auto;
        }

        .help-box {
            background-color: #0a9fc2;
            padding: 2rem 2rem 0;
            width: 100%;
            min-height: 370px;
            color: #f5f5f5;
            position: absolute;
            bottom: auto;
            top: 100%;
            left: 0;
            display: none;
            z-index: 200;
        }

        .help-box h3 {
            text-align: left;
            border-bottom: solid 1px #f5f5f5;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .help-box h3.regular.help-heading {
            font-weight: 700;
            font-size: 1.6875rem;
        }

        .help-box ul.help-list {
            text-align: left;
            padding: 0;
            margin: 0;
        }

        .help-box ul.help-list li {
            list-style: none;
            margin: 4px 0;
        }

        .help-box .close-help {
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .help-box .close-help p {
            display: inline-block;
            border-top: solid 1px #f5f5f5;
            text-transform: uppercase;
        }

        .toggle-arr {
            position: absolute;
            right: 0;
            top: 0;
            padding: 0;
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transition: -webkit-transform 200ms ease-in-out;
            transition: -webkit-transform 200ms ease-in-out;
            -o-transition: transform 200ms ease-in-out;
            transition: transform 200ms ease-in-out;
            transition: transform 200ms ease-in-out, -webkit-transform 200ms ease-in-out;
        }

        .toggle-arr img {
            width: 25px;
            height: auto;
        }

        .toggle-arr.open {
            -webkit-transform: scaleY(-1);
            -ms-transform: scaleY(-1);
            transform: scaleY(-1);
        }

        .card-dropdown {
            background-color: #fff;
            -webkit-box-shadow: 0 0 12px rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.25);
            padding: 24px 32px;
            display: block;
            cursor: pointer;
        }

        .card-dropdown .card-header {
            background-color: transparent;
            position: relative;
            border: 0;
            padding: 0;
        }

        .card-dropdown .card-header img {
            height: 1rem;
            margin-right: 10px;
        }

        .card-dropdown .card-header span {
            color: #00509f;
        }

        .card-dropdown .card-header .toggle-arr img {
            width: 25px;
            height: auto;
        }

        .card-dropdown .card-body {
            padding: 0;
            margin-top: 1rem;
        }

        .card-plan {
            background-color: #f5f5f5;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            padding: 25px 0 0;
            position: relative;
            outline: outside solid 5px transparent;
            border-radius: 4px;
            margin: 25px 0;
        }

        .card-plan.promo {
            outline: solid 5px #f2994a;
        }

        .promotion-footer {
            width: 100%;
            background-color: #f5f5f5;
            padding: 15px 0 10px;
            color: #333333;
            -webkit-box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
            box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
        }

        .promotion-footer .package-details {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .promotion-footer .package-details h2 {
            padding: 0;
            margin: 0;
            line-height: 1;
        }

        .promotion-footer .package-details p {
            padding: 0;
            margin: 0;
            color: #848484;
        }

        .promotion-footer .package-details a {
            color: #333333;
        }

        .promotion-footer .package-action {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .promotion-footer .package-action .package-price {
            width: 50%;
            display: inline-block;
            text-align: right;
            padding: 0 8px;
        }

        .promotion-footer .package-action .package-price h2 {
            padding: 2px 0 0;
            margin: 0;
        }

        .promotion-footer .package-action .package-price h2.price-label {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 700;
        }

        .promotion-footer .package-action .package-price p {
            padding: 0;
            margin: 0;
        }

        .promotion-footer .package-action .package-price p.strikethrough {
            color: #848484;
        }

        .promotion-footer .package-action .package-cta {
            padding: 0 8px;
            width: 50%;
            display: inline-block;
        }

        .cos-footer {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            max-width: 530px;
            width: 100%;
            background-color: #1993f7;
            color: #fff;
            padding: 16px;
            position: absolute;
            left: 0;
            bottom: 100%;
        }

        .cos-footer img {
            width: 50px;
            display: inline-block;
            margin-right: 4px;
        }

        .cos-footer p {
            display: inline-block;
            -webkit-box-flex: 100;
            -ms-flex-positive: 100;
            flex-grow: 100;
            margin: 0;
        }

        .info-container {
            display: inline-block;
            position: absolute;
            width: 100%;
            right: 0;
            top: 50%;
            margin-top: -12px;
            margin-left: 10px;
        }

        .info-container.form {
            width: unset;
        }

        .info-container .info-toggle {
            width: 100%;
            float: right;
            text-align: right;
            max-width: 24px;
        }

        .info-container .info-toggle img {
            width: 100%;
            height: auto;
        }

        .info-container .info-box {
            position: absolute;
            width: 100%;
            min-width: 300px;
            background-color: #848484;
            border-radius: 4px;
            padding: 10px 10px 0;
            color: #f5f5f5;
            top: 3rem;
            right: 0;
            z-index: 500;
            display: none;
        }

        .info-container .info-box .tri-up {
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 15px solid #848484;
            top: -15px;
        }

        .tooltip-container {
            position: absolute;
            font-size: 0.875rem;
            font-weight: 300;
            color: #f5f5f5;
            z-index: 1200;
            text-align: left;
            padding: 0;
            max-width: 330px;
            width: 100%;
            bottom: 100%;
            display: none;
            opacity: 0;
        }

        .tooltip-container.top {
            bottom: 100%;
        }

        .tooltip-container .arrow {
            position: absolute;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid #848484;
            bottom: -10px;
            left: 50%;
        }

        .tooltip-container .tooltip-body {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            background-color: #848484;
            -webkit-box-shadow: 0 0 12px rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.25);
        }

        .helper-liner {
            padding: 15px 15px 0;
            display: block;
            width: 100%;
        }

        .helper-liner img {
            float: left;
            height: 1rem;
            width: auto;
            margin-right: 10px;
        }

        .helper-liner a {
            text-decoration: underline;
            color: #005daa;
        }

        .helper-liner a:hover {
            opacity: 0.8;
        }

        .notice-img {
            text-align: center;
        }

        .notice-img img {
            width: 200px;
            height: auto;
        }

        .notice-msg {
            color: #005daa;
            margin: 20% auto 0;
            display: inline-block;
            text-align: center;
        }

        .notice-msg img {
            width: 80%;
            height: auto;
        }

        .notice-msg h3 {
            font-size: 1.2rem;
            letter-spacing: 5%;
            margin-top: 15px;
        }

        .notice-msg .cta-container {
            padding: 10px 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            z-index: 500;
        }

        .notice-msg .cta-container img {
            display: none;
        }

        .notice-msg .cta-container a {
            font-size: 1.2rem;
            text-transform: uppercase;
            white-space: nowrap;
            min-width: 100px;
            width: 100%;
        }

        .sph-lightbox {
            position: fixed;
            width: 100%;
            height: 100vh;
            z-index: -1;
            top: 0;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-transition: opacity 200ms ease-in-out;
            -o-transition: opacity 200ms ease-in-out;
            transition: opacity 200ms ease-in-out;
            opacity: 0;
        }

        .sph-lightbox.show {
            opacity: 1;
            z-index: 9999;
        }

        .sph-lightbox .overlay {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            z-index: -1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .sph-lightbox .custom-ligthbox {
            max-width: 1280px !important;
            width: 100%;
            padding: 3vw;
            margin: auto;
        }

        .sph-lightbox .custom-ligthbox.sm {
            max-width: 800px;
        }

        .sph-lightbox .custom-ligthbox .close-lightbox {
            text-align: right;
            margin: 5px auto;
        }

        .sph-lightbox .custom-ligthbox .close-lightbox img {
            width: 1rem;
            height: auto;
            margin-right: 10px;
        }

        .sph-lightbox .custom-ligthbox .close-lightbox span {
            color: #f5f5f5;
        }

        .sph-lightbox .custom-ligthbox .lightbox-content {
            background-color: #f5f5f5;
            min-height: 100px;
            width: 100%;
            max-height: 80vh;
            overflow-y: auto;
        }

        .sph-lightbox .custom-ligthbox .lightbox-content .page-content {
            padding: 0;
        }

        .in-lightbox {
            position: fixed;
            width: 100%;
            height: 100vh;
            z-index: -1;
            top: 0;
            left: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-transition: opacity 200ms ease-in-out;
            -o-transition: opacity 200ms ease-in-out;
            transition: opacity 200ms ease-in-out;
            opacity: 0;
        }

        .in-lightbox.show {
            opacity: 1;
            z-index: 9999;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .in-lightbox .overlay {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            z-index: -1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .in-lightbox .custom-ligthbox {
            max-width: 1280px;
            width: 100%;
            padding: 3vw;
            margin: auto;
        }

        .in-lightbox .custom-ligthbox.sm {
            max-width: 800px;
        }

        .in-lightbox .custom-ligthbox .close-lightbox {
            text-align: right;
            margin: 5px auto;
            cursor: pointer;
        }

        .in-lightbox .custom-ligthbox .close-lightbox img {
            width: 1rem;
            height: auto;
            margin-right: 10px;
        }

        .in-lightbox .custom-ligthbox .close-lightbox span {
            color: #f5f5f5;
        }

        .in-lightbox .custom-ligthbox .lightbox-content {
            background-color: #f5f5f5;
            min-height: 100px;
            width: 100%;
            max-height: 80vh;
            overflow-y: auto;
            padding: 24px;
        }

        .in-lightbox .custom-ligthbox .lightbox-content .lightbox-header {
            border-bottom: solid 1px #bdbdbd;
        }

        .in-lightbox .custom-ligthbox .lightbox-content .lightbox-body {
            padding: 8px 0;
            border-bottom: solid 1px #bdbdbd;
        }

        .in-lightbox .custom-ligthbox .lightbox-content .lightbox-footer {
            padding-top: 15px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .in-lightbox .custom-ligthbox .lightbox-content .page-content {
            padding: 0;
        }

        .plan-selector-container {
            border: solid 1px #bdbdbd;
            margin-bottom: 8px;
        }

        .address-book {
            display: none;
            opacity: 0;
        }

        .address-book.active {
            display: block;
        }

        .address-book#select-address {
            opacity: 1;
        }

        .address-book .address-book-header h2 {
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            margin: 0;
            margin-top: 5px;
        }

        .address-book .address-book-header h2 img {
            height: 1.8rem;
            margin-top: -5px;
            margin-right: 8px;
        }

        .address-book .address-book-body {
            margin: 15px 0;
        }

        .address-book .address-book-body .address-list {
            margin-top: 15px;
            width: 100%;
        }

        .address-book .address-book-body .address-list.table .address-col {
            padding: 5px;
        }

        .address-book .address-book-body .address-list.table .address-col.header {
            font-weight: bold;
        }

        .address-book .address-book-body .address-list.table .address-col.mid {
            width: 25%;
        }

        .address-book .address-book-body .address-list.table .address-col.long {
            width: 35%;
        }

        .address-book .address-book-body .address-list.table .address-col.short {
            width: 10%;
        }

        .address-book .address-book-body .address-list.table .address-list-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        .address-book .address-book-body .address-list.table .address-list-body {
            width: 100%;
        }

        .address-book .address-book-body .address-list.table .address-list-body .address-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: top;
            -ms-flex-align: top;
            align-items: top;
            width: 100%;
            background-color: #fff;
            border-bottom: solid 1px #333333;
        }

        .address-book .address-book-body .address-list.table .address-list-body .address-row.active {
            background-color: #d4f3e7;
        }

        .address-book .address-book-body .address-list.table .address-list-body .address-row .ceil p {
            width: 100%;
            margin: 0;
        }

        .address-book .address-book-body .address-list.table .address-list-body .address-row .ceil .tag {
            margin: 0;
        }

        .address-book .checkout-details-container {
            display: block;
            width: 100%;
            max-width: 600px;
            padding: 0 5px;
        }

        .address-book .checkout-details-container .saved-cards-container {
            background: #fff;
            border: 1px solid #848484;
            border-radius: 6px;
            padding: 24px;
        }

        .address-book .checkout-details-container .paynow-container {
            text-align: right;
            width: 100%;
        }

        .address-book .checkout-details-container .checkout-details-header {
            border-bottom: solid 1px #333333;
            padding: 10px 0;
        }

        .address-book .checkout-details-container .checkout-details-header h2 {
            margin: 0;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 300;
        }

        .address-book .checkout-details-container .checkout-details-header p {
            margin: 0;
        }

        .address-book .checkout-details-container .checkout-details-body {
            padding: 24px 0;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details {
            margin: 15px 0;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details .checkout-nm {
            margin-bottom: 8px;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details .checkout-addr {
            margin-bottom: 8px;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details .checkout-addr p {
            margin: 0;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details .checkout-change-addr {
            cursor: pointer;
            display: inline-block;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details .checkout-change-addr:hover {
            color: #005daa;
        }

        .address-book .checkout-details-container .checkout-details-body .checkout-details .checkout-change-addr p {
            text-decoration: underline;
        }

        .address-book .checkout-details-container .checkout-details-body .form-element {
            margin: 0;
        }

        .address-book .checkout-details-container .checkout-details-body .form-element label::before {
            left: -15px;
            right: unset;
        }

        .checkout-error-server {
            background-color: #ffc3c3;
            padding: 9px 12px;
            border-radius: 4px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: none;
            margin: 0 0 20px;
        }

        .checkout-error-server.active {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .checkout-error-server img {
            display: block;
            margin-right: 15px;
            width: 32px;
            height: 32px;
        }

        .checkout-error-server p {
            color: #f5f5f5;
            display: inline-block;
            font-weight: bold;
            margin: 0;
        }

        .col-divider {
            height: 1px;
            background-color: #bdbdbd;
            width: 100%;
            margin: 8px 5% 25px 0;
        }

        .lightbox {
            padding: 25px;
        }

        .lightbox .page-content {
            margin: 0;
        }

        .tab-container {
            width: 100%;
            margin: 16px 0;
        }

        .tab-container .tab-header ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            background-color: rgba(199, 209, 234, 0.23);
            overflow: hidden;
            border-bottom: solid 1px #bdbdbd;
        }

        .tab-container .tab-header ul li {
            list-style: none;
            display: inline-block;
            -webkit-box-flex: 100;
            -ms-flex-positive: 100;
            flex-grow: 100;
            text-align: center;
            padding: 16px;
            background-color: rgba(199, 209, 234, 0.23);
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            font-weight: 500;
            cursor: pointer;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
        }

        .tab-container .tab-header ul li.active {
            background-color: transparent;
            -webkit-box-shadow: inset 0 -7px 1px -4px #1993f7;
            box-shadow: inset 0 -7px 1px -4px #1993f7;
            cursor: default;
            outline-offset: -2px;
            color: #1993f7;
        }

        .tab-container .tab-header ul li.active:hover {
            opacity: 1;
        }

        .tab-container .tab-header ul li:hover {
            opacity: 0.6;
        }

        .tab-container .tab-body {
            padding: 25px 0;
        }

        .tab-container .tab-body .tab-option-body {
            padding: 16px 0;
            display: none;
            width: 100%;
        }

        .tab-container .tab-body .tab-option-body.active {
            display: block;
        }

        .multi-select-container {
            border-radius: 4px;
            border: solid 1px #bdbdbd;
            background-color: #f8f9fa;
            position: relative;
        }

        .multi-select-container .multi-select-options {
            position: absolute;
            width: 100%;
            background-color: #f5f5f5;
            border: solid 1px #bdbdbd;
            display: none;
        }

        .multi-select-container .multi-select-selected {
            background-image: url("../images/icons/ArrowDown.svg");
            background-size: 16px;
            background-position: center right 8px;
            background-repeat: no-repeat;
        }

        .multi-select-container .multi-select-selected .selected {
            width: 100%;
            margin: 0;
            border: 0;
            font-size: 1.125rem;
            border-bottom: solid 1px #bdbdbd;
            padding: 8px;
            background-color: transparent;
            border-radius: 0;
            cursor: pointer;
            display: block;
        }

        .multi-select-container .multi-select-selected .selected.icon {
            padding: 4px 16px;
        }

        .multi-select-container .multi-select-selected .selected img {
            height: 50px;
            width: auto;
        }

        .multi-select-container .multi-select-selected .selected:hover {
            opacity: 0.8;
        }

        .multi-select-container .multi-select-selected .selected::before {
            display: none;
        }

        .multi-select-container .multi-select-selected .selected:last-child {
            border: 0;
        }

        .multi-select-container .multi-select-selected .selected p {
            display: inline-block;
            margin: 0 16px;
        }

        .contact-lighbox {
            position: fixed;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            top: 0;
            left: 0;
            display: none;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            opacity: 1;
        }

        .contact-lighbox .overlay-contact {
            height: 100vh;
            width: 100vw;
            background: black;
            position: fixed;
            z-index: 1250;
            top: 0;
            left: 0;
            opacity: 0.7;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contact-lighbox .contact-modal-box {
            margin: auto 20px;
            padding: 26px;
            background: white;
            z-index: 1250;
            width: 100%;
        }

        .contact-lighbox .contact-modal-box .contact-modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contact-lighbox .contact-modal-box .contact-modal-header p {
            line-height: 1.1875rem;
            padding-left: 30px;
        }

        .contact-lighbox .contact-modal-box .contact-modal-body {
            border-top: 1px solid black;
            text-align: center;
            padding-top: 2px;
        }

        .adv-select {
            padding: 10px 13px;
            background-color: #f5f5f5;
            border-radius: 4px;
            border: solid 1px #005daa;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            -webkit-transition: all 100ms ease-in;
            -o-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
            width: 100%;
        }

        .quick-link-single {
            background-color: linear-gradient(312.11deg, #ffffff 0.93%, #dfe1e7 98.22%);
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            border-radius: 34px;
            padding: 25px;
            margin: 15px 0;
            min-height: 310px;
        }

        .quick-link-single .quick-link-header {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .quick-link-single .quick-link-header h3 {
            width: 100%;
        }

        .quick-link-single .quick-link-header img {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 50px;
            height: auto;
            margin-left: 15px;
        }

        .quick-link-single .quick-link-body ul.question {
            padding: 0;
            margin: 0;
        }

        .quick-link-single .quick-link-body ul.question > li {
            list-style: none;
            border-bottom: solid 1px #bdbdbd;
        }

        .quick-link-single .quick-link-body ul.question > li a {
            color: #333333;
            padding: 10px 0;
            display: block;
        }

        .quick-link-single .quick-link-body ul.question > li:last-child {
            border: 0;
        }

        .quick-link-single .quick-link-body a.faq-cat {
            color: #333333;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            border-bottom: solid 1px #555555;
            padding: 8px 0;
        }

        .quick-link-single .quick-link-body a.faq-cat p {
            width: 100%;
            margin: 0;
        }

        .quick-link-single .quick-link-body a.faq-cat img {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 32px;
            height: auto;
            margin-right: 4px;
        }

        .quick-link-single .quick-link-body a.faq-cat:hover {
            background-color: #c7d1ea;
        }

        .faq-topics-container {
            padding: 25px 0;
        }

        .faq-topics-container .faq-topics-single {
            background-color: #fff;
        }

        .faq-topics-container .faq-topics-single .faq-topics-header {
            border-bottom: solid 1px #555555;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding: 5px;
            cursor: pointer;
            -webkit-transition: all 150ms ease-in;
            -o-transition: all 150ms ease-in;
            transition: all 150ms ease-in;
            position: relative;
        }

        .faq-topics-container .faq-topics-single .faq-topics-header::after {
            content: '';
            background-image: url("../images/icons/add.svg");
            background-size: 16px;
            background-repeat: no-repeat;
            width: 16px;
            height: 16px;
            position: absolute;
            top: 50%;
            margin-top: -6px;
            right: 10px;
            z-index: 99;
            display: block;
        }

        .faq-topics-container .faq-topics-single .faq-topics-header:hover {
            background-color: #c7d1ea;
        }

        .faq-topics-container .faq-topics-single .faq-topics-header.active::after {
            content: '';
            background-image: url("../images/icons/minus.svg");
        }

        .faq-topics-container .faq-topics-single .faq-topics-header p.heading {
            width: 100%;
            font-size: 1.5rem;
            margin: 0;
        }

        .faq-topics-container .faq-topics-single .faq-topics-header img {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 50px;
            height: auto;
            margin-right: 15px;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body {
            width: 100%;
            display: none;
            padding: 25px 0;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body.active {
            display: block;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-qn {
            border-bottom: solid 1px #555555;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding: 10px;
            cursor: pointer;
            -webkit-transition: all 150ms ease-in;
            -o-transition: all 150ms ease-in;
            transition: all 150ms ease-in;
            position: relative;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-qn::after {
            content: '';
            background-image: url("../images/icons/ArrowDown.svg");
            background-size: 16px;
            background-repeat: no-repeat;
            width: 16px;
            height: 16px;
            position: absolute;
            top: 50%;
            margin-top: -6px;
            right: 10px;
            z-index: 99;
            display: block;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-qn p {
            margin: 0;
            width: 90%;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-qn p.bold-text {
            font-weight: 500;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-qn.active::after {
            background-image: url("../images/icons/ArrowUp.svg");
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-ans {
            padding: 15px;
            max-width: 800px;
            width: 100%;
            display: none;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-ans a {
            color: #005daa;
        }

        .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-ans table thead {
            background-color: #c7d1ea;
            font-weight: 500;
        }

        .faq-topics-container .faq-topics-single.sub .faq-topics-header {
            background-color: #f5f5f5;
            padding: 11px;
            border: 0;
            margin: 4px;
            border-radius: 4px;
        }

        .faq-topics-container .faq-topics-single.sub .faq-topics-header p.heading {
            font-size: 1.25rem;
            font-weight: 500;
        }

        .faq-topics-container .faq-topics-single.sub .faq-topics-header:hover {
            background-color: #c7d1ea;
        }

        .faq-help-container {
            border-radius: 4px;
            background-color: #f5f5f5;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            padding: 3% 5%;
            width: 100%;
            margin: 20px 0;
        }

        .faq-help-container a {
            color: #005daa;
            display: inline-block;
        }

        .search-result-container {
            background-color: #fff;
            padding: 3% 5%;
            margin: 20px 0 30px;
        }

        .faq-search-item-single .faq-search-qn {
            border-bottom: solid 1px #555555;
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding: 10px;
            cursor: pointer;
            -webkit-transition: all 150ms ease-in;
            -o-transition: all 150ms ease-in;
            transition: all 150ms ease-in;
            position: relative;
        }

        .faq-search-item-single .faq-search-qn::after {
            content: '';
            background-image: url("../images/icons/ArrowDown.svg");
            background-size: 16px;
            background-repeat: no-repeat;
            width: 16px;
            height: 16px;
            position: absolute;
            top: 50%;
            margin-top: -6px;
            right: 10px;
            z-index: 99;
            display: block;
        }

        .faq-search-item-single .faq-search-qn p {
            margin: 0;
            width: 90%;
        }

        .faq-search-item-single .faq-search-qn p.bold-text {
            font-weight: 500;
        }

        .faq-search-item-single .faq-search-qn.active::after {
            background-image: url("../images/icons/ArrowUp.svg");
        }

        .faq-search-item-single .faq-search-preview {
            padding: 15px;
            max-width: 800px;
            width: 100%;
            position: relative;
            margin-bottom: 15px;
        }

        .faq-search-item-single .faq-search-preview span {
            text-decoration: underline;
        }

        .faq-search-item-single .faq-search-ans {
            padding: 15px;
            max-width: 800px;
            width: 100%;
            display: none;
            position: relative;
        }

        .faq-search-item-single .faq-search-ans a {
            color: #005daa;
        }

        .faq-search-item-single .faq-search-ans table thead {
            background-color: #c7d1ea;
            font-weight: 500;
        }

        .faq-search-item-single .faq-search-ans .read-toggle {
            content: 'Read less';
            text-decoration: underline;
            margin-bottom: 15px;
            width: 100%;
            height: 1rem;
        }

        .faq-search-item-single .faq-belong {
            font-size: 0.875rem;
            padding: 0 15px;
            max-width: 800px;
            width: 100%;
        }

        .secure-lock {
            color: #0ac27b;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 8px;
        }

        .secure-lock img {
            height: 20px;
            width: auto;
            display: inline-block;
            padding-right: 8px;
        }

        .select2-results__options li:hover {
            background-color: #c7d1ea;
        }

        .ui-loader {
            display: none;
        }

        .ui-selectmenu-button-text {
            display: none !important;
        }

        .comp .comp-holder {
            position: relative;
            width: 100%;
        }

        .comp.maintenance-notifier {
            z-index: 1249;
            height: auto;
            background: #a7dff7;
            position: absolute;
            top: 100%;
            opacity: 0.9;
            padding-top: 8px;
            color: black;
        }

        .comp.maintenance-notifier ul {
            margin: 0;
            list-style-type: none;
            padding-bottom: 0.5rem;
        }

        .comp.maintenance-notifier li {
            margin-left: -20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .comp.maintenance-notifier li p {
            padding: 0 40px 0 8px;
            margin: 0;
            line-height: normal;
        }

        .comp.maintenance-notifier li a {
            color: black;
            text-decoration: underline;
            -webkit-text-decoration-style: solid;
            text-decoration-style: solid;
        }

        .comp.maintenance-notifier .maintenance-dismiss {
            width: 18px;
            top: 50%;
            margin-top: -9px;
            position: absolute;
            right: 1.375rem;
        }

        .comp.ie-notifier {
            position: relative;
            z-index: 1250;
            width: 100%;
            background: #fff7cd;
            color: black;
            padding-top: 8px;
        }

        .comp.ie-notifier ul {
            margin: 0;
            list-style-type: none;
            padding-bottom: 0.5rem;
        }

        .comp.ie-notifier li {
            margin-left: -20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .comp.ie-notifier li p {
            padding: 0 8px;
            margin: 0;
            line-height: normal;
        }

        .comp.cookie-notifier {
            background: #c7d1ea;
            padding-top: 8px;
        }

        .comp.cookie-notifier ul {
            margin: 0;
            list-style-type: none;
            padding-left: 0;
        }

        .comp.cookie-notifier li {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .comp.cookie-notifier li p {
            padding: 0 8px;
            margin: 0;
            line-height: normal;
        }

        .comp.cookie-notifier li a {
            margin-top: 15px;
            color: black;
            text-decoration: underline;
            -webkit-text-decoration-style: solid;
            text-decoration-style: solid;
        }

        .comp.cookie-notifier p {
            padding: 0 8px;
            margin: 0;
            line-height: normal;
        }

        .comp.comp-carousel-thb {
            position: absolute;
            left: 0;
            width: 100%;
            height: 6px;
            bottom: 10%;
            z-index: 10;
        }

        .comp.comp-carousel-thb .comp-holder {
            height: 100%;
            padding: 0;
        }

        .comp.comp-carousel-thb .carousel-scale {
            border-bottom: solid 1px #fff;
        }

        .comp.comp-carousel-thb .carousel-scale .carousel-block {
            height: 6px;
            width: 0;
            display: block;
            background-color: #fff;
        }

        .comp.comp-carousel-thb.inverse {
            position: relative;
            bottom: auto;
            margin-bottom: 50px;
        }

        .comp.comp-carousel-thb.inverse .comp-holder {
            padding: 0;
        }

        .comp.comp-carousel-thb.inverse .carousel-scale {
            border-bottom: solid 1px #333333;
            width: 100%;
        }

        .comp.comp-carousel-thb.inverse .carousel-scale .carousel-block {
            width: 20px;
            background-color: #333333;
        }

        .comp.comp-hero-carousel {
            width: 100%;
            margin: auto;
        }

        .comp.comp-hero-carousel .carousel-container {
            width: 100%;
            position: relative;
            overflow: hidden;
            height: 70vh;
            margin: auto;
            min-height: 600px;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper {
            height: 100%;
            display: inline-block;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel {
            width: 100vw;
            height: 100%;
            position: relative;
            float: left;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel a {
            display: block;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img {
            width: 100%;
            height: 100%;
            position: absolute;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 70px 5% 0;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-fore-img {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-fore-img img {
            width: 100%;
            height: auto;
            max-width: 1280px;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content {
            width: 100%;
            max-width: 1280px;
            height: 100%;
            position: relative;
            margin: auto;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px 35px;
            display: block;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content {
            display: block;
            color: #333333;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content h1 {
            line-height: 100%;
            font-weight: 700;
            font-family: "Crimson Text", serif;
            font-size: 1.85rem;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content h1::before {
            background-color: transparent;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content h3 {
            font-size: 1rem;
            font-style: italic;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content p.body-text {
            width: 100%;
        }

        .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content p.carousel-cat {
            display: block;
            margin-top: 25px;
        }

        .comp.comp-hero-carousel .slide-container {
            position: absolute;
            top: 0;
            width: 20%;
            max-width: 65px;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 10px;
            opacity: 1;
            -webkit-transition: opacity 200ms ease-in-out;
            -o-transition: opacity 200ms ease-in-out;
            transition: opacity 200ms ease-in-out;
            cursor: pointer;
            z-index: 30;
        }

        .comp.comp-hero-carousel .slide-container .btn {
            background-color: #005daa;
            display: inline-block;
            border-radius: 50%;
            padding: 3px 8px;
            width: 35px;
            height: 35px;
            -webkit-box-shadow: -3px 2px 3px rgba(0, 0, 0, 0.25);
            box-shadow: -3px 2px 3px rgba(0, 0, 0, 0.25);
        }

        .comp.comp-hero-carousel .slide-container .btn img {
            width: 100%;
            height: 100%;
        }

        .comp.comp-hero-carousel .slide-container .btn.prev-btn img {
            margin-left: -2px;
        }

        .comp.comp-hero-carousel .slide-container .btn.next-btn img {
            margin-right: -2px;
        }

        .comp.comp-hero-carousel .slide-container.prev {
            left: 0;
        }

        .comp.comp-hero-carousel .slide-container.prev:hover {
            opacity: 1;
        }

        .comp.comp-hero-carousel .slide-container.next {
            right: 0;
        }

        .comp.comp-hero-carousel .slide-container.next:hover {
            opacity: 1;
        }

        .comp.comp-hero-carousel .carousel-thb {
            position: absolute;
            bottom: 15%;
            width: 100%;
            left: 0;
            text-align: center;
            z-index: 600;
            bottom: 10%;
        }

        .comp.comp-hero-carousel .carousel-thb .dash-container {
            display: inline-block;
        }

        .comp.comp-hero-carousel .carousel-thb .dash-container .dash-cont {
            width: 20px;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 40px;
            margin: 0 7px;
            cursor: pointer;
        }

        .comp.comp-hero-carousel .carousel-thb .dash-container .dash-cont .dash-thb {
            background-color: #f5f5f5;
            height: 5px;
            -webkit-filter: drop-shadow(3px 2px 5px #252564);
            filter: drop-shadow(3px 2px 5px #252564);
            border-radius: 500px;
            width: 100%;
            display: block;
            -webkit-transition: background-color 300ms ease-in-out;
            -o-transition: background-color 300ms ease-in-out;
            transition: background-color 300ms ease-in-out;
        }

        .comp.comp-hero-carousel .carousel-thb .dash-container .dash-cont .dash-thb.active {
            background-color: #005daa;
        }

        .comp.comp-hero-carousel .carousel-thb .dash-container .dash-cont:hover .dash-thb {
            background-color: #c7d1ea;
        }

        .comp.comp-publication-listing-container {
            position: relative;
        }

        .comp.comp-publication-listing-container img {
            width: 100%;
        }

        .comp.comp-publication-listing-container .publication-single {
            min-height: 50vh;
            background-color: #333333;
            margin: 15px 0;
            position: relative;
        }

        .comp.comp-publication-listing-container .publication-single:hover .color-overlay {
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }

        .comp.comp-publication-listing-container .publication-single:hover .image-wrapper img {
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }

        .comp.comp-publication-listing-container .publication-single a {
            display: block;
            color: #f5f5f5;
        }

        .comp.comp-publication-listing-container .publication-single .image-wrapper {
            height: 100%;
        }

        .comp.comp-publication-listing-container .publication-single .image-wrapper img {
            -webkit-transition: -webkit-filter 300ms ease-in-out;
            transition: -webkit-filter 300ms ease-in-out;
            -o-transition: filter 300ms ease-in-out;
            transition: filter 300ms ease-in-out;
            transition: filter 300ms ease-in-out, -webkit-filter 300ms ease-in-out;
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }

        .comp.comp-publication-listing-container .publication-single .pub-icon {
            position: absolute;
            bottom: 25px;
            right: 15px;
            z-index: 200;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            z-index: 10;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            color: #f5f5f5;
            padding: 25px 15px;
            -webkit-transition: -webkit-filter 300ms ease-in-out;
            transition: -webkit-filter 300ms ease-in-out;
            -o-transition: filter 300ms ease-in-out;
            transition: filter 300ms ease-in-out;
            transition: filter 300ms ease-in-out, -webkit-filter 300ms ease-in-out;
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay:hover {
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content {
            display: block;
            width: 100%;
            position: relative;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content h2 {
            font-weight: 300;
            width: 100%;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content h2.cn {
            font-family: "Noto Serif SC";
            font-weight: 400;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content .cta-container {
            text-align: left;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content p.tagline {
            width: 100%;
            height: auto;
            line-height: 1.2;
            overflow: hidden;
            -webkit-transition: height 300ms ease-in-out;
            -o-transition: height 300ms ease-in-out;
            transition: height 300ms ease-in-out;
            margin-bottom: 30px;
            display: block;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content p.tagline.cn {
            font-family: "Noto Sans SC";
            font-weight: 400;
        }

        .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content a {
            display: inline-block;
        }

        .comp.comp-student-listing-container {
            position: relative;
        }

        .comp.comp-student-listing-container img {
            width: 100%;
        }

        .comp.comp-student-listing-container .publication-single {
            background-color: #fff;
            margin: 15px 0;
        }

        .comp.comp-student-listing-container .publication-single a {
            display: block;
            color: #1c1c45;
        }

        .comp.comp-student-listing-container .publication-single .pub-icon {
            position: absolute;
            bottom: 25px;
            right: 15px;
            z-index: 200;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            z-index: 10;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(-1.71%, rgba(255, 255, 255, 0)), color-stop(63.45%, #fff));
            background: -o-linear-gradient(top, rgba(255, 255, 255, 0) -1.71%, #fff 63.45%);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) -1.71%, #fff 63.45%);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            color: #1c1c45;
            padding: 25px 15px;
            -webkit-transition: -webkit-filter 300ms ease-in-out;
            transition: -webkit-filter 300ms ease-in-out;
            -o-transition: filter 300ms ease-in-out;
            transition: filter 300ms ease-in-out;
            transition: filter 300ms ease-in-out, -webkit-filter 300ms ease-in-out;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content {
            display: block;
            width: 100%;
            position: relative;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content h2 {
            font-weight: 300;
            width: 100%;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content h2.cn {
            font-family: "Noto Serif SC";
            font-weight: 400;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content .cta-container {
            text-align: left;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content p.tagline {
            width: 100%;
            height: auto;
            line-height: 1.2;
            display: block;
            overflow: hidden;
            -webkit-transition: height 300ms ease-in-out;
            -o-transition: height 300ms ease-in-out;
            transition: height 300ms ease-in-out;
            margin-bottom: 30px;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content p.tagline.cn {
            font-family: "Noto Sans SC";
            font-weight: 400;
        }

        .comp.comp-student-listing-container .publication-single .color-overlay .pub-content a {
            display: inline-block;
            border-color: #1c1c45;
        }

        .comp.comp-hero-header .hero-image-bg {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right bottom;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 16px 0;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text {
            display: block;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text img {
            max-width: 250px;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text h1 {
            width: 60%;
            font-size: 1.625rem;
            font-weight: 500;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text h2 {
            font-weight: 300;
            width: 60%;
            font-size: 1.325rem;
            line-height: 0.95;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text.st {
            color: #182d56;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text.zb {
            color: #a40034;
        }

        .comp.comp-hero-header .hero-image-bg .hero-header-text p {
            width: 60%;
            display: none;
        }

        .comp.comp-page-header.inverse {
            color: #f5f5f5;
        }

        .comp.comp-page-header.static-header {
            height: 69px;
            background-color: white;
            padding-top: 10px;
        }

        .comp.comp-page-header .hero-image-bg {
            height: 100%;
            min-height: 120px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: right bottom;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: top;
            -ms-flex-align: top;
            align-items: top;
        }

        .comp.comp-page-header .hero-image-bg .hero-header-text img {
            margin-bottom: 8px;
            max-height: 25px;
        }

        .comp.comp-page-header .hero-image-bg .hero-header-text h1 {
            width: 60%;
            font-size: 1.625rem;
            font-weight: 500;
        }

        .comp.comp-page-header .hero-image-bg .hero-header-text h2 {
            width: 60%;
            font-size: 1.525rem;
            line-height: 1;
        }

        .comp.comp-page-header .hero-image-bg .hero-header-text.st {
            color: #182d56;
        }

        .comp.comp-page-header .hero-image-bg .hero-header-text.zb {
            color: #a40034;
        }

        .comp.comp-page-header .hero-image-bg .hero-header-text p {
            width: 60%;
            display: none;
        }

        .comp.comp-page-short-header.inverse {
            color: #f5f5f5;
        }

        .comp.comp-page-short-header .hero-image-bg {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: top;
            -ms-flex-align: top;
            align-items: top;
            padding: 20px 0 40px;
        }

        .comp.comp-page-short-header .hero-image-bg .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text {
            width: 100%;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text img {
            max-width: 250px;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text h1 {
            width: 60%;
            font-size: 1.625rem;
            font-weight: 500;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text h2 {
            font-weight: 300;
            width: 60%;
            font-size: 1.325rem;
            line-height: 0.95;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text.st {
            color: #182d56;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text.zb {
            color: #a40034;
        }

        .comp.comp-page-short-header .hero-image-bg .hero-header-text p {
            width: 60%;
            display: none;
        }

        .comp.comp-user-plan-overview {
            position: relative;
            width: 100%;
            background-color: #848484;
            font-size: 1rem;
        }

        .comp.comp-user-plan-overview .card-body {
            color: #f5f5f5;
            display: block;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            padding: 8px 0;
        }

        .comp.comp-user-plan-overview .card-body .sub-label {
            display: block;
            width: 100%;
            background-image: url("../images/icons/ArrowDown-white.svg");
            background-repeat: no-repeat;
            background-size: 24px;
            background-position: center right 15px;
            padding: 0 15px;
        }

        .comp.comp-user-plan-overview .card-body .sub-label img {
            margin-right: 4px;
        }

        .comp.comp-user-plan-overview .card-body .sub-plan {
            display: block;
            padding: 8px 15px;
            margin: 0;
            margin-left: -3vw;
            width: 100%;
            -webkit-box-flex: unset;
            -ms-flex-positive: unset;
            flex-grow: unset;
            height: 0;
            opacity: 0;
            -webkit-transition: all 300ms ease-in-out;
            -o-transition: all 300ms ease-in-out;
            transition: all 300ms ease-in-out;
            position: absolute;
            background-color: #848484;
            z-index: 500;
            cursor: pointer;
        }

        .comp.comp-user-plan-overview .card-body .sub-plan.open {
            height: auto;
            opacity: 1;
        }

        .comp.comp-user-plan-overview .card-body .sub-plan li {
            list-style: none;
            display: block;
            padding-bottom: 4px;
        }

        .comp.comp-user-plan-overview .card-body .sub-plan li p {
            margin: 0;
        }

        .comp.comp-user-plan-overview .card-body .sub-plan li p .contract {
            color: #a7dff6;
        }

        .comp.comp-plan-selector-featured {
            margin-top: -1.5rem;
            padding: 0 2.5vw;
        }

        .comp.comp-plan-selector-featured h1 {
            margin: 50px 0 14px;
            text-align: center;
            font-size: 1.85rem;
            display: block;
        }

        .comp.comp-plan-selector-featured .plan-single h2 {
            text-align: center;
            text-transform: capitalize;
            font-size: 1.875rem;
        }

        .comp.comp-plan-selector-featured .plan-single .promo-wrapper {
            width: 100%;
            text-align: center;
            position: absolute;
            top: -1rem;
            text-transform: uppercase;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-specs {
            padding: 0 22px;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-specs p.note {
            margin-bottom: 0.5rem;
        }

        .comp.comp-plan-selector-featured .plan-single.solo .card-plan {
            padding: 0;
        }

        .comp.comp-plan-selector-featured .plan-single.solo .plan-specs {
            padding: 25px 15px 0;
        }

        .comp.comp-plan-selector-featured .plan-single.solo .plan-value {
            height: 100%;
            padding: 10px 15px 2.8rem;
            max-height: 100vh;
        }

        .comp.comp-plan-selector-featured .plan-single.solo .plan-value::after {
            display: none;
        }

        .comp.comp-plan-selector-featured .plan-single.solo .plan-value h2 {
            font-size: 1.25rem;
            font-weight: 700;
            text-align: left;
            border-bottom: solid 1px #f5f5f5;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value {
            padding: 10px 15px 1.8rem;
            color: #f5f5f5;
            background-color: #555555;
            min-height: auto;
            overflow: hidden;
            height: auto;
            -webkit-transition: max-height 0.15s ease-out;
            -o-transition: max-height 0.15s ease-out;
            transition: max-height 0.15s ease-out;
            max-height: 6rem;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value a {
            color: #f5f5f5;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value.active {
            max-height: 100vh;
            -webkit-transition: max-height 0.25s ease-in;
            -o-transition: max-height 0.25s ease-in;
            transition: max-height 0.25s ease-in;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value.active::after {
            content: 'close';
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value::after {
            content: 'view more';
            font-weight: 500;
            width: 100%;
            text-align: center;
            padding-top: 2.5rem;
            height: 4rem;
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(196, 196, 196, 0)), color-stop(50%, #c4c4c4));
            background-image: -o-linear-gradient(top, rgba(196, 196, 196, 0) 0%, #c4c4c4 50%);
            background-image: linear-gradient(180deg, rgba(196, 196, 196, 0) 0%, #c4c4c4 50%);
            position: absolute;
            bottom: 0;
            left: 0;
            text-transform: uppercase;
            color: #fff;
            letter-spacing: 3px;
            font-size: 0.9rem;
            display: block;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value.st {
            background-color: #8a94a8;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value.st::after {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(196, 196, 196, 0)), color-stop(50%, #8a94a8));
            background-image: -o-linear-gradient(top, rgba(196, 196, 196, 0) 0%, #8a94a8 50%);
            background-image: linear-gradient(180deg, rgba(196, 196, 196, 0) 0%, #8a94a8 50%);
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value.zb {
            background-color: #a56278;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value.zb::after {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(196, 196, 196, 0)), color-stop(50%, #a56278));
            background-image: -o-linear-gradient(top, rgba(196, 196, 196, 0) 0%, #a56278 50%);
            background-image: linear-gradient(180deg, rgba(196, 196, 196, 0) 0%, #a56278 50%);
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value .val-prop {
            margin: 0;
            padding: 0;
            margin-left: 25px;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value .val-prop li {
            list-style: none;
            margin-bottom: 8px;
            position: relative;
            font-size: 1rem;
            line-height: 115%;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value .val-prop li.bold-text {
            font-weight: 700;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value .val-prop li::before {
            content: '';
            width: 1.5rem;
            height: 1.5rem;
            background-image: url("../images/icons/circle-tick-white.svg");
            background-size: cover;
            background-repeat: no-repeat;
            display: block;
            position: absolute;
            margin-left: -2rem;
        }

        .comp.comp-plan-selector-featured .plan-single .plan-value .val-prop li span.tip {
            color: #1c1c45;
            text-decoration: underline;
        }

        .comp.comp-plan-selector-featured .plan-single .uprice {
            min-height: auto;
        }

        .comp.comp-plan-selector-featured .plan-single .current-price-container {
            padding: 0;
            text-align: center;
            border-bottom: solid 1px #6c757d;
            letter-spacing: 1px;
            margin: 0.5rem auto;
            line-height: 2rem;
            display: block;
            width: 90%;
            font-size: 2.375rem;
        }

        .comp.comp-plan-selector-featured .plan-single .current-price-container p {
            font-size: 2.375rem;
        }

        .comp.comp-plan-selector-featured .plan-single .current-price-container p.discount {
            color: #f36b3a;
        }

        .comp.comp-plan-selector-featured .plan-single .current-price-container .sec {
            color: #adb5bd;
        }

        .comp.comp-plan-selector-featured .plan-single .current-price-container sup {
            font-size: 1.375rem;
            top: -0.8rem;
        }

        .comp.comp-plan-selector-vanila .plan-single h2 {
            font-size: 2.18rem;
            text-align: left;
            border-bottom: solid 1px #005daa;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-specs {
            padding: 0 22px;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-value {
            padding: 20px 30px;
            color: #f5f5f5;
            min-height: auto;
            color: #333333;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-value .val-prop {
            margin: 0;
            padding: 0;
            margin-left: 25px;
            font-size: 1rem;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-value .val-prop li {
            list-style: none;
            margin-bottom: 8px;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-value .val-prop li::before {
            content: '';
            width: 1.5rem;
            height: 1.5rem;
            background-image: url("../images/icons/circle-tick-green.svg");
            background-size: cover;
            background-repeat: no-repeat;
            display: block;
            position: absolute;
            left: 20px;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-value .val-prop li span.tip {
            color: #1c1c45;
            text-decoration: underline;
        }

        .comp.comp-plan-selector-vanila .plan-single .plan-footer {
            padding: 0 30px;
        }

        .comp.comp-plan-selector-vanila .plan-single .uprice {
            min-height: auto;
        }

        .comp.comp-plan-selector-vanila .plan-single .current-price-container {
            padding: 0;
            text-align: center;
            letter-spacing: 1px;
            display: inline-block;
            width: 100%;
        }

        .comp.comp-plan-selector-vanila .plan-single .current-price-container p {
            font-size: 2.2rem;
        }

        .comp.comp-plan-selector-vanila .plan-single .current-price-container p.discount {
            color: #f36b3a;
        }

        .comp.comp-plan-selector-vanila .plan-single .current-price-container .sec {
            color: #adb5bd;
        }

        .comp.comp-plan-selector-vanila .plan-single .current-price-container sup {
            font-size: 1.2rem;
        }

        .comp.comp-plan-selector-vanila .plan-single form.form-style {
            text-align: center;
        }

        .comp.comp-plan-selector-vanila .plan-single form.form-style button {
            margin-top: 10px;
        }

        .comp.comp-plan-options .right-rail-scroll {
            max-height: unset;
            padding-right: 15px;
        }

        .comp.comp-plan-options .container {
            padding: 0;
        }

        .comp.comp-plan-options h2.regular {
            font-size: 2rem;
            font-weight: 500;
        }

        .comp.comp-plan-options h3.regular {
            font-size: 1.375rem;
            font-weight: 300;
        }

        .comp.comp-plan-options h3.regular.help-heading {
            font-weight: 700;
            font-size: 1.6875rem;
        }

        .comp.comp-plan-options hr {
            width: 100%;
        }

        .comp.comp-plan-options .options-container {
            padding: 5px;
        }

        .comp.comp-plan-options .options-container .product-image {
            text-align: center;
        }

        .comp.comp-plan-options .options-container .product-image img {
            max-height: 150px;
            width: auto;
        }

        .comp.comp-plan-options .options-container .product-help {
            border-top: solid 1px #333333;
            text-align: left;
            cursor: pointer;
            position: relative;
            padding: 5px;
        }

        .comp.comp-plan-options .options-container .product-help img {
            height: 2rem;
            width: auto;
            margin: 5px;
            float: left;
        }

        .comp.comp-promo-listing-single .promo-single {
            margin-bottom: 30px;
        }

        .comp.comp-promo-listing-single .promo-single .image-container img {
            width: 100%;
            -webkit-box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
            box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
        }

        .comp.comp-promo-listing-single .promo-content {
            padding: 15px 30px;
            text-align: center;
        }

        .comp.comp-promo-listing-single .promo-content h3 {
            text-align: center;
        }

        .comp.comp-promo-listing-single .promo-content .subtext-container.cn p {
            font-family: "Noto Sans SC";
        }

        .comp.comp-promo-title {
            padding: 30px 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .comp.comp-promo-title .title {
            text-align: center;
        }

        .comp.comp-promo-title .title h2 {
            font-size: 2.375rem;
            max-width: 900px;
            width: 100%;
            margin: auto;
            padding-bottom: 15px;
            font-weight: 500;
        }

        .comp.comp-promo-title .title p {
            width: 100%;
            max-width: 773px;
            margin: auto;
        }

        .comp.comp-promo-title.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-single-val-prop {
            color: #333333;
            padding: 30px 0;
        }

        .comp.comp-promo-single-val-prop .img-container {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .comp.comp-promo-single-val-prop .img-container img {
            width: 100%;
        }

        .comp.comp-promo-single-val-prop .comp-content {
            max-width: 500px;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .comp.comp-promo-single-val-prop.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-single-val-prop.left .img-container {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .comp.comp-promo-single-val-prop.left .comp-content {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .comp.comp-promo-single-val-prop.right .img-container {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            margin-left: 0%;
        }

        .comp.comp-promo-single-val-prop.right .comp-content {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            margin-left: 16.66667%;
        }

        .comp.comp-promo-hero-panel {
            padding: 30px 0;
            height: 70vh;
            min-height: 600px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333333;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
        }

        .comp.comp-promo-hero-panel.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-hero-panel.left .img-container {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .comp.comp-promo-hero-panel.left .comp-content {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .comp.comp-promo-hero-panel.right .img-container {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
        }

        .comp.comp-promo-hero-panel.right .comp-content {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
        }

        .comp.comp-promo-hero-panel.center {
            padding: 0;
        }

        .comp.comp-promo-hero-panel.center .comp-holder {
            height: 100%;
        }

        .comp.comp-promo-hero-panel.center .container {
            height: 100%;
        }

        .comp.comp-promo-hero-panel.center .container .row {
            height: 100%;
        }

        .comp.comp-promo-hero-panel.center .img-container {
            display: none;
        }

        .comp.comp-promo-hero-panel.center .comp-content {
            position: unset;
            height: 100%;
        }

        .comp.comp-promo-hero-panel.center .comp-content .hero-content {
            position: absolute;
            bottom: 0;
            left: 0;
            min-height: 100px;
            text-align: center;
            width: 100%;
        }

        .comp.comp-promo-hero-panel .img-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
        }

        .comp.comp-promo-hero-panel .img-container img {
            width: 100%;
        }

        .comp.comp-promo-hero-panel .comp-content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .comp.comp-promo-hero-panel .comp-content h1 {
            font-size: 2.8125rem;
        }

        .comp.comp-promo-hero-panel .comp-content .subtext {
            padding: 10px;
        }

        .comp.comp-promo-steps {
            padding: 30px 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .comp.comp-promo-steps .steps-container {
            text-align: center;
        }

        .comp.comp-promo-steps .steps-container h2 {
            font-size: 2.375rem;
            max-width: 900px;
            width: 100%;
            margin: auto;
            padding-bottom: 15px;
            font-weight: 500;
        }

        .comp.comp-promo-steps .steps-container p {
            width: 100%;
            max-width: 773px;
            margin: auto;
        }

        .comp.comp-promo-steps .steps-container .steps-single {
            text-align: center;
            width: 100%;
            padding: 50px;
        }

        .comp.comp-promo-steps .steps-container .steps-single li {
            list-style: none;
            width: 15%;
            max-width: 200px;
            display: inline-block;
            margin-right: 50px;
            position: relative;
        }

        .comp.comp-promo-steps .steps-container .steps-single li img {
            width: 70%;
        }

        .comp.comp-promo-steps .steps-container .steps-single li .item-text {
            font-weight: 500;
            font-size: 1.25rem;
        }

        .comp.comp-promo-steps .steps-container .steps-single li:last-child {
            margin-right: 0;
        }

        .comp.comp-promo-steps .steps-container .steps-single li:last-child::after {
            display: none;
        }

        .comp.comp-promo-steps .steps-container .steps-single li::after {
            content: '';
            width: 50px;
            height: 100%;
            background-image: url("../images/icons/next-step-default.svg");
            background-size: 10px;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            right: -50px;
            display: block;
        }

        .comp.comp-promo-steps.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-steps.inverse .steps-container .steps-single {
            color: #f5f5f5;
        }

        .comp.comp-promo-steps.inverse .steps-container .steps-single::after {
            background-image: url("../images/icons/next-step-white.svg");
        }

        .comp.comp-promo-video-panel {
            position: relative;
        }

        .comp.comp-promo-video-panel .video-container {
            height: 55vw;
            width: 100%;
            max-height: 70vh;
        }

        .comp.comp-promo-video-panel .text-container {
            position: relative;
            width: 100%;
        }

        .comp.comp-promo-video-panel .text-container .title {
            width: 80vw;
            max-width: 800px;
            padding: 15px;
            text-align: center;
            margin: -1rem auto 0;
        }

        .comp.comp-promo-video-panel .text-container .title h2 {
            font-weight: 500;
            font-size: 1.125rem;
        }

        .comp.comp-promo-video-panel.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-carousel-default {
            color: #333333;
            padding: 30px 0;
        }

        .comp.comp-promo-carousel-default h2 {
            text-align: center;
            font-weight: 500;
            font-size: 1.525rem;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container {
            padding: 0;
            position: relative;
            height: 80vh;
            max-height: 100%;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single {
            display: block;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 0;
            -webkit-transition: opacity 500ms ease-in-out;
            -o-transition: opacity 500ms ease-in-out;
            transition: opacity 500ms ease-in-out;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single.active {
            opacity: 1;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .img-container {
            width: 100%;
            height: auto;
            display: block;
            padding: 15px 50px;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .img-container img {
            width: 100%;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container {
            width: 100%;
            height: 50%;
            display: block;
            padding: 15px 50px;
            vertical-align: middle;
            overflow-y: auto;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container h2 {
            text-align: left;
            font-weight: 600;
            font-size: 1.575rem;
            padding-bottom: 15px;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container h3 {
            font-size: 1.125rem;
            font-weight: 600;
            padding-bottom: 15px;
        }

        .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container h3 strong {
            font-weight: 700;
        }

        .comp.comp-promo-carousel-default .slide-container {
            position: absolute;
            top: 0;
            width: 40px;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            opacity: 1;
            -webkit-transition: opacity 200ms ease-in-out;
            -o-transition: opacity 200ms ease-in-out;
            transition: opacity 200ms ease-in-out;
            cursor: pointer;
            z-index: 30;
            margin: 0;
        }

        .comp.comp-promo-carousel-default .slide-container .btn {
            background-color: #005daa;
            display: inline-block;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 20px;
            -webkit-box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        }

        .comp.comp-promo-carousel-default .slide-container .btn.prev-btn {
            background-image: url("../images/icons/arrow-left-white.svg");
        }

        .comp.comp-promo-carousel-default .slide-container .btn.next-btn {
            background-image: url("../images/icons/arrow-right-white.svg");
        }

        .comp.comp-promo-carousel-default .slide-container.prev {
            left: 15px;
        }

        .comp.comp-promo-carousel-default .slide-container.prev:hover {
            opacity: 1;
        }

        .comp.comp-promo-carousel-default .slide-container.next {
            right: 15px;
        }

        .comp.comp-promo-carousel-default .slide-container.next:hover {
            opacity: 1;
        }

        .comp.comp-promo-carousel-default .carousel-thb {
            bottom: -25px;
        }

        .comp.comp-promo-carousel-default.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-carousel-image {
            color: #333333;
            padding: 0;
        }

        .comp.comp-promo-carousel-image .image-carousel-container {
            max-width: 720px;
            width: 100%;
            height: 100%;
            margin-right: 0;
            position: relative;
            float: right;
            max-height: 100%;
            height: 40vh;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container {
            padding: 0;
            position: relative;
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container .promo-carousel-image-wrapper .promo-carousel-image-single {
            display: block;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            opacity: 0;
            top: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 0;
            -webkit-transition: opacity 500ms ease-in-out;
            -o-transition: opacity 500ms ease-in-out;
            transition: opacity 500ms ease-in-out;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container .promo-carousel-image-wrapper .promo-carousel-image-single.active {
            opacity: 1;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container .promo-carousel-image-wrapper .promo-carousel-image-single .img-container {
            width: 100%;
            height: 100%;
            display: block;
            padding: 30px 50px;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container .promo-carousel-image-wrapper .promo-carousel-image-single .img-container img {
            width: 100%;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container {
            position: absolute;
            top: 0;
            width: 40px;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            opacity: 1;
            -webkit-transition: opacity 200ms ease-in-out;
            -o-transition: opacity 200ms ease-in-out;
            transition: opacity 200ms ease-in-out;
            cursor: pointer;
            z-index: 30;
            margin: 0;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container .btn {
            background-color: #005daa;
            display: inline-block;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 20px;
            -webkit-box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container .btn.prev-btn {
            background-image: url("../images/icons/arrow-left-white.svg");
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container .btn.next-btn {
            background-image: url("../images/icons/arrow-right-white.svg");
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container.prev {
            left: 15px;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container.prev:hover {
            opacity: 1;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container.next {
            right: 15px;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .slide-container.next:hover {
            opacity: 1;
        }

        .comp.comp-promo-carousel-image .image-carousel-container .carousel-thb {
            bottom: 15px;
        }

        .comp.comp-promo-carousel-image .image-carousel-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            max-width: 720px;
            width: 100%;
            height: 100%;
            overflow-y: auto;
        }

        .comp.comp-promo-carousel-image .image-carousel-text .html-content-container {
            width: 100%;
            display: block;
            padding: 30px;
        }

        .comp.comp-promo-carousel-image .image-carousel-text .html-content-container h2 {
            text-align: left;
            font-weight: 600;
            font-size: 1.575rem;
            padding-bottom: 15px;
        }

        .comp.comp-promo-carousel-image .image-carousel-text .html-content-container h3 {
            font-size: 1.125rem;
            font-weight: 600;
            padding-bottom: 15px;
        }

        .comp.comp-promo-carousel-image .image-carousel-text .html-content-container h3 strong {
            font-weight: 700;
        }

        .comp.comp-promo-carousel-waterwheel {
            color: #333333;
            text-align: center;
        }

        .comp.comp-promo-carousel-waterwheel .promo-waterwheel-wrapper {
            margin: 30px 0;
            padding-bottom: 25px;
            background-size: cover;
            background-position: center;
        }

        .comp.comp-promo-carousel-waterwheel h2 {
            text-align: center;
            font-weight: 500;
            font-size: 1.575rem;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container {
            margin: 30px auto;
            position: relative;
            height: 60vh;
            width: 100%;
            max-width: 1440px;
            max-height: 400px;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper {
            position: absolute;
            top: 0;
            left: 50%;
            width: 100%;
            height: 100%;
            min-width: 1200px;
            margin-left: -600px;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single {
            position: absolute;
            opacity: 0;
            -webkit-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: 240px;
            padding: 0;
            text-align: center;
            transition: all 0.3s ease-in-out;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            left: 40%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            z-index: 10;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.active {
            opacity: 1;
            z-index: 0;
            left: 40%;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            z-index: 200;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.first-item {
            left: 60%;
            opacity: .7;
            -webkit-transform: scale(0.6);
            -ms-transform: scale(0.6);
            transform: scale(0.6);
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            z-index: 200;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.next-item {
            left: 75%;
            opacity: .4;
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
            -webkit-transform: scale(0.6);
            -ms-transform: scale(0.6);
            transform: scale(0.6);
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            z-index: 200;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.prev-item {
            left: 5%;
            opacity: .4;
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
            -webkit-transform: scale(0.6);
            -ms-transform: scale(0.6);
            transform: scale(0.6);
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            z-index: 200;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.last-item {
            left: 20%;
            opacity: .7;
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
            -webkit-transform: scale(0.6);
            -ms-transform: scale(0.6);
            transform: scale(0.6);
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            z-index: 200;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single .img-container {
            width: 100%;
            display: block;
            text-align: center;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single .img-container img {
            width: 80%;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single .text-container {
            width: 100%;
            height: 50%;
            display: block;
            padding: 0 15px;
            vertical-align: middle;
            overflow-y: auto;
        }

        .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single .text-container h2 {
            font-weight: 600;
            font-size: 1.375rem;
            padding-bottom: 5px;
        }

        .comp.comp-promo-carousel-waterwheel .slide-container {
            position: absolute;
            top: 0;
            width: 20%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            opacity: 1;
            -webkit-transition: opacity 200ms ease-in-out;
            -o-transition: opacity 200ms ease-in-out;
            transition: opacity 200ms ease-in-out;
            cursor: pointer;
            z-index: 500;
            margin: 0;
        }

        .comp.comp-promo-carousel-waterwheel .slide-container:hover {
            opacity: 0.78;
        }

        .comp.comp-promo-carousel-waterwheel .slide-container .btn {
            background-color: #005daa;
            display: block;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 20px;
            -webkit-box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        }

        .comp.comp-promo-carousel-waterwheel .slide-container .btn.prev-btn {
            background-image: url("../images/icons/arrow-left-white.svg");
        }

        .comp.comp-promo-carousel-waterwheel .slide-container .btn.next-btn {
            background-image: url("../images/icons/arrow-right-white.svg");
        }

        .comp.comp-promo-carousel-waterwheel .slide-container.prev {
            left: 0;
            padding-left: 15px;
        }

        .comp.comp-promo-carousel-waterwheel .slide-container.next {
            right: 0;
            padding-right: 15px;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }

        .comp.comp-promo-carousel-waterwheel .carousel-thb {
            bottom: 15px;
        }

        .comp.comp-promo-carousel-waterwheel.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-accordian-hori {
            padding: 30px 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .comp.comp-promo-accordian-hori .accordian-container {
            padding: 0 5%;
        }

        .comp.comp-promo-accordian-hori .accordian-container h2 {
            font-size: 1.575rem;
            max-width: 900px;
            width: 100%;
            margin: auto;
            padding-bottom: 15px;
            font-weight: 500;
            text-align: center;
        }

        .comp.comp-promo-accordian-hori .accordian-container .accordian-single {
            width: 100%;
        }

        .comp.comp-promo-accordian-hori .accordian-container .accordian-single .accordian-header {
            width: 100%;
            padding: 15px 0;
            background-image: url("../images/icons/ArrowDown.svg");
            background-position: right center;
            background-repeat: no-repeat;
            background-size: 40px;
            font-size: 1.25rem;
            text-align: left;
            cursor: pointer;
            padding-right: 50px;
        }

        .comp.comp-promo-accordian-hori .accordian-container .accordian-single .accordian-body {
            display: none;
        }

        .comp.comp-promo-accordian-hori .accordian-question-footer {
            border-top: solid 1px #333333;
            text-align: center;
        }

        .comp.comp-promo-accordian-hori .accordian-question-footer a {
            text-decoration: underline;
            display: block;
            color: #0a9fc2;
            padding: 8px;
        }

        .comp.comp-promo-accordian-hori .accordian-question-footer a:hover {
            opacity: 0.8;
        }

        .comp.comp-promo-accordian-hori.inverse {
            color: #f5f5f5;
        }

        .comp.comp-promo-accordian-hori.inverse .accordian-single .accordian-header {
            background-image: url("../images/icons/ArrowDown-white.svg");
        }

        .comp.comp-promo-accordian-hori.inverse .accordian-single .accordian-body .table {
            color: #f5f5f5;
            border-color: #f5f5f5 !important;
        }

        .comp.comp-promo-accordian-hori.inverse .accordian-single .accordian-body .table td {
            border: 1px solid #f5f5f5;
            border-color: #f5f5f5;
        }

        .comp.comp-promo-accordian-hori.inverse .accordian-question-footer {
            border-top: solid 1px #f5f5f5;
        }

        .comp.comp-checkout-steps {
            padding: 15px 0;
            width: 100%;
        }

        .comp.comp-checkout-steps .steps-single {
            margin-right: 15px;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .comp.comp-checkout-steps .steps-single .steps-icon {
            width: 50px;
            height: 50px;
            padding: 10px;
            border-radius: 500px;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            background-color: #f5f5f5;
            display: inline-block;
            margin-right: 8px;
        }

        .comp.comp-checkout-steps .steps-single .steps-icon img {
            width: 100%;
        }

        .comp.comp-checkout-steps .steps-single .steps-icon img.default {
            display: block;
        }

        .comp.comp-checkout-steps .steps-single .steps-icon img.active {
            display: none;
        }

        .comp.comp-checkout-steps .steps-single .steps-icon img.done {
            display: none;
        }

        .comp.comp-checkout-steps .steps-single .step-label {
            display: inline-block;
            font-weight: 500;
            color: #bdbdbd;
        }

        .comp.comp-checkout-steps .steps-single.active .steps-icon {
            background-color: #1c1c45;
        }

        .comp.comp-checkout-steps .steps-single.active .steps-icon img.default {
            display: none;
        }

        .comp.comp-checkout-steps .steps-single.active .steps-icon img.active {
            display: block;
        }

        .comp.comp-checkout-steps .steps-single.active .steps-icon img.done {
            display: none;
        }

        .comp.comp-checkout-steps .steps-single.active .step-label {
            color: #1c1c45;
            border-bottom: solid 2px #1c1c45;
            font-weight: 700;
        }

        .comp.comp-checkout-steps .steps-single.done .steps-icon {
            background-color: #f5f5f5;
        }

        .comp.comp-checkout-steps .steps-single.done .steps-icon img.default {
            display: none;
        }

        .comp.comp-checkout-steps .steps-single.done .steps-icon img.active {
            display: none;
        }

        .comp.comp-checkout-steps .steps-single.done .steps-icon img.done {
            display: block;
        }

        .comp.comp-checkout-steps .steps-single.done .step-label {
            color: #333333;
        }

        .comp.comp-country-code {
            display: inline-block;
            position: absolute;
            top: 50%;
            margin-top: -21px;
            left: 7px;
            height: 42px;
        }

        .comp.comp-country-code select {
            display: none;
        }

        .comp.comp-country-code .select-selected {
            color: #333333;
            padding: 8px 24px 8px 10px;
            border: 1px solid transparent;
            border-color: transparent rgba(0, 0, 0, 0.3) transparent transparent;
            cursor: pointer;
            background-color: #f5f5f5;
            display: inline-block;
            width: 100px;
            position: relative;
        }

        .comp.comp-country-code .select-selected::after {
            position: absolute;
            content: "";
            top: 50%;
            right: 10px;
            margin-top: -3px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #333333 transparent transparent;
        }

        .comp.comp-country-code .select-selected.select-arrow-active::after {
            border-color: transparent transparent #333333;
            top: 50%;
            margin-top: -10px;
        }

        .comp.comp-country-code .select-items {
            position: absolute;
            background-color: #f5f5f5;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            width: 120px;
            max-height: 300px;
            overflow-y: auto;
        }

        .comp.comp-country-code .select-items div {
            color: #333333;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .comp.comp-country-code .select-items div:hover {
            background-color: #c7d1ea;
        }

        .comp.comp-country-code .select-hide {
            display: none;
        }

        .comp.comp-country-code .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .comp.comp-payment-summary .checkout-details-summary h2 {
            margin: 0;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            color: #555555;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container {
            background-color: #dee2e6;
            border-radius: 4px;
            padding: 10px 16px;
            margin: 16px 0;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container.collapsed {
            max-width: 33.33333%;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container .chkout-sum-header {
            width: 100%;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container .chkout-sum-header .sum-header {
            font-size: 1rem;
            width: 82%;
            display: inline-block;
            margin: 0;
            font-weight: 700;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container .chkout-sum-header .btn {
            width: 15%;
            height: auto;
            display: inline-block;
            position: relative;
            padding: 0;
            margin: 0;
            text-align: right;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container .chkout-sum-header .btn img {
            width: 100%;
            max-width: 35px;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container .chkout-sum-body .sum-details {
            margin: 0;
            padding: 0;
        }

        .comp.comp-payment-summary .checkout-details-summary .chkout-sum-container .chkout-sum-body .sum-details li {
            list-style: none;
            margin: 5px 0;
        }

        .comp.comp-payment-summary .order-sum-container {
            padding-top: 15px;
            border-top: solid 1px #bdbdbd;
        }

        .comp.comp-payment-summary .order-sum-container:first-child {
            border: 0;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-header {
            position: relative;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-header .order-header {
            font-size: 1.25rem;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body {
            margin: 15px 0;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            margin: 10px 0;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single .order-item-label {
            width: 75%;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single .order-item-label p {
            margin: 0;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single .order-item-label p.foot-notes {
            color: #bdbdbd;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single .order-item-price {
            width: 25%;
            text-align: right;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single .order-item-price p {
            margin: 0;
        }

        .comp.comp-payment-summary .order-sum-container .order-sum-body .order-item-single .order-item-price p.price {
            font-size: 1.25rem;
        }

        .comp.comp-payment-summary .checkout-details-total {
            position: relative;
            bottom: -25px;
            padding: 15px;
        }

        .comp.comp-payment-summary .checkout-details-total .total-bill-now {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            border-top: solid 1px #333333;
            padding: 10px 0;
            margin: 15px 0;
        }

        .comp.comp-payment-summary .checkout-details-total .total-bill-now .order-item-label {
            width: 75%;
        }

        .comp.comp-payment-summary .checkout-details-total .total-bill-now .order-item-label p {
            font-size: 1.25rem;
        }

        .comp.comp-payment-summary .checkout-details-total .total-bill-now .order-item-price {
            width: 25%;
            text-align: right;
        }

        .comp.comp-payment-summary .checkout-details-total .total-bill-now .order-item-price p {
            margin: 0;
        }

        .comp.comp-payment-summary .checkout-details-total .total-bill-now .order-item-price p.price {
            font-size: 1.25rem;
        }

        .comp.comp-checkout-summary {
            background-color: #fff;
        }

        .comp.comp-checkout-summary .container {
            padding: 0 5px;
        }

        .comp.comp-checkout-summary .checkout-details-order {
            width: 100%;
            border-radius: 4px;
            border: solid 1px #bdbdbd;
        }

        .comp.comp-checkout-summary .checkout-details-order .order-container {
            width: 100%;
        }

        .comp.comp-checkout-summary .checkout-details-order .order-container .order-package {
            width: 100%;
            text-align: center;
            background-color: #f5f5f5;
            border-radius: 4px 4px 0 0;
            padding: 15px;
        }

        .comp.comp-checkout-summary .checkout-details-order .order-container .order-package img {
            width: 80%;
        }

        .comp.comp-checkout-summary .checkout-details-order .order-container .order-package h2 {
            color: #555555;
            font-family: "Barlow", "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            text-align: left;
        }

        .comp.comp-checkout-summary .order-sum-container {
            padding: 15px;
            width: 100%;
            position: relative;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-header {
            position: relative;
            padding: 8px 0;
            border-top: solid 1px #bdbdbd;
            border-bottom: solid 1px #bdbdbd;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-header:first-child {
            border-top: 0;
            padding: 0 0 8px;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-header .order-header {
            font-size: 1.25rem;
            font-weight: 500;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body {
            padding-bottom: 15px;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body:last-child {
            padding: 0;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single {
            width: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            margin: 10px 0;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single:last-child {
            margin: 0;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-label {
            width: 60%;
            margin-right: 3%;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-label p {
            margin: 0;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-label p.foot-notes {
            color: #bdbdbd;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-price {
            width: 37%;
            text-align: right;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-price p {
            margin: 0;
        }

        .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-price p.price {
            font-size: 1.25rem;
        }

        .comp.comp-checkout-summary .checkout-details-total {
            position: relative;
            width: 100%;
        }

        .comp.comp-checkout-summary .checkout-details-total .total-bill-now {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            border-top: solid 2px #bdbdbd;
            padding: 15px;
        }

        .comp.comp-checkout-summary .checkout-details-total .total-bill-now .order-item-label {
            width: 75%;
        }

        .comp.comp-checkout-summary .checkout-details-total .total-bill-now .order-item-label p {
            font-size: 1.25rem;
        }

        .comp.comp-checkout-summary .checkout-details-total .total-bill-now .order-item-price {
            width: 25%;
            text-align: right;
        }

        .comp.comp-checkout-summary .checkout-details-total .total-bill-now .order-item-price p {
            margin: 0;
        }

        .comp.comp-checkout-summary .checkout-details-total .total-bill-now .order-item-price p.price {
            font-size: 1.25rem;
        }

        .comp.comp-checkout-summary .checkout-details-total button.checkout {
            background-color: #005daa;
            color: #f5f5f5;
            border: 0;
            width: 100%;
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1;
            display: none;
        }

        .comp.comp-faq-search .search-container {
            background-color: #f5f5f5;
            height: 100px;
            padding: 20px;
        }

        .comp.comp-faq-search .search-container .search-bar {
            position: relative;
            z-index: 120;
        }

        .comp.comp-faq-search .search-container .search-bar label {
            margin-top: -12px;
        }

        .comp.comp-faq-search .search-container .search-prompt {
            width: 100%;
            display: none;
            z-index: 0;
        }

        .comp.comp-faq-search .search-container .search-prompt ul {
            top: 55px;
            left: 0;
            position: absolute;
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            -webkit-box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            box-shadow: -5px -5px 9px rgba(255, 255, 255, 0), 5px 5px 9px #c5cde6;
            z-index: 99;
            padding: 15px 0;
        }

        .comp.comp-faq-search .search-container .search-prompt ul li {
            list-style: none;
            padding: 5px 15px;
            background-color: #f5f5f5;
        }

        .comp.comp-faq-search .search-container .search-prompt ul li a {
            color: #333333;
            -webkit-transition: all 300ms ease-in;
            -o-transition: all 300ms ease-in;
            transition: all 300ms ease-in;
            display: block;
            width: 100%;
        }

        .comp.comp-faq-search .search-container .search-prompt ul li a p {
            display: inline-block;
            margin: 0;
        }

        .comp.comp-faq-search .search-container .search-prompt ul li a p.tag {
            background-color: #fff;
        }

        .comp.comp-faq-search .search-container .search-prompt ul li a:hover {
            color: #005daa;
        }

        .comp.comp-promo-footer {
            position: -webkit-sticky;
            position: sticky;
            z-index: 999;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .comp.comp-cos-indicator {
            z-index: 999;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .comp.comp-account-sidebar {
            display: none;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav {
            background-color: #f5f5f5;
            padding: 16px;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav ul {
            padding: 0;
            margin: 0;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav ul li {
            list-style: none;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav ul li a {
            font-size: 1rem;
            padding: 2px 0;
            display: block;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav ul li a.bold {
            font-weight: 700;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav ul li p.current {
            display: block;
            text-align: left;
            font-size: 1rem;
            font-weight: 500;
            margin: 0;
            padding: 2px 0;
        }

        .comp.comp-account-sidebar .account-sidebar .account-side-nav ul.child-item {
            padding: 8px 0;
            border-top: solid 1px #bdbdbd;
            border-bottom: solid 1px #bdbdbd;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .btn {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .fade {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .collapsing {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .custom-switch .custom-control-label::after {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .custom-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }

            .custom-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }

            .custom-range::-ms-thumb {
                -ms-transition: none;
                transition: none;
            }

            .custom-control-label::before, .custom-file-label, .custom-select {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .badge {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .progress-bar {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }

            .modal.fade .modal-dialog {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .carousel-item {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .carousel-fade .active.carousel-item-left, .carousel-fade .active.carousel-item-right {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .carousel-control-prev, .carousel-control-next {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }

            .carousel-indicators li {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }

            .container, .container-sm {
                max-width: 540px;
            }

            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-sm-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-sm-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-sm-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-sm-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-sm-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-sm-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-sm-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-sm-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-sm-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-sm-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-sm-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-sm-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-sm-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-sm-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-sm-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-sm-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-sm-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-sm-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-sm-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-sm-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-sm-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-sm-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-sm-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-sm-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-sm-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-sm-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-sm-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.33333%;
            }

            .offset-sm-2 {
                margin-left: 16.66667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.33333%;
            }

            .offset-sm-5 {
                margin-left: 41.66667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.33333%;
            }

            .offset-sm-8 {
                margin-left: 66.66667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.33333%;
            }

            .offset-sm-11 {
                margin-left: 91.66667%;
            }

            .form-inline label {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-bottom: 0;
            }

            .form-inline .form-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0;
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle;
            }

            .form-inline .form-control-plaintext {
                display: inline-block;
            }

            .form-inline .input-group, .form-inline .custom-select {
                width: auto;
            }

            .form-inline .form-check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                width: auto;
                padding-left: 0;
            }

            .form-inline .form-check-input {
                position: relative;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: 0.25rem;
                margin-left: 0;
            }

            .form-inline .custom-control {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .form-inline .custom-control-label {
                margin-bottom: 0;
            }

            .dropdown-menu-sm-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-right {
                right: 0;
                left: auto;
            }

            .navbar-expand-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-sm .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-sm .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-sm .navbar-toggler {
                display: none;
            }

            .card-deck {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px;
            }

            .card-deck .card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px;
            }

            .card-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }

            .card-group > .card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0;
            }

            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group > .card:not(:last-child) .card-img-top, .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }

            .card-group > .card:not(:last-child) .card-img-bottom, .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }

            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group > .card:not(:first-child) .card-img-top, .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }

            .card-group > .card:not(:first-child) .card-img-bottom, .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }

            .card-columns {
                -webkit-column-count: 3;
                -moz-column-count: 3;
                column-count: 3;
                -webkit-column-gap: 1.25rem;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }

            .jumbotron {
                padding: 4rem 2rem;
            }

            .list-group-horizontal-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-sm .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-sm .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-sm .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-sm .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-sm .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }

            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .modal-dialog-scrollable {
                max-height: calc(100% - 3.5rem);
            }

            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 3.5rem);
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }

            .modal-dialog-centered::before {
                height: calc(100vh - 3.5rem);
            }

            .modal-sm {
                max-width: 300px;
            }

            .d-sm-none {
                display: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .flex-sm-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-sm-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-sm-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-sm-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-sm-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-sm-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-sm-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-sm-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .float-sm-left {
                float: left !important;
            }

            .float-sm-right {
                float: right !important;
            }

            .float-sm-none {
                float: none !important;
            }

            .m-sm-0 {
                margin: 0 !important;
            }

            .mt-sm-0, .my-sm-0 {
                margin-top: 0 !important;
            }

            .mr-sm-0, .mx-sm-0 {
                margin-right: 0 !important;
            }

            .mb-sm-0, .my-sm-0 {
                margin-bottom: 0 !important;
            }

            .ml-sm-0, .mx-sm-0 {
                margin-left: 0 !important;
            }

            .m-sm-1 {
                margin: 0.25rem !important;
            }

            .mt-sm-1, .my-sm-1 {
                margin-top: 0.25rem !important;
            }

            .mr-sm-1, .mx-sm-1 {
                margin-right: 0.25rem !important;
            }

            .mb-sm-1, .my-sm-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-sm-1, .mx-sm-1 {
                margin-left: 0.25rem !important;
            }

            .m-sm-2 {
                margin: 0.5rem !important;
            }

            .mt-sm-2, .my-sm-2 {
                margin-top: 0.5rem !important;
            }

            .mr-sm-2, .mx-sm-2 {
                margin-right: 0.5rem !important;
            }

            .mb-sm-2, .my-sm-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-sm-2, .mx-sm-2 {
                margin-left: 0.5rem !important;
            }

            .m-sm-3 {
                margin: 1rem !important;
            }

            .mt-sm-3, .my-sm-3 {
                margin-top: 1rem !important;
            }

            .mr-sm-3, .mx-sm-3 {
                margin-right: 1rem !important;
            }

            .mb-sm-3, .my-sm-3 {
                margin-bottom: 1rem !important;
            }

            .ml-sm-3, .mx-sm-3 {
                margin-left: 1rem !important;
            }

            .m-sm-4 {
                margin: 1.5rem !important;
            }

            .mt-sm-4, .my-sm-4 {
                margin-top: 1.5rem !important;
            }

            .mr-sm-4, .mx-sm-4 {
                margin-right: 1.5rem !important;
            }

            .mb-sm-4, .my-sm-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-sm-4, .mx-sm-4 {
                margin-left: 1.5rem !important;
            }

            .m-sm-5 {
                margin: 3rem !important;
            }

            .mt-sm-5, .my-sm-5 {
                margin-top: 3rem !important;
            }

            .mr-sm-5, .mx-sm-5 {
                margin-right: 3rem !important;
            }

            .mb-sm-5, .my-sm-5 {
                margin-bottom: 3rem !important;
            }

            .ml-sm-5, .mx-sm-5 {
                margin-left: 3rem !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .pt-sm-0, .py-sm-0 {
                padding-top: 0 !important;
            }

            .pr-sm-0, .px-sm-0 {
                padding-right: 0 !important;
            }

            .pb-sm-0, .py-sm-0 {
                padding-bottom: 0 !important;
            }

            .pl-sm-0, .px-sm-0 {
                padding-left: 0 !important;
            }

            .p-sm-1 {
                padding: 0.25rem !important;
            }

            .pt-sm-1, .py-sm-1 {
                padding-top: 0.25rem !important;
            }

            .pr-sm-1, .px-sm-1 {
                padding-right: 0.25rem !important;
            }

            .pb-sm-1, .py-sm-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-sm-1, .px-sm-1 {
                padding-left: 0.25rem !important;
            }

            .p-sm-2 {
                padding: 0.5rem !important;
            }

            .pt-sm-2, .py-sm-2 {
                padding-top: 0.5rem !important;
            }

            .pr-sm-2, .px-sm-2 {
                padding-right: 0.5rem !important;
            }

            .pb-sm-2, .py-sm-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-sm-2, .px-sm-2 {
                padding-left: 0.5rem !important;
            }

            .p-sm-3 {
                padding: 1rem !important;
            }

            .pt-sm-3, .py-sm-3 {
                padding-top: 1rem !important;
            }

            .pr-sm-3, .px-sm-3 {
                padding-right: 1rem !important;
            }

            .pb-sm-3, .py-sm-3 {
                padding-bottom: 1rem !important;
            }

            .pl-sm-3, .px-sm-3 {
                padding-left: 1rem !important;
            }

            .p-sm-4 {
                padding: 1.5rem !important;
            }

            .pt-sm-4, .py-sm-4 {
                padding-top: 1.5rem !important;
            }

            .pr-sm-4, .px-sm-4 {
                padding-right: 1.5rem !important;
            }

            .pb-sm-4, .py-sm-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-sm-4, .px-sm-4 {
                padding-left: 1.5rem !important;
            }

            .p-sm-5 {
                padding: 3rem !important;
            }

            .pt-sm-5, .py-sm-5 {
                padding-top: 3rem !important;
            }

            .pr-sm-5, .px-sm-5 {
                padding-right: 3rem !important;
            }

            .pb-sm-5, .py-sm-5 {
                padding-bottom: 3rem !important;
            }

            .pl-sm-5, .px-sm-5 {
                padding-left: 3rem !important;
            }

            .m-sm-n1 {
                margin: -0.25rem !important;
            }

            .mt-sm-n1, .my-sm-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-sm-n1, .mx-sm-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-sm-n1, .my-sm-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-sm-n1, .mx-sm-n1 {
                margin-left: -0.25rem !important;
            }

            .m-sm-n2 {
                margin: -0.5rem !important;
            }

            .mt-sm-n2, .my-sm-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-sm-n2, .mx-sm-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-sm-n2, .my-sm-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-sm-n2, .mx-sm-n2 {
                margin-left: -0.5rem !important;
            }

            .m-sm-n3 {
                margin: -1rem !important;
            }

            .mt-sm-n3, .my-sm-n3 {
                margin-top: -1rem !important;
            }

            .mr-sm-n3, .mx-sm-n3 {
                margin-right: -1rem !important;
            }

            .mb-sm-n3, .my-sm-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-sm-n3, .mx-sm-n3 {
                margin-left: -1rem !important;
            }

            .m-sm-n4 {
                margin: -1.5rem !important;
            }

            .mt-sm-n4, .my-sm-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-sm-n4, .mx-sm-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-sm-n4, .my-sm-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-sm-n4, .mx-sm-n4 {
                margin-left: -1.5rem !important;
            }

            .m-sm-n5 {
                margin: -3rem !important;
            }

            .mt-sm-n5, .my-sm-n5 {
                margin-top: -3rem !important;
            }

            .mr-sm-n5, .mx-sm-n5 {
                margin-right: -3rem !important;
            }

            .mb-sm-n5, .my-sm-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-sm-n5, .mx-sm-n5 {
                margin-left: -3rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mt-sm-auto, .my-sm-auto {
                margin-top: auto !important;
            }

            .mr-sm-auto, .mx-sm-auto {
                margin-right: auto !important;
            }

            .mb-sm-auto, .my-sm-auto {
                margin-bottom: auto !important;
            }

            .ml-sm-auto, .mx-sm-auto {
                margin-left: auto !important;
            }

            .text-sm-left {
                text-align: left !important;
            }

            .text-sm-right {
                text-align: right !important;
            }

            .text-sm-center {
                text-align: center !important;
            }

            .contact-lighbox .contact-modal-box {
                margin: auto;
                width: 27.75rem;
            }

            .comp.comp-publication-listing-container .publication-single {
                min-height: 430px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }

            .container, .container-sm, .container-md {
                max-width: 720px;
            }

            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-md-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-md-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-md-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-md-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-md-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-md-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-md-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-md-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-md-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-md-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-md-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-md-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-md-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-md-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-md-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-md-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-md-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-md-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-md-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-md-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-md-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-md-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-md-0 {
                margin-left: 0;
            }

            .offset-md-1 {
                margin-left: 8.33333%;
            }

            .offset-md-2 {
                margin-left: 16.66667%;
            }

            .offset-md-3 {
                margin-left: 25%;
            }

            .offset-md-4 {
                margin-left: 33.33333%;
            }

            .offset-md-5 {
                margin-left: 41.66667%;
            }

            .offset-md-6 {
                margin-left: 50%;
            }

            .offset-md-7 {
                margin-left: 58.33333%;
            }

            .offset-md-8 {
                margin-left: 66.66667%;
            }

            .offset-md-9 {
                margin-left: 75%;
            }

            .offset-md-10 {
                margin-left: 83.33333%;
            }

            .offset-md-11 {
                margin-left: 91.66667%;
            }

            .dropdown-menu-md-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-right {
                right: 0;
                left: auto;
            }

            .navbar-expand-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-md .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-md > .container, .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-md .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-md .navbar-toggler {
                display: none;
            }

            .list-group-horizontal-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-md .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-md .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-md .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-md .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-md .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }

            .d-md-none {
                display: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-md-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .flex-md-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-md-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-md-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-md-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-md-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-md-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-md-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-md-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-md-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-md-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .float-md-left {
                float: left !important;
            }

            .float-md-right {
                float: right !important;
            }

            .float-md-none {
                float: none !important;
            }

            .m-md-0 {
                margin: 0 !important;
            }

            .mt-md-0, .my-md-0 {
                margin-top: 0 !important;
            }

            .mr-md-0, .mx-md-0 {
                margin-right: 0 !important;
            }

            .mb-md-0, .my-md-0 {
                margin-bottom: 0 !important;
            }

            .ml-md-0, .mx-md-0 {
                margin-left: 0 !important;
            }

            .m-md-1 {
                margin: 0.25rem !important;
            }

            .mt-md-1, .my-md-1 {
                margin-top: 0.25rem !important;
            }

            .mr-md-1, .mx-md-1 {
                margin-right: 0.25rem !important;
            }

            .mb-md-1, .my-md-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-md-1, .mx-md-1 {
                margin-left: 0.25rem !important;
            }

            .m-md-2 {
                margin: 0.5rem !important;
            }

            .mt-md-2, .my-md-2 {
                margin-top: 0.5rem !important;
            }

            .mr-md-2, .mx-md-2 {
                margin-right: 0.5rem !important;
            }

            .mb-md-2, .my-md-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-md-2, .mx-md-2 {
                margin-left: 0.5rem !important;
            }

            .m-md-3 {
                margin: 1rem !important;
            }

            .mt-md-3, .my-md-3 {
                margin-top: 1rem !important;
            }

            .mr-md-3, .mx-md-3 {
                margin-right: 1rem !important;
            }

            .mb-md-3, .my-md-3 {
                margin-bottom: 1rem !important;
            }

            .ml-md-3, .mx-md-3 {
                margin-left: 1rem !important;
            }

            .m-md-4 {
                margin: 1.5rem !important;
            }

            .mt-md-4, .my-md-4 {
                margin-top: 1.5rem !important;
            }

            .mr-md-4, .mx-md-4 {
                margin-right: 1.5rem !important;
            }

            .mb-md-4, .my-md-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-md-4, .mx-md-4 {
                margin-left: 1.5rem !important;
            }

            .m-md-5 {
                margin: 3rem !important;
            }

            .mt-md-5, .my-md-5 {
                margin-top: 3rem !important;
            }

            .mr-md-5, .mx-md-5 {
                margin-right: 3rem !important;
            }

            .mb-md-5, .my-md-5 {
                margin-bottom: 3rem !important;
            }

            .ml-md-5, .mx-md-5 {
                margin-left: 3rem !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .pt-md-0, .py-md-0 {
                padding-top: 0 !important;
            }

            .pr-md-0, .px-md-0 {
                padding-right: 0 !important;
            }

            .pb-md-0, .py-md-0 {
                padding-bottom: 0 !important;
            }

            .pl-md-0, .px-md-0 {
                padding-left: 0 !important;
            }

            .p-md-1 {
                padding: 0.25rem !important;
            }

            .pt-md-1, .py-md-1 {
                padding-top: 0.25rem !important;
            }

            .pr-md-1, .px-md-1 {
                padding-right: 0.25rem !important;
            }

            .pb-md-1, .py-md-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-md-1, .px-md-1 {
                padding-left: 0.25rem !important;
            }

            .p-md-2 {
                padding: 0.5rem !important;
            }

            .pt-md-2, .py-md-2 {
                padding-top: 0.5rem !important;
            }

            .pr-md-2, .px-md-2 {
                padding-right: 0.5rem !important;
            }

            .pb-md-2, .py-md-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-md-2, .px-md-2 {
                padding-left: 0.5rem !important;
            }

            .p-md-3 {
                padding: 1rem !important;
            }

            .pt-md-3, .py-md-3 {
                padding-top: 1rem !important;
            }

            .pr-md-3, .px-md-3 {
                padding-right: 1rem !important;
            }

            .pb-md-3, .py-md-3 {
                padding-bottom: 1rem !important;
            }

            .pl-md-3, .px-md-3 {
                padding-left: 1rem !important;
            }

            .p-md-4 {
                padding: 1.5rem !important;
            }

            .pt-md-4, .py-md-4 {
                padding-top: 1.5rem !important;
            }

            .pr-md-4, .px-md-4 {
                padding-right: 1.5rem !important;
            }

            .pb-md-4, .py-md-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-md-4, .px-md-4 {
                padding-left: 1.5rem !important;
            }

            .p-md-5 {
                padding: 3rem !important;
            }

            .pt-md-5, .py-md-5 {
                padding-top: 3rem !important;
            }

            .pr-md-5, .px-md-5 {
                padding-right: 3rem !important;
            }

            .pb-md-5, .py-md-5 {
                padding-bottom: 3rem !important;
            }

            .pl-md-5, .px-md-5 {
                padding-left: 3rem !important;
            }

            .m-md-n1 {
                margin: -0.25rem !important;
            }

            .mt-md-n1, .my-md-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-md-n1, .mx-md-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-md-n1, .my-md-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-md-n1, .mx-md-n1 {
                margin-left: -0.25rem !important;
            }

            .m-md-n2 {
                margin: -0.5rem !important;
            }

            .mt-md-n2, .my-md-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-md-n2, .mx-md-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-md-n2, .my-md-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-md-n2, .mx-md-n2 {
                margin-left: -0.5rem !important;
            }

            .m-md-n3 {
                margin: -1rem !important;
            }

            .mt-md-n3, .my-md-n3 {
                margin-top: -1rem !important;
            }

            .mr-md-n3, .mx-md-n3 {
                margin-right: -1rem !important;
            }

            .mb-md-n3, .my-md-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-md-n3, .mx-md-n3 {
                margin-left: -1rem !important;
            }

            .m-md-n4 {
                margin: -1.5rem !important;
            }

            .mt-md-n4, .my-md-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-md-n4, .mx-md-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-md-n4, .my-md-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-md-n4, .mx-md-n4 {
                margin-left: -1.5rem !important;
            }

            .m-md-n5 {
                margin: -3rem !important;
            }

            .mt-md-n5, .my-md-n5 {
                margin-top: -3rem !important;
            }

            .mr-md-n5, .mx-md-n5 {
                margin-right: -3rem !important;
            }

            .mb-md-n5, .my-md-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-md-n5, .mx-md-n5 {
                margin-left: -3rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mt-md-auto, .my-md-auto {
                margin-top: auto !important;
            }

            .mr-md-auto, .mx-md-auto {
                margin-right: auto !important;
            }

            .mb-md-auto, .my-md-auto {
                margin-bottom: auto !important;
            }

            .ml-md-auto, .mx-md-auto {
                margin-left: auto !important;
            }

            .text-md-left {
                text-align: left !important;
            }

            .text-md-right {
                text-align: right !important;
            }

            .text-md-center {
                text-align: center !important;
            }

            h1 {
                font-size: 2.8125rem;
                font-weight: 700;
            }

            h2 {
                font-size: 1.6rem;
            }

            p.note {
                min-height: 55px;
            }

            p.inactive {
                display: block;
            }

            p.option-label {
                font-size: 1.125rem;
            }

            p.subtext {
                font-size: 1.125rem;
            }

            a.app-download-cta {
                height: 40px;
            }

            a.app-download-cta img {
                height: 100%;
            }

            header {
                padding: 8px 15px 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            header .logo-container {
                width: 50px;
            }

            header .top-navi .top-menu {
                display: inline-block;
            }

            header .top-navi .navi-menu {
                margin-bottom: 15px;
            }

            header .top-navi .navi-menu li.nav-item {
                margin: 0 12px 0 0;
            }

            header .top-navi .navi-menu li.nav-item .prompt {
                margin-left: -120px;
            }

            header .top-navi .navi-menu li.nav-item a span.small-txt {
                display: inline-block;
            }

            header .top-navi .navi-menu li.nav-item a span {
                display: inline-block;
            }

            header .top-navi .navi-menu li.nav-item a img {
                width: 1.8rem;
            }

            header .top-navi .navi-menu li.nav-item .account-nav {
                max-width: 330px;
            }

            header .top-navi .nav-drop {
                width: 350px;
                right: -70vw;
                overflow-y: hidden;
            }

            footer .logo-container {
                width: 80px;
            }

            footer .footer-navi {
                margin-bottom: 15px;
            }

            footer .footer-navi ul.footer-menu {
                margin: 0;
            }

            footer .company-links {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            footer .company-links .footer-navi {
                border: 0;
                padding-top: 0;
            }

            footer .newsletter-footer {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .container {
                padding: 0 5vw;
            }

            .section-container .section-header h2::before {
                display: block;
            }

            .section-container .section-header h2::after {
                display: block;
            }

            .section-container .section-body {
                padding: 50px 0;
            }

            .section-container .section-body.pushed-up {
                padding: 0;
                margin-top: -1rem;
            }

            .section-container .section-body .terms-condition li p {
                padding-left: 1.0625rem;
            }

            .section-container .section-body .terms-condition li {
                padding-bottom: 0.6875rem;
            }

            .section-container .section-body .section-holder {
                margin: 0;
            }

            .section-container .section-body .error-container p {
                line-height: inherit;
            }

            .section-container .section-body .error-container {
                padding-bottom: 3.125rem;
            }

            .section-container .section-body .error-container .error-cta-container {
                margin: 1.7rem 0 2.6rem;
            }

            .section-container .section-body .error-container .error-image-placeholder img {
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
            }

            .section-container .section-body .error-container .error-image-placeholder {
                padding-bottom: 2.18rem;
            }

            .section-container .section-body .publication-container {
                margin-right: 1.6875rem;
                margin-bottom: 65px;
            }

            .section-container.overview {
                padding-bottom: 80px;
            }

            .section-container.turret .section-body {
                padding: 0;
            }

            .section-container.dark.slant {
                padding: 2% 0 15%;
                margin: -1% 0 0;
            }

            .section-container.dark.slant.after-slant {
                padding: 12% 0 5%;
            }

            .section-container.dark.slant::before {
                -webkit-transform: rotate(-3deg);
                -ms-transform: rotate(-3deg);
                transform: rotate(-3deg);
            }

            .section-container.dark.slant::after {
                height: 15%;
                -webkit-transform: rotate(3deg);
                -ms-transform: rotate(3deg);
                transform: rotate(3deg);
            }

            .section-container.after-slant {
                padding: 5% 0 50px;
            }

            .section-container.slant {
                padding: 50px 0 80px;
            }

            .section-container.slant.after-slant {
                padding: 175px 0 12%;
                margin-top: 0%;
            }

            .section-container.slant::after {
                height: 15%;
            }

            .capsule {
                font-size: 1rem;
            }

            .capsule img {
                height: 1rem;
            }

            .mob-only {
                display: none !important;
                opacity: 0;
            }

            .desk-only {
                display: block;
                opacity: 1;
            }

            .cta-button {
                margin: 0 5px;
                min-width: unset;
            }

            form.form-style button.cta-button {
                font-size: 1.25rem;
            }

            form.checkout-style .form-element-text.search {
                max-width: 539px;
                margin-top: -2rem;
            }

            form.checkout-style .form-element label .option-details p sup.sec {
                margin-top: 0px;
            }

            .card-cta {
                padding: 1.8rem;
            }

            .card-cta p.subtext {
                font-size: 1.5rem;
            }

            .cta-box span {
                font-size: 1.375rem;
            }

            .carousel-thb {
                bottom: 16%;
            }

            .card-container {
                margin: 50px 0;
            }

            .checkout-container .checkout-content {
                padding-bottom: 15px;
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .checkout-container .checkout-details-container .checkout-details-header h2 {
                font-size: 1.375rem;
            }

            .checkout-container .checkout-right {
                position: relative;
                height: unset;
                padding: 0;
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .checkout-container .checkout-right::before {
                display: none;
            }

            .checkout-container .checkout-right .thirdparty-header {
                padding: 0 25px 15px;
            }

            .tri-down {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            .tri-down.bottom {
                bottom: -20px;
                top: auto;
            }

            .tri-up.center {
                margin-left: -10px;
            }

            .tri-left.center {
                margin-left: -10px;
            }

            .help-box {
                top: auto;
                bottom: 101%;
            }

            .helper-liner {
                display: none;
            }

            .notice-img img {
                width: 100%;
                height: auto;
            }

            .notice-msg {
                margin: 0 auto;
            }

            .notice-msg img {
                width: 100%;
            }

            .notice-msg .cta-container img {
                display: block;
                width: 120px;
            }

            .notice-msg .cta-container a {
                width: unset;
            }

            .sph-lightbox .custom-ligthbox .lightbox-content {
                overflow-y: hidden;
            }

            .in-lightbox .custom-ligthbox .lightbox-content {
                overflow-y: hidden;
            }

            .multi-select-container .multi-select-options {
                position: relative;
                display: block;
                border: 0;
            }

            .multi-select-container .multi-select-selected .selected {
                position: relative;
                display: none;
            }

            .faq-topics-container .faq-topics-single .faq-topics-body {
                padding: 25px;
            }

            .faq-topics-container .faq-topics-single .faq-topics-body .faq-item-single .faq-ans {
                padding: 20px 15px;
            }

            .faq-search-item-single .faq-search-ans {
                padding: 20px 15px;
            }

            .comp.maintenance-notifier {
                padding: 22px 0 0;
                height: 75px;
                width: 100%;
            }

            .comp.ie-notifier {
                padding: 16px 0 0;
            }

            .comp.cookie-notifier .add-flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .comp.cookie-notifier li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .comp.comp-carousel-thb .comp-holder {
                padding: 0 10%;
            }

            .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content h1 {
                font-size: 2.8rem;
            }

            .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content h3 {
                font-size: 1.2rem;
            }

            .comp.comp-hero-carousel .slide-container {
                padding: 15px;
                max-width: 80px;
                margin: 0 25px;
            }

            .comp.comp-hero-carousel .slide-container .btn {
                padding: 0 5px;
            }

            .comp.comp-hero-carousel .slide-container .btn.prev-btn img {
                margin-left: -5px;
            }

            .comp.comp-hero-carousel .slide-container .btn.next-btn img {
                margin-right: -5px;
            }

            .comp.comp-hero-carousel .carousel-thb {
                bottom: 16%;
            }

            .comp.comp-publication-listing-container .publication-single .color-overlay .pub-content p.tagline {
                display: none;
            }

            .comp.comp-student-listing-container .publication-single {
                min-height: 430px;
            }

            .comp.comp-student-listing-container .publication-single .color-overlay .pub-content p.tagline {
                display: none;
            }

            .comp.comp-hero-header .hero-image-bg {
                background-position: center;
                background-size: cover;
                max-height: 240px;
                height: 56vh;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .comp.comp-hero-header .hero-image-bg .hero-header-text img {
                max-width: 500px;
            }

            .comp.comp-hero-header .hero-image-bg .hero-header-text h1 {
                font-size: 3.2rem;
            }

            .comp.comp-hero-header .hero-image-bg .hero-header-text p {
                display: block;
            }

            .comp.comp-page-header .hero-image-bg {
                height: 56vh;
                background-position: center;
                background-size: cover;
                max-height: 230px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .comp.comp-page-header .hero-image-bg .hero-header-text img {
                max-height: 45px;
            }

            .comp.comp-page-header .hero-image-bg .hero-header-text h1 {
                font-size: 3.2rem;
            }

            .comp.comp-page-header .hero-image-bg .hero-header-text h2 {
                font-size: 2.375rem;
            }

            .comp.comp-page-header .hero-image-bg .hero-header-text p {
                display: block;
            }

            .comp.comp-page-short-header .hero-image-bg {
                background-position: center;
                background-size: cover;
                max-height: 230px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .comp.comp-page-short-header .hero-image-bg .hero-header-text img {
                max-width: 500px;
            }

            .comp.comp-page-short-header .hero-image-bg .hero-header-text h1 {
                font-size: 3.2rem;
                width: 100%;
            }

            .comp.comp-page-short-header .hero-image-bg .hero-header-text p {
                display: block;
            }

            .comp.comp-user-plan-overview .card-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .comp.comp-user-plan-overview .card-body .sub-label {
                background-image: unset;
                width: auto;
                display: inline-block;
                padding-left: 0;
            }

            .comp.comp-user-plan-overview .card-body .sub-plan {
                cursor: default;
                position: relative;
                padding: 0;
                padding-left: 4px;
                height: auto;
                width: auto;
                -webkit-box-flex: 100;
                -ms-flex-positive: 100;
                flex-grow: 100;
                display: inline-block;
                opacity: 1;
                margin: auto;
                padding: 0;
            }

            .comp.comp-plan-selector-featured {
                padding: 0;
                margin-top: -3rem;
            }

            .comp.comp-plan-selector-featured h1 {
                font-size: 2.75rem;
                display: none;
            }

            .comp.comp-plan-selector-featured .plan-single h2 {
                font-size: 2.18rem;
            }

            .comp.comp-plan-selector-featured .plan-single.solo .plan-specs {
                padding: 25px 22px 0;
            }

            .comp.comp-plan-selector-featured .plan-single.solo .plan-value {
                padding: 20px 22px;
            }

            .comp.comp-plan-selector-featured .plan-single .plan-value::after {
                display: none;
            }

            .comp.comp-plan-selector-featured .plan-single .plan-value {
                min-height: 250px;
                padding: 20px 22px;
                height: auto;
            }

            .comp.comp-plan-selector-featured .plan-single .uprice {
                min-height: 1rem;
            }

            .comp.comp-plan-selector-featured .plan-single .current-price-container {
                font-size: 3rem;
                margin: 10px auto;
            }

            .comp.comp-plan-selector-featured .plan-single .current-price-container sup {
                font-size: 1.3125rem;
            }

            .comp.comp-plan-selector-vanila .plan-single .plan-value {
                min-height: 210px;
            }

            .comp.comp-plan-selector-vanila .plan-single .uprice {
                min-height: 1.5rem;
            }

            .comp.comp-plan-selector-vanila .plan-single .current-price-container {
                text-align: right;
            }

            .comp.comp-plan-selector-vanila .plan-single form.form-style {
                text-align: left;
            }

            .comp.comp-plan-options .right-rail-scroll {
                max-height: 70vh;
                overflow-y: auto;
                overflow-x: hidden;
            }

            .comp.comp-plan-options .options-container {
                padding: 25px;
            }

            .comp.comp-plan-options .options-container .product-image img {
                max-height: unset;
                width: 100%;
            }

            .comp.comp-plan-options .options-container .product-help {
                text-align: center;
                padding: 15px;
            }

            .comp.comp-plan-options .options-container .product-help img {
                margin: 0 10px;
            }

            .comp.comp-promo-video-panel .text-container .title {
                margin: -3rem auto 0;
                width: 60vw;
            }

            .comp.comp-promo-video-panel .text-container .title h2 {
                font-size: 1.85rem;
            }

            .comp.comp-promo-carousel-default h2 {
                font-size: 2.375rem;
            }

            .comp.comp-promo-carousel-default .promo-carousel-container {
                max-height: 550px;
                height: 60vh;
            }

            .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single {
                display: table;
                padding: 0 30px;
            }

            .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .img-container {
                width: 50%;
                height: 100%;
                display: table-cell;
                padding: 30px;
            }

            .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container {
                width: 50%;
                height: 100%;
                display: table-cell;
                overflow-y: hidden;
                padding: 30px;
            }

            .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container h2 {
                font-size: 2.375rem;
            }

            .comp.comp-promo-carousel-default .promo-carousel-container .promo-carousel-wrapper .promo-carousel-single .html-content-container h3 {
                font-size: 1.5625rem;
            }

            .comp.comp-promo-carousel-default .slide-container.prev {
                left: 0;
            }

            .comp.comp-promo-carousel-default .slide-container.next {
                right: 0;
            }

            .comp.comp-promo-carousel-default .carousel-thb {
                bottom: 0;
            }

            .comp.comp-promo-carousel-image .image-carousel-container {
                max-height: 550px;
                height: 60vh;
            }

            .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container .promo-carousel-image-wrapper .promo-carousel-image-single {
                display: table;
                padding: 0 30px;
            }

            .comp.comp-promo-carousel-image .image-carousel-container .promo-carousel-image-container .promo-carousel-image-wrapper .promo-carousel-image-single .img-container {
                width: 50%;
                display: table-cell;
                padding: 30px;
            }

            .comp.comp-promo-carousel-image .image-carousel-container .carousel-thb {
                bottom: 25px;
            }

            .comp.comp-promo-carousel-image .image-carousel-text {
                overflow-y: hidden;
            }

            .comp.comp-promo-carousel-image .image-carousel-text .html-content-container h2 {
                font-size: 2.375rem;
            }

            .comp.comp-promo-carousel-image .image-carousel-text .html-content-container h3 {
                font-size: 1.5625rem;
            }

            .comp.comp-promo-carousel-waterwheel h2 {
                font-size: 2.375rem;
            }

            .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single {
                width: 300px;
            }

            .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single .text-container {
                width: 50%;
                height: 100%;
                display: table-cell;
                overflow-y: hidden;
            }

            .comp.comp-promo-accordian-hori .accordian-container {
                padding: 0 10%;
            }

            .comp.comp-promo-accordian-hori .accordian-container h2 {
                font-size: 2.375rem;
            }

            .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-label {
                width: 65%;
            }

            .comp.comp-checkout-summary .order-sum-container .order-sum-body .order-item-single .order-item-price {
                width: 32%;
            }

            .comp.comp-faq-search .search-container {
                height: 60px;
            }

            .comp.comp-account-sidebar {
                display: block;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }

            .container, .container-sm, .container-md, .container-lg {
                max-width: 960px;
            }

            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-lg-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-lg-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-lg-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-lg-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-lg-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-lg-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-lg-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-lg-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-lg-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-lg-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-lg-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-lg-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-lg-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-lg-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-lg-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-lg-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-lg-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-lg-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-lg-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-lg-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-lg-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-lg-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-lg-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-lg-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-lg-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-lg-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-lg-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-lg-0 {
                margin-left: 0;
            }

            .offset-lg-1 {
                margin-left: 8.33333%;
            }

            .offset-lg-2 {
                margin-left: 16.66667%;
            }

            .offset-lg-3 {
                margin-left: 25%;
            }

            .offset-lg-4 {
                margin-left: 33.33333%;
            }

            .offset-lg-5 {
                margin-left: 41.66667%;
            }

            .offset-lg-6 {
                margin-left: 50%;
            }

            .offset-lg-7 {
                margin-left: 58.33333%;
            }

            .offset-lg-8 {
                margin-left: 66.66667%;
            }

            .offset-lg-9 {
                margin-left: 75%;
            }

            .offset-lg-10 {
                margin-left: 83.33333%;
            }

            .offset-lg-11 {
                margin-left: 91.66667%;
            }

            .dropdown-menu-lg-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-right {
                right: 0;
                left: auto;
            }

            .navbar-expand-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-lg .navbar-toggler {
                display: none;
            }

            .list-group-horizontal-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-lg .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-lg .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-lg .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-lg .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-lg .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }

            .modal-lg, .modal-xl {
                max-width: 800px;
            }

            .d-lg-none {
                display: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .flex-lg-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-lg-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-lg-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-lg-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-lg-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-lg-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-lg-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-lg-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .float-lg-left {
                float: left !important;
            }

            .float-lg-right {
                float: right !important;
            }

            .float-lg-none {
                float: none !important;
            }

            .m-lg-0 {
                margin: 0 !important;
            }

            .mt-lg-0, .my-lg-0 {
                margin-top: 0 !important;
            }

            .mr-lg-0, .mx-lg-0 {
                margin-right: 0 !important;
            }

            .mb-lg-0, .my-lg-0 {
                margin-bottom: 0 !important;
            }

            .ml-lg-0, .mx-lg-0 {
                margin-left: 0 !important;
            }

            .m-lg-1 {
                margin: 0.25rem !important;
            }

            .mt-lg-1, .my-lg-1 {
                margin-top: 0.25rem !important;
            }

            .mr-lg-1, .mx-lg-1 {
                margin-right: 0.25rem !important;
            }

            .mb-lg-1, .my-lg-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-lg-1, .mx-lg-1 {
                margin-left: 0.25rem !important;
            }

            .m-lg-2 {
                margin: 0.5rem !important;
            }

            .mt-lg-2, .my-lg-2 {
                margin-top: 0.5rem !important;
            }

            .mr-lg-2, .mx-lg-2 {
                margin-right: 0.5rem !important;
            }

            .mb-lg-2, .my-lg-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-lg-2, .mx-lg-2 {
                margin-left: 0.5rem !important;
            }

            .m-lg-3 {
                margin: 1rem !important;
            }

            .mt-lg-3, .my-lg-3 {
                margin-top: 1rem !important;
            }

            .mr-lg-3, .mx-lg-3 {
                margin-right: 1rem !important;
            }

            .mb-lg-3, .my-lg-3 {
                margin-bottom: 1rem !important;
            }

            .ml-lg-3, .mx-lg-3 {
                margin-left: 1rem !important;
            }

            .m-lg-4 {
                margin: 1.5rem !important;
            }

            .mt-lg-4, .my-lg-4 {
                margin-top: 1.5rem !important;
            }

            .mr-lg-4, .mx-lg-4 {
                margin-right: 1.5rem !important;
            }

            .mb-lg-4, .my-lg-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-lg-4, .mx-lg-4 {
                margin-left: 1.5rem !important;
            }

            .m-lg-5 {
                margin: 3rem !important;
            }

            .mt-lg-5, .my-lg-5 {
                margin-top: 3rem !important;
            }

            .mr-lg-5, .mx-lg-5 {
                margin-right: 3rem !important;
            }

            .mb-lg-5, .my-lg-5 {
                margin-bottom: 3rem !important;
            }

            .ml-lg-5, .mx-lg-5 {
                margin-left: 3rem !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .pt-lg-0, .py-lg-0 {
                padding-top: 0 !important;
            }

            .pr-lg-0, .px-lg-0 {
                padding-right: 0 !important;
            }

            .pb-lg-0, .py-lg-0 {
                padding-bottom: 0 !important;
            }

            .pl-lg-0, .px-lg-0 {
                padding-left: 0 !important;
            }

            .p-lg-1 {
                padding: 0.25rem !important;
            }

            .pt-lg-1, .py-lg-1 {
                padding-top: 0.25rem !important;
            }

            .pr-lg-1, .px-lg-1 {
                padding-right: 0.25rem !important;
            }

            .pb-lg-1, .py-lg-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-lg-1, .px-lg-1 {
                padding-left: 0.25rem !important;
            }

            .p-lg-2 {
                padding: 0.5rem !important;
            }

            .pt-lg-2, .py-lg-2 {
                padding-top: 0.5rem !important;
            }

            .pr-lg-2, .px-lg-2 {
                padding-right: 0.5rem !important;
            }

            .pb-lg-2, .py-lg-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-lg-2, .px-lg-2 {
                padding-left: 0.5rem !important;
            }

            .p-lg-3 {
                padding: 1rem !important;
            }

            .pt-lg-3, .py-lg-3 {
                padding-top: 1rem !important;
            }

            .pr-lg-3, .px-lg-3 {
                padding-right: 1rem !important;
            }

            .pb-lg-3, .py-lg-3 {
                padding-bottom: 1rem !important;
            }

            .pl-lg-3, .px-lg-3 {
                padding-left: 1rem !important;
            }

            .p-lg-4 {
                padding: 1.5rem !important;
            }

            .pt-lg-4, .py-lg-4 {
                padding-top: 1.5rem !important;
            }

            .pr-lg-4, .px-lg-4 {
                padding-right: 1.5rem !important;
            }

            .pb-lg-4, .py-lg-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-lg-4, .px-lg-4 {
                padding-left: 1.5rem !important;
            }

            .p-lg-5 {
                padding: 3rem !important;
            }

            .pt-lg-5, .py-lg-5 {
                padding-top: 3rem !important;
            }

            .pr-lg-5, .px-lg-5 {
                padding-right: 3rem !important;
            }

            .pb-lg-5, .py-lg-5 {
                padding-bottom: 3rem !important;
            }

            .pl-lg-5, .px-lg-5 {
                padding-left: 3rem !important;
            }

            .m-lg-n1 {
                margin: -0.25rem !important;
            }

            .mt-lg-n1, .my-lg-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-lg-n1, .mx-lg-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-lg-n1, .my-lg-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-lg-n1, .mx-lg-n1 {
                margin-left: -0.25rem !important;
            }

            .m-lg-n2 {
                margin: -0.5rem !important;
            }

            .mt-lg-n2, .my-lg-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-lg-n2, .mx-lg-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-lg-n2, .my-lg-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-lg-n2, .mx-lg-n2 {
                margin-left: -0.5rem !important;
            }

            .m-lg-n3 {
                margin: -1rem !important;
            }

            .mt-lg-n3, .my-lg-n3 {
                margin-top: -1rem !important;
            }

            .mr-lg-n3, .mx-lg-n3 {
                margin-right: -1rem !important;
            }

            .mb-lg-n3, .my-lg-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-lg-n3, .mx-lg-n3 {
                margin-left: -1rem !important;
            }

            .m-lg-n4 {
                margin: -1.5rem !important;
            }

            .mt-lg-n4, .my-lg-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-lg-n4, .mx-lg-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-lg-n4, .my-lg-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-lg-n4, .mx-lg-n4 {
                margin-left: -1.5rem !important;
            }

            .m-lg-n5 {
                margin: -3rem !important;
            }

            .mt-lg-n5, .my-lg-n5 {
                margin-top: -3rem !important;
            }

            .mr-lg-n5, .mx-lg-n5 {
                margin-right: -3rem !important;
            }

            .mb-lg-n5, .my-lg-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-lg-n5, .mx-lg-n5 {
                margin-left: -3rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mt-lg-auto, .my-lg-auto {
                margin-top: auto !important;
            }

            .mr-lg-auto, .mx-lg-auto {
                margin-right: auto !important;
            }

            .mb-lg-auto, .my-lg-auto {
                margin-bottom: auto !important;
            }

            .ml-lg-auto, .mx-lg-auto {
                margin-left: auto !important;
            }

            .text-lg-left {
                text-align: left !important;
            }

            .text-lg-right {
                text-align: right !important;
            }

            .text-lg-center {
                text-align: center !important;
            }

            h2.regular {
                font-size: 1.3rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            footer .footer-navi ul.footer-menu li > ul.column {
                -webkit-columns: 3;
                -moz-columns: 3;
                columns: 3;
                -webkit-column-fill: auto;
                -moz-column-fill: auto;
                column-fill: auto;
            }

            .section-container.dark.slant {
                padding: 2% 0 8%;
                margin: -1% 0 0;
            }

            .section-container.slant.after-slant {
                padding: 175px 0 9%;
                margin-top: 0%;
            }

            .notice-msg h3 {
                font-size: 2.2rem;
                margin-top: auto;
            }

            .notice-msg .cta-container img {
                width: 50%;
            }

            .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img {
                padding: 0 10%;
            }

            .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content {
                margin-top: auto;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
            }

            .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content .promo-content {
                width: 50%;
                position: absolute;
                padding-top: 0;
                top: auto;
            }

            .comp.comp-publication-listing-container .publication-single .image-wrapper img {
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
            }

            .comp.comp-publication-listing-container .publication-single .color-overlay {
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
            }

            .comp.comp-promo-video-panel .text-container .title h2 {
                font-size: 2.375rem;
            }

            .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper {
                min-width: 0;
                left: 0;
                margin-left: 0;
            }

            .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single .text-container h2 {
                font-size: 2rem;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }

            .container, .container-sm, .container-md, .container-lg, .container-xl {
                max-width: 1140px;
            }

            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-xl-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-xl-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-xl-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-xl-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-xl-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-xl-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-xl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-xl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.33333%;
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-xl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.66667%;
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-xl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.33333%;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-xl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.66667%;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-xl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.33333%;
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-xl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.66667%;
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-xl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.33333%;
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-xl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.66667%;
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-xl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-xl-first {
                -webkit-box-ordinal-group: 0;
                -ms-flex-order: -1;
                order: -1;
            }

            .order-xl-last {
                -webkit-box-ordinal-group: 14;
                -ms-flex-order: 13;
                order: 13;
            }

            .order-xl-0 {
                -webkit-box-ordinal-group: 1;
                -ms-flex-order: 0;
                order: 0;
            }

            .order-xl-1 {
                -webkit-box-ordinal-group: 2;
                -ms-flex-order: 1;
                order: 1;
            }

            .order-xl-2 {
                -webkit-box-ordinal-group: 3;
                -ms-flex-order: 2;
                order: 2;
            }

            .order-xl-3 {
                -webkit-box-ordinal-group: 4;
                -ms-flex-order: 3;
                order: 3;
            }

            .order-xl-4 {
                -webkit-box-ordinal-group: 5;
                -ms-flex-order: 4;
                order: 4;
            }

            .order-xl-5 {
                -webkit-box-ordinal-group: 6;
                -ms-flex-order: 5;
                order: 5;
            }

            .order-xl-6 {
                -webkit-box-ordinal-group: 7;
                -ms-flex-order: 6;
                order: 6;
            }

            .order-xl-7 {
                -webkit-box-ordinal-group: 8;
                -ms-flex-order: 7;
                order: 7;
            }

            .order-xl-8 {
                -webkit-box-ordinal-group: 9;
                -ms-flex-order: 8;
                order: 8;
            }

            .order-xl-9 {
                -webkit-box-ordinal-group: 10;
                -ms-flex-order: 9;
                order: 9;
            }

            .order-xl-10 {
                -webkit-box-ordinal-group: 11;
                -ms-flex-order: 10;
                order: 10;
            }

            .order-xl-11 {
                -webkit-box-ordinal-group: 12;
                -ms-flex-order: 11;
                order: 11;
            }

            .order-xl-12 {
                -webkit-box-ordinal-group: 13;
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-xl-0 {
                margin-left: 0;
            }

            .offset-xl-1 {
                margin-left: 8.33333%;
            }

            .offset-xl-2 {
                margin-left: 16.66667%;
            }

            .offset-xl-3 {
                margin-left: 25%;
            }

            .offset-xl-4 {
                margin-left: 33.33333%;
            }

            .offset-xl-5 {
                margin-left: 41.66667%;
            }

            .offset-xl-6 {
                margin-left: 50%;
            }

            .offset-xl-7 {
                margin-left: 58.33333%;
            }

            .offset-xl-8 {
                margin-left: 66.66667%;
            }

            .offset-xl-9 {
                margin-left: 75%;
            }

            .offset-xl-10 {
                margin-left: 83.33333%;
            }

            .offset-xl-11 {
                margin-left: 91.66667%;
            }

            .dropdown-menu-xl-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-right {
                right: 0;
                left: auto;
            }

            .navbar-expand-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-xl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }

            .navbar-expand-xl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .navbar-expand-xl .navbar-toggler {
                display: none;
            }

            .list-group-horizontal-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-xl .list-group-item:first-child {
                border-bottom-left-radius: 0.25rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-xl .list-group-item:last-child {
                border-top-right-radius: 0.25rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-xl .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xl .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-xl .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }

            .modal-xl {
                max-width: 1140px;
            }

            .d-xl-none {
                display: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .flex-xl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-xl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .flex-xl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-xl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .justify-content-xl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-xl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .align-items-xl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-xl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .float-xl-left {
                float: left !important;
            }

            .float-xl-right {
                float: right !important;
            }

            .float-xl-none {
                float: none !important;
            }

            .m-xl-0 {
                margin: 0 !important;
            }

            .mt-xl-0, .my-xl-0 {
                margin-top: 0 !important;
            }

            .mr-xl-0, .mx-xl-0 {
                margin-right: 0 !important;
            }

            .mb-xl-0, .my-xl-0 {
                margin-bottom: 0 !important;
            }

            .ml-xl-0, .mx-xl-0 {
                margin-left: 0 !important;
            }

            .m-xl-1 {
                margin: 0.25rem !important;
            }

            .mt-xl-1, .my-xl-1 {
                margin-top: 0.25rem !important;
            }

            .mr-xl-1, .mx-xl-1 {
                margin-right: 0.25rem !important;
            }

            .mb-xl-1, .my-xl-1 {
                margin-bottom: 0.25rem !important;
            }

            .ml-xl-1, .mx-xl-1 {
                margin-left: 0.25rem !important;
            }

            .m-xl-2 {
                margin: 0.5rem !important;
            }

            .mt-xl-2, .my-xl-2 {
                margin-top: 0.5rem !important;
            }

            .mr-xl-2, .mx-xl-2 {
                margin-right: 0.5rem !important;
            }

            .mb-xl-2, .my-xl-2 {
                margin-bottom: 0.5rem !important;
            }

            .ml-xl-2, .mx-xl-2 {
                margin-left: 0.5rem !important;
            }

            .m-xl-3 {
                margin: 1rem !important;
            }

            .mt-xl-3, .my-xl-3 {
                margin-top: 1rem !important;
            }

            .mr-xl-3, .mx-xl-3 {
                margin-right: 1rem !important;
            }

            .mb-xl-3, .my-xl-3 {
                margin-bottom: 1rem !important;
            }

            .ml-xl-3, .mx-xl-3 {
                margin-left: 1rem !important;
            }

            .m-xl-4 {
                margin: 1.5rem !important;
            }

            .mt-xl-4, .my-xl-4 {
                margin-top: 1.5rem !important;
            }

            .mr-xl-4, .mx-xl-4 {
                margin-right: 1.5rem !important;
            }

            .mb-xl-4, .my-xl-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-xl-4, .mx-xl-4 {
                margin-left: 1.5rem !important;
            }

            .m-xl-5 {
                margin: 3rem !important;
            }

            .mt-xl-5, .my-xl-5 {
                margin-top: 3rem !important;
            }

            .mr-xl-5, .mx-xl-5 {
                margin-right: 3rem !important;
            }

            .mb-xl-5, .my-xl-5 {
                margin-bottom: 3rem !important;
            }

            .ml-xl-5, .mx-xl-5 {
                margin-left: 3rem !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .pt-xl-0, .py-xl-0 {
                padding-top: 0 !important;
            }

            .pr-xl-0, .px-xl-0 {
                padding-right: 0 !important;
            }

            .pb-xl-0, .py-xl-0 {
                padding-bottom: 0 !important;
            }

            .pl-xl-0, .px-xl-0 {
                padding-left: 0 !important;
            }

            .p-xl-1 {
                padding: 0.25rem !important;
            }

            .pt-xl-1, .py-xl-1 {
                padding-top: 0.25rem !important;
            }

            .pr-xl-1, .px-xl-1 {
                padding-right: 0.25rem !important;
            }

            .pb-xl-1, .py-xl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pl-xl-1, .px-xl-1 {
                padding-left: 0.25rem !important;
            }

            .p-xl-2 {
                padding: 0.5rem !important;
            }

            .pt-xl-2, .py-xl-2 {
                padding-top: 0.5rem !important;
            }

            .pr-xl-2, .px-xl-2 {
                padding-right: 0.5rem !important;
            }

            .pb-xl-2, .py-xl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pl-xl-2, .px-xl-2 {
                padding-left: 0.5rem !important;
            }

            .p-xl-3 {
                padding: 1rem !important;
            }

            .pt-xl-3, .py-xl-3 {
                padding-top: 1rem !important;
            }

            .pr-xl-3, .px-xl-3 {
                padding-right: 1rem !important;
            }

            .pb-xl-3, .py-xl-3 {
                padding-bottom: 1rem !important;
            }

            .pl-xl-3, .px-xl-3 {
                padding-left: 1rem !important;
            }

            .p-xl-4 {
                padding: 1.5rem !important;
            }

            .pt-xl-4, .py-xl-4 {
                padding-top: 1.5rem !important;
            }

            .pr-xl-4, .px-xl-4 {
                padding-right: 1.5rem !important;
            }

            .pb-xl-4, .py-xl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-xl-4, .px-xl-4 {
                padding-left: 1.5rem !important;
            }

            .p-xl-5 {
                padding: 3rem !important;
            }

            .pt-xl-5, .py-xl-5 {
                padding-top: 3rem !important;
            }

            .pr-xl-5, .px-xl-5 {
                padding-right: 3rem !important;
            }

            .pb-xl-5, .py-xl-5 {
                padding-bottom: 3rem !important;
            }

            .pl-xl-5, .px-xl-5 {
                padding-left: 3rem !important;
            }

            .m-xl-n1 {
                margin: -0.25rem !important;
            }

            .mt-xl-n1, .my-xl-n1 {
                margin-top: -0.25rem !important;
            }

            .mr-xl-n1, .mx-xl-n1 {
                margin-right: -0.25rem !important;
            }

            .mb-xl-n1, .my-xl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .ml-xl-n1, .mx-xl-n1 {
                margin-left: -0.25rem !important;
            }

            .m-xl-n2 {
                margin: -0.5rem !important;
            }

            .mt-xl-n2, .my-xl-n2 {
                margin-top: -0.5rem !important;
            }

            .mr-xl-n2, .mx-xl-n2 {
                margin-right: -0.5rem !important;
            }

            .mb-xl-n2, .my-xl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .ml-xl-n2, .mx-xl-n2 {
                margin-left: -0.5rem !important;
            }

            .m-xl-n3 {
                margin: -1rem !important;
            }

            .mt-xl-n3, .my-xl-n3 {
                margin-top: -1rem !important;
            }

            .mr-xl-n3, .mx-xl-n3 {
                margin-right: -1rem !important;
            }

            .mb-xl-n3, .my-xl-n3 {
                margin-bottom: -1rem !important;
            }

            .ml-xl-n3, .mx-xl-n3 {
                margin-left: -1rem !important;
            }

            .m-xl-n4 {
                margin: -1.5rem !important;
            }

            .mt-xl-n4, .my-xl-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-xl-n4, .mx-xl-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-xl-n4, .my-xl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-xl-n4, .mx-xl-n4 {
                margin-left: -1.5rem !important;
            }

            .m-xl-n5 {
                margin: -3rem !important;
            }

            .mt-xl-n5, .my-xl-n5 {
                margin-top: -3rem !important;
            }

            .mr-xl-n5, .mx-xl-n5 {
                margin-right: -3rem !important;
            }

            .mb-xl-n5, .my-xl-n5 {
                margin-bottom: -3rem !important;
            }

            .ml-xl-n5, .mx-xl-n5 {
                margin-left: -3rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mt-xl-auto, .my-xl-auto {
                margin-top: auto !important;
            }

            .mr-xl-auto, .mx-xl-auto {
                margin-right: auto !important;
            }

            .mb-xl-auto, .my-xl-auto {
                margin-bottom: auto !important;
            }

            .ml-xl-auto, .mx-xl-auto {
                margin-left: auto !important;
            }

            .text-xl-left {
                text-align: left !important;
            }

            .text-xl-right {
                text-align: right !important;
            }

            .text-xl-center {
                text-align: center !important;
            }

            h2.regular {
                font-size: 1.5rem;
            }

            .section-container.checkout {
                padding: 25px 10%;
            }

            .section-container.account {
                padding: 16px;
            }

            .section-container.dark.slant {
                padding: 2% 0 150px;
                margin-top: 0%;
            }

            .section-container.dark.slant.after-slant {
                padding: 7% 0 6%;
                margin-top: -1%;
            }

            .section-container.dark.slant::after {
                height: 16%;
            }

            .section-container.slant.after-slant {
                padding: 6% 0 100px;
                margin-top: 0%;
            }

            .comp.comp-hero-carousel .carousel-container .carousel-wrapper .single-carousel .carousel-bg-img .carousel-content {
                padding-top: unset;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl > .table-bordered {
                border: 0;
            }

            .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }

            .comp.comp-hero-carousel .carousel-container {
                max-height: 600px;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg > .table-bordered {
                border: 0;
            }

            .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md > .table-bordered {
                border: 0;
            }

            .navbar-expand-md > .container, .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }

            .section-container.turret {
                padding-top: 110px;
                padding-bottom: 20px;
            }

            .section-container.turret .section-header {
                top: -40px;
                margin-left: -40vw;
                width: 80vw;
                padding: 20px 10px;
                -webkit-box-shadow: 0 -5px 17px -63px #91aabe, -75px -78px 20px -81px #91aabe, 90px -78px 20px -83px #91aabe;
                box-shadow: 0 -5px 17px -63px #91aabe, -75px -78px 20px -81px #91aabe, 90px -78px 20px -83px #91aabe;
            }

            .section-container.turret .section-header h1 {
                margin: -10px auto 1.2rem;
                font-size: 1.775rem;
                width: 100%;
            }

            .section-container.turret .section-header p.subtxt {
                width: 100%;
                margin: auto;
            }

            form.checkout-style .form-element-text {
                width: 100%;
            }

            form.checkout-style .form-element-text.mid {
                width: 100%;
            }

            form.checkout-style button.short {
                min-width: 0;
                width: 46%;
                margin: 8px 1%;
            }

            form.contact-style .form-element-text {
                width: 100%;
            }

            form.contact-style .form-element-text.long {
                width: 100%;
            }

            form.contact-style .form-element-text.mid {
                width: 100%;
            }

            .contact-us-container {
                padding: 15px 5px;
            }

            .checkout-container {
                padding: 15px 0;
            }

            .checkout-container .checkout-right .thirdparty-header p {
                font-size: 1em;
            }

            .checkout-container .checkout-details-right-rail {
                position: fixed;
                top: 100vh;
                bottom: unset;
                margin-top: -80px;
                left: 0;
                padding: 0;
                z-index: 5000;
                -webkit-box-shadow: 0 -5px 8px rgba(0, 0, 0, 0.15);
                box-shadow: 0 -5px 8px rgba(0, 0, 0, 0.15);
            }

            .checkout-container .checkout-details-right-rail.active {
                top: 25vh;
                bottom: 0;
            }

            .checkout-container .checkout-details-right-rail.active .mobile-toggle {
                background-image: url("../images/icons/arrow-down-white.svg");
            }

            .checkout-container .checkout-details-right-rail .mobile-toggle {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }

            .checkout-container .payment-confirmation {
                display: block;
            }

            .checkout-container .payment-confirmation .payment-confirm-img {
                width: 100%;
                margin: 0;
                padding: 25px;
            }

            .checkout-container .payment-confirmation .payment-confirm-text {
                text-align: center;
            }

            .promotion-footer .package-details h2 {
                font-size: 1rem;
            }

            .cos-footer {
                padding: 8px;
            }

            .cos-footer img {
                width: 30px;
            }

            .cos-footer p.subtext {
                font-size: 0.875rem;
            }

            .comp.comp-hero-carousel .carousel-thb .dash-container .dash-cont {
                width: 25px;
                margin: 0 3px;
            }

            .comp.comp-page-header .hero-image-bg .hero-header-text {
                margin-top: 15px;
            }

            .comp.comp-promo-title .title h2 {
                font-size: 1.575rem;
            }

            .comp.comp-promo-single-val-prop.right .comp-content {
                margin-left: 0;
            }

            .comp.comp-promo-hero-panel {
                max-height: 600px;
            }

            .comp.comp-promo-hero-panel .comp-content {
                text-align: center;
            }

            .comp.comp-promo-hero-panel .comp-content h1 {
                font-size: 1.8rem;
            }

            .comp.comp-promo-steps .steps-container h2 {
                font-size: 1.85rem;
            }

            .comp.comp-promo-steps .steps-container .steps-single {
                padding: 50px 25px;
            }

            .comp.comp-promo-steps .steps-container .steps-single li {
                width: 100%;
                margin-right: 0;
                margin-bottom: 50px;
                max-width: 300px;
            }

            .comp.comp-promo-steps .steps-container .steps-single li .item-text {
                font-size: 1rem;
            }

            .comp.comp-promo-steps .steps-container .steps-single li::after {
                top: unset;
                bottom: 0;
                background-position: center right;
                left: 00%;
                right: unset;
                width: 100%;
                background-size: 15px;
                -webkit-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
            }

            .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.first-item {
                left: 54%;
            }

            .comp.comp-promo-carousel-waterwheel .promo-carousel-waterwheel-container .promo-carousel-waterwheel-wrapper .promo-carousel-waterwheel-single.last-item {
                left: 26%;
            }

            .comp.comp-checkout-steps .steps-single .step-label {
                display: none;
            }

            .comp.comp-checkout-summary {
                overflow: auto;
                height: 75vh;
            }
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm > .table-bordered {
                border: 0;
            }

            .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }

            form.checkout-style .form-element label.multi-select p {
                margin: 0 4px;
            }

            .multi-select-container .multi-select-selected .selected p {
                margin: 0 4px;
            }
        }

        @media print {
            .d-print-none {
                display: none !important;
            }

            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-print-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            *, *::before, *::after {
                text-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            abbr[title]::after {
                content: " (" attr(title) ")";
            }

            pre {
                white-space: pre-wrap !important;
            }

            pre, blockquote {
                border: 1px solid #adb5bd;
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            tr, img {
                page-break-inside: avoid;
            }

            p, h2, h3 {
                orphans: 3;
                widows: 3;
            }

            h2, h3 {
                page-break-after: avoid;
            }

            body {
                min-width: 992px !important;
            }

            .container {
                min-width: 992px !important;
            }

            .navbar {
                display: none;
            }

            .badge {
                border: 1px solid #000;
            }

            .table {
                border-collapse: collapse !important;
            }

            .table td, .table th {
                background-color: #fff !important;
            }

            .table-bordered th, .table-bordered td {
                border: 1px solid #dee2e6 !important;
            }

            .table-dark {
                color: inherit;
            }

            .table-dark th, .table-dark td, .table-dark thead th, .table-dark tbody + tbody {
                border-color: #dee2e6;
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #dee2e6;
            }
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }

            to {
                background-position: 0 0;
            }
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
            }
        }

        @-webkit-keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            25% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            50% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            75% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            25% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            50% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            75% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes loader-inner {
            0% {
                height: 0%;
            }

            25% {
                height: 0%;
            }

            50% {
                height: 100%;
            }

            75% {
                height: 100%;
            }

            100% {
                height: 0%;
            }
        }

        @keyframes loader-inner {
            0% {
                height: 0%;
            }

            25% {
                height: 0%;
            }

            50% {
                height: 100%;
            }

            75% {
                height: 100%;
            }

            100% {
                height: 0%;
            }
        }

        @-webkit-keyframes bounce {
            0% {
                top: 30px;
                height: 5px;
                border-radius: 60px 60px 20px 20px;
                -webkit-transform: scaleX(2);
                transform: scaleX(2);
            }

            35% {
                height: 15px;
                border-radius: 50%;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }

            100% {
                top: 0;
            }
        }

        @keyframes bounce {
            0% {
                top: 30px;
                height: 5px;
                border-radius: 60px 60px 20px 20px;
                -webkit-transform: scaleX(2);
                transform: scaleX(2);
            }

            35% {
                height: 15px;
                border-radius: 50%;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }

            100% {
                top: 0;
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                display: block;
                opacity: 0;
            }

            100% {
                display: block;
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                display: block;
                opacity: 0;
            }

            100% {
                display: block;
                opacity: 1;
            }
        }
    </style>

    <!-- Styles -->
</head>
<body>
<!-- if lt IE 10p.browserupgrade You are using an strong outdated browser. Please a(href='http://browsehappy.com/') upgrade your browser to improve your experience.
    -->

<div id="overlayer">
    <div class="ball-wrap">
        <div class="bounceball"></div>
    </div>
</div>
<div class="wrap fluid-container">
    <main class="main">
        <div class="page-content">
            <div class="section-container">
                <!-- Page Header - START-->
                <div class="comp comp-page-short-header inverse" id="ch-1">
                    <div class="comp-holder">
                        <div class="hero-image-bg" style="background-color:#1c1c45">
                            <div class="container">
                                <div class="hero-header-text">
                                    <h1>Pollutant Standards Index (PSI)</h1>
                                    <p class="subtext"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Header - END-->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-container account">
                            <div class="container account-container">
                                <div class="row">
                                    <div class="col-md-9 account-left">
                                        <p class="option-label">Keep track of PSI</p>
                                        <div class="account-body">
                                            <div class="table-responsive-sm account-table">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <td>PSI 24 Hourly</td>
                                                        <td>PM10 24 Hourly</td>
                                                        <td>PM2.5 24 Hourly</td>
                                                        <td>CO Sub index</td>
                                                        <td>O3 Sub Index</td>
                                                        <td>S)2 Sub Index</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="tbl-body">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 account-right">
                                        <!-- Breadcrumbs - START-->
                                        <div class="comp comp-account-sidebar" id="ac-1">
                                            <div class="comp-holder">
                                                <div class="account-sidebar">
                                                    <div class="account-side-nav">
                                                        <ul>
                                                            <li><a class="bold" href="#">Air Temperature</a>
                                                                <ul class="child-item">
                                                                </ul>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Breadcrumbs - END-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<footer class="fluid-container">
    <div class="container">
        <div class="row">
            <div class="col-9 col newspaper-links">
                <div class="copy"><span>Copyright © 2020 Singapore Press Holdings Ltd. Co. Regn. No. 198402868E. All Rights Reserved. <br></span>1000
                    Toa Payoh North Annexe Level 6, News Centre Singapore 318994
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="helper-box-overlay"></div>
<div class="sph-lightbox" id="common">
    <div class="overlay"></div>
    <div class="custom-ligthbox">
        <div class="close-lightbox"><img src="images/icons/close-cross-white.svg"><span>Close</span></div>
        <div class="lightbox-content">
            <div class="lightbox-body" id="lbody"></div>
            <div id="error"></div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/checkout.js"></script>
<script>
    $(document).ready(function() {
        let url = "{{ URL::to('/') }}" + '/api/environment';
        $.ajax({
            url: url,
            contentType: "application/json",
            dataType: 'json',
            success: function (result) {
                let psi = result.psi;

                let rows = '';

                let items = ["national", "east", "west", "north", "south"];

                for (let i = 0; i <= 4; i++) {
                    if (i === 0) {
                        rows += '<tr class="alert">';
                    } else {
                        rows += '<tr>';
                    }

                    rows += '<td>' + items[i].charAt(0).toUpperCase() + items[i].slice(1); + '</td>';

                    let value = JSON.parse(psi[i]['value']);
                    for (let j = 0; j <= 4; j++) {
                        rows += '<td>' + value[items[j]] + '</td>';
                    }
                }

                rows += '</tr>';
                $('#tbl-body').append(rows);

                // Append Air Temp
                let airTemp = result.stations;
                let airTempPanel = airTemp[0];

                let airTempAppend = '<li><b>Station Name</b></li>'
                    + '<li>' + airTempPanel['name'] + '</li>'
                    + '<li><b>Time Stamp</b>'
                    + '<li>' + airTempPanel['latest_air_temps']['actual_time'] + '</li>'
                    + '<li><b>Air Temperature</b>'
                    + '<li>' + airTempPanel['latest_air_temps']['value'] + ' Degree</li>'


                $('ul.child-item').append(airTempAppend);

            }
        });



    });
</script>
</body>

</html>
