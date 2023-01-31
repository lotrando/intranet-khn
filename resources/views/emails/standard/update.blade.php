<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
      /*!
    * Tabler v1.0.0-beta5 (https://tabler.io)
    * @version 1.0.0-beta5
    * @link https://tabler.io
    * Copyright 2018-2022 The Tabler Authors
    * Copyright 2018-2022 codecalm.net Paweł Kuna
    * Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
    */
      @charset "UTF-8";
      @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;500;600;700&display=swap");

      :root {
        --tblr-blue: #206bc4;
        --tblr-indigo: #4263eb;
        --tblr-purple: #ae3ec9;
        --tblr-pink: #d6336c;
        --tblr-red: #ff3939;
        --tblr-reha: #4fcd06;
        --tblr-orange: #f76707;
        --tblr-yellow: #f59f00;
        --tblr-green: #018016;
        --tblr-teal: #0ca678;
        --tblr-cyan: #17a2b8;
        --tblr-white: #ffffff;
        --tblr-gray: #475569;
        --tblr-gray-dark: #1e293b;
        --tblr-gray-100: #f1f5f9;
        --tblr-gray-200: #e2e8f0;
        --tblr-gray-300: #cbd5e1;
        --tblr-gray-400: #94a3b8;
        --tblr-gray-500: #64748b;
        --tblr-gray-600: #475569;
        --tblr-gray-700: #334155;
        --tblr-gray-800: #1e293b;
        --tblr-gray-900: #0f172a;
        --tblr-primary: #206bc4;
        --tblr-secondary: #626976;
        --tblr-success: #018016;
        --tblr-info: #4299e1;
        --tblr-warning: #f76707;
        --tblr-danger: #ff3939;
        --tblr-light: #f8fafc;
        --tblr-dark: #1e293b;
        --tblr-muted: #626976;
        --tblr-primary-rgb: 32, 107, 196;
        --tblr-secondary-rgb: 98, 105, 118;
        --tblr-success-rgb: 47, 179, 68;
        --tblr-info-rgb: 66, 153, 225;
        --tblr-warning-rgb: 247, 103, 7;
        --tblr-danger-rgb: 214, 57, 57;
        --tblr-light-rgb: 248, 250, 252;
        --tblr-dark-rgb: 30, 41, 59;
        --tblr-muted-rgb: 98, 105, 118;
        --tblr-white-rgb: 255, 255, 255;
        --tblr-black-rgb: 0, 0, 0;
        --tblr-body-color-rgb: 30, 41, 59;
        --tblr-body-bg-rgb: 248, 250, 252;
        --tblr-font-sans-serif: "Roboto Condensed", -apple-system, BlinkMacSystemFont,
          San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        --tblr-font-monospace: false, Menlo, Monaco, Consolas, Liberation Mono,
          Courier New, monospace;
        --tblr-gradient: linear-gradient(180deg,
            rgba(255, 255, 255, 0.15),
            rgba(255, 255, 255, 0));
        --tblr-body-font-family: var(--tblr-font-sans-serif);
        --tblr-body-font-size: 1.0rem;
        --tblr-body-font-weight: 400;
        --tblr-body-line-height: 1.4285714;
        --tblr-body-color: #1e293b;
        --tblr-body-bg: #f8fafc;
      }

      *,
      *::before,
      *::after {
        box-sizing: border-box;
      }

      @media (prefers-reduced-motion: no-preference) {
        :root {
          scroll-behavior: smooth;
        }
      }

      body {
        margin: 0;
        font-family: var(--tblr-body-font-family);
        font-size: var(--tblr-body-font-size);
        font-weight: var(--tblr-body-font-weight);
        line-height: var(--tblr-body-line-height);
        color: var(--tblr-body-color);
        text-align: var(--tblr-body-text-align);
        background-color: var(--tblr-body-bg);
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      }

      hr,
      .hr {
        margin: 2rem 0;
        color: inherit;
        background-color: currentColor;
        border: 0;
        opacity: 0.16;
      }

      hr:not([size]),
      .hr:not([size]) {
        height: 1px;
      }

      h1,
      .h1,
      h2,
      .h2,
      h3,
      .h3,
      h4,
      .h4,
      h5,
      .h5,
      h6,
      .h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        font-weight: 600;
        line-height: 1.2;
      }

      h1,
      .h1 {
        font-size: calc(1.275rem + 0.3vw);
      }

      @media (min-width: 1200px) {

        h1,
        .h1 {
          font-size: 1.5rem;
        }
      }

      h2,
      .h2 {
        font-size: 1.25rem;
      }

      h3,
      .h3 {
        font-size: 1rem;
      }

      h4,
      .h4 {
        font-size: 0.875rem;
      }

      h5,
      .h5 {
        font-size: 0.75rem;
      }

      h6,
      .h6 {
        font-size: 0.625rem;
      }

      p {
        margin-top: 0;
        margin-bottom: 1rem;
      }

      abbr[title],
      abbr[data-bs-original-title] {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none;
      }

      address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit;
      }

      ol,
      ul {
        padding-left: 2rem;
      }

      ol,
      ul,
      dl {
        margin-top: 0;
        margin-bottom: 0;
      }

      ol ol,
      ul ul,
      ol ul,
      ul ol {
        margin-bottom: 0;
      }

      dt {
        font-weight: 600;
      }

      dd {
        margin-bottom: 0.5rem;
        margin-left: 0;
      }

      blockquote {
        margin: 0 0 1rem;
      }

      b,
      strong {
        font-weight: bolder;
      }

      small,
      .small {
        font-size: 67.7142857%;
      }

      mark,
      .mark {
        padding: 0.2em;
        background-color: #fcf8e3;
      }

      sub,
      sup {
        position: relative;
        font-size: 0.75em;
        line-height: 0;
        vertical-align: baseline;
      }

      sub {
        bottom: -0.25em;
      }

      sup {
        top: -0.5em;
      }

      a {
        color: #206bc4;
        text-decoration: none;
      }

      a:hover {
        color: #1a569d;
        text-decoration: underline;
      }

      a:not([href]):not([class]),
      a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none;
      }

      pre,
      code,
      kbd,
      samp {
        font-family: var(--tblr-font-monospace);
        font-size: 1em;
        direction: ltr
          /* rtl:ignore */
        ;
        unicode-bidi: bidi-override;
      }

      pre {
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        font-size: 85.7142857%;
      }

      pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal;
      }

      code {
        font-size: 85.7142857%;
        color: #206bc4;
        word-wrap: break-word;
      }

      a>code {
        color: inherit;
      }

      kbd {
        padding: 0.2rem 0.4rem;
        font-size: 85.7142857%;
        color: #ffffff;
        background-color: #0f172a;
        border-radius: 2px;
      }

      kbd kbd {
        padding: 0;
        font-size: 1em;
        font-weight: 600;
      }

      figure {
        margin: 0 0 1rem;
      }

      img,
      svg {
        vertical-align: middle;
      }

      table {
        caption-side: bottom;
        border-collapse: collapse;
      }

      caption {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        color: #626976;
        text-align: left;
      }

      th {
        text-align: inherit;
        text-align: -webkit-match-parent;
      }

      table.dataTable {
        clear: both;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
        max-width: none !important;
        border-collapse: separate !important;
        border-spacing: 0;
      }

      thead,
      tbody,
      tfoot,
      tr,
      td,
      th {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        vertical-align: middle;
      }

      label {
        display: inline-block;
      }

      button {
        border-radius: 0;
      }

      button:focus:not(:focus-visible) {
        outline: 0;
      }

      input,
      button,
      select,
      optgroup,
      textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
      }

      button,
      select {
        text-transform: none;
      }

      [role="button"] {
        cursor: pointer;
      }

      select {
        word-wrap: normal;
      }

      select:disabled {
        opacity: 1;
      }

      [list]::-webkit-calendar-picker-indicator {
        display: none;
      }

      button,
      [type="button"],
      [type="reset"],
      [type="submit"] {
        -webkit-appearance: button;
      }

      button:not(:disabled),
      [type="button"]:not(:disabled),
      [type="reset"]:not(:disabled),
      [type="submit"]:not(:disabled) {
        cursor: pointer;
      }

      ::-moz-focus-inner {
        padding: 0;
        border-style: none;
      }

      textarea {
        resize: vertical;
      }

      fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
      }

      legend {
        float: left;
        width: 100%;
        padding: 0;
        margin-bottom: 0.5rem;
        font-size: calc(1.275rem + 0.3vw);
        line-height: inherit;
      }

      @media (min-width: 1200px) {
        legend {
          font-size: 1.5rem;
        }
      }

      legend+* {
        clear: left;
      }

      ::-webkit-datetime-edit-fields-wrapper,
      ::-webkit-datetime-edit-text,
      ::-webkit-datetime-edit-minute,
      ::-webkit-datetime-edit-hour-field,
      ::-webkit-datetime-edit-day-field,
      ::-webkit-datetime-edit-month-field,
      ::-webkit-datetime-edit-year-field {
        padding: 0;
      }

      ::-webkit-inner-spin-button {
        height: auto;
      }

      [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: textfield;
      }

      /* rtl:raw:
    [type="tel"],
    [type="url"],
    [type="email"],
    [type="number"] {
    direction: ltr;
    }
    */
      ::-webkit-search-decoration {
        -webkit-appearance: none;
      }

      ::-webkit-color-swatch-wrapper {
        padding: 0;
      }

      ::-webkit-file-upload-button {
        font: inherit;
      }

      ::file-selector-button {
        font: inherit;
      }

      ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
      }

      output {
        display: inline-block;
      }

      iframe {
        border: 0;
      }

      summary {
        display: list-item;
        cursor: pointer;
      }

      progress {
        vertical-align: baseline;
      }

      [hidden] {
        display: none !important;
      }

      .lead {
        font-size: 0.875rem;
        font-weight: 400;
      }

      .display-1 {
        font-size: calc(1.625rem + 4.5vw);
        font-weight: 300;
        line-height: 1.2;
      }

      @media (min-width: 1200px) {
        .display-1 {
          font-size: 5rem;
        }
      }

      .display-2 {
        font-size: calc(1.575rem + 3.9vw);
        font-weight: 300;
        line-height: 1.2;
      }

      @media (min-width: 1200px) {
        .display-2 {
          font-size: 4.5rem;
        }
      }

      .display-3 {
        font-size: calc(1.525rem + 3.3vw);
        font-weight: 300;
        line-height: 1.2;
      }

      @media (min-width: 1200px) {
        .display-3 {
          font-size: 4rem;
        }
      }

      .display-4 {
        font-size: calc(1.475rem + 2.7vw);
        font-weight: 300;
        line-height: 1.2;
      }

      @media (min-width: 1200px) {
        .display-4 {
          font-size: 3.5rem;
        }
      }

      .display-5 {
        font-size: calc(1.425rem + 2.1vw);
        font-weight: 300;
        line-height: 1.2;
      }

      @media (min-width: 1200px) {
        .display-5 {
          font-size: 3rem;
        }
      }

      .display-6 {
        font-size: calc(1.375rem + 1.5vw);
        font-weight: 300;
        line-height: 1.2;
      }

      @media (min-width: 1200px) {
        .display-6 {
          font-size: 2.5rem;
        }
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
        font-size: 85.7142857%;
        text-transform: uppercase;
      }

      .blockquote {
        margin-bottom: 1rem;
        font-size: 0.875rem;
      }

      .blockquote> :last-child {
        margin-bottom: 0;
      }

      .blockquote-footer {
        margin-top: -1rem;
        margin-bottom: 1rem;
        font-size: 85.7142857%;
        color: #475569;
      }

      .blockquote-footer::before {
        content: "\2014\00A0";
      }

      .img-fluid {
        max-width: 100%;
        height: auto;
      }

      .img-thumbnail {
        border-radius: 3px;
        height: 45px;
        width: 35px;
      }

      .img-thumbnail-big {
        padding: 0.2rem;
        border: 1px solid #ccd2d8;
        border-radius: 5px;
      }

      .zoom {
        transition: transform 0.3s;
        /* Animation */
        margin: 0 auto;
      }

      textarea {
        resize: none;
      }

      .zoom:hover {
        transform: scale(2);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
      }

      .figure {
        display: inline-block;
      }

      .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1;
      }

      .figure-caption {
        font-size: 85.7142857%;
        color: #475569;
      }

      .container,
      .container-fluid,
      .container-sm,
      .container-md,
      .container-lg,
      .container-xl,
      .container-xxl {
        width: 100%;
        padding-right: var(--tblr-gutter-x, 0.5rem);
        padding-left: var(--tblr-gutter-x, 0.5rem);
        margin-right: auto;
        margin-left: auto;
      }

      @media (min-width: 576px) {

        .container,
        .container-sm {
          max-width: 540px;
        }
      }

      @media (min-width: 768px) {

        .container,
        .container-sm,
        .container-md {
          max-width: 720px;
        }
      }

      @media (min-width: 992px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg {
          max-width: 960px;
        }
      }

      @media (min-width: 1200px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
          max-width: 1140px;
        }
      }

      @media (min-width: 1400px) {

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
          max-width: 1320px;
        }
      }

      .row {
        --tblr-gutter-x: 1rem;
        --tblr-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(-1 * var(--tblr-gutter-y));
        margin-right: calc(-0.5 * var(--tblr-gutter-x));
        margin-left: calc(-0.5 * var(--tblr-gutter-x));
      }

      .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--tblr-gutter-x) * 0.5);
        padding-left: calc(var(--tblr-gutter-x) * 0.5);
        margin-top: var(--tblr-gutter-y);
      }

      .col {
        flex: 1 0 0%;
      }

      .row-cols-auto>* {
        flex: 0 0 auto;
        width: auto;
      }

      .row-cols-1>* {
        flex: 0 0 auto;
        width: 100%;
      }

      .row-cols-2>* {
        flex: 0 0 auto;
        width: 50%;
      }

      .row-cols-3>* {
        flex: 0 0 auto;
        width: 33.3333333%;
      }

      .row-cols-4>* {
        flex: 0 0 auto;
        width: 25%;
      }

      .row-cols-5>* {
        flex: 0 0 auto;
        width: 20%;
      }

      .row-cols-6>* {
        flex: 0 0 auto;
        width: 16.6666667%;
      }

      .col-auto {
        flex: 0 0 auto;
        width: auto;
      }

      .col-1 {
        flex: 0 0 auto;
        width: 8.3333333%;
      }

      .col-2 {
        flex: 0 0 auto;
        width: 16.6666667%;
      }

      .col-3 {
        flex: 0 0 auto;
        width: 25%;
      }

      .col-4 {
        flex: 0 0 auto;
        width: 33.3333333%;
      }

      .col-5 {
        flex: 0 0 auto;
        width: 41.6666667%;
      }

      .col-6 {
        flex: 0 0 auto;
        width: 50%;
      }

      .col-7 {
        flex: 0 0 auto;
        width: 58.3333333%;
      }

      .col-8 {
        flex: 0 0 auto;
        width: 66.6666667%;
      }

      .col-9 {
        flex: 0 0 auto;
        width: 75%;
      }

      .col-10 {
        flex: 0 0 auto;
        width: 83.3333333%;
      }

      .col-11 {
        flex: 0 0 auto;
        width: 91.6666667%;
      }

      .col-12 {
        flex: 0 0 auto;
        width: 100%;
      }

      .offset-1 {
        margin-left: 8.3333333%;
      }

      .offset-2 {
        margin-left: 16.6666667%;
      }

      .offset-3 {
        margin-left: 25%;
      }

      .offset-4 {
        margin-left: 33.3333333%;
      }

      .offset-5 {
        margin-left: 41.6666667%;
      }

      .offset-6 {
        margin-left: 50%;
      }

      .offset-7 {
        margin-left: 58.3333333%;
      }

      .offset-8 {
        margin-left: 66.6666667%;
      }

      .offset-9 {
        margin-left: 75%;
      }

      .offset-10 {
        margin-left: 83.3333333%;
      }

      .offset-11 {
        margin-left: 91.6666667%;
      }

      .g-0,
      .gx-0 {
        --tblr-gutter-x: 0;
      }

      .g-0,
      .gy-0 {
        --tblr-gutter-y: 0;
      }

      .g-1,
      .gx-1 {
        --tblr-gutter-x: 0.25rem;
      }

      .g-1,
      .gy-1 {
        --tblr-gutter-y: 0.25rem;
      }

      .g-2,
      .gx-2 {
        --tblr-gutter-x: 0.5rem;
      }

      .g-2,
      .gy-2 {
        --tblr-gutter-y: 0.5rem;
      }

      .g-3,
      .gx-3 {
        --tblr-gutter-x: 1rem;
      }

      .g-3,
      .gy-3 {
        --tblr-gutter-y: 1rem;
      }

      .g-4,
      .gx-4 {
        --tblr-gutter-x: 2rem;
      }

      .g-4,
      .gy-4 {
        --tblr-gutter-y: 2rem;
      }

      .g-5,
      .gx-5 {
        --tblr-gutter-x: 4rem;
      }

      .g-5,
      .gy-5 {
        --tblr-gutter-y: 4rem;
      }

      @media (min-width: 576px) {
        .col-sm {
          flex: 1 0 0%;
        }

        .row-cols-sm-auto>* {
          flex: 0 0 auto;
          width: auto;
        }

        .row-cols-sm-1>* {
          flex: 0 0 auto;
          width: 100%;
        }

        .row-cols-sm-2>* {
          flex: 0 0 auto;
          width: 50%;
        }

        .row-cols-sm-3>* {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .row-cols-sm-4>* {
          flex: 0 0 auto;
          width: 25%;
        }

        .row-cols-sm-5>* {
          flex: 0 0 auto;
          width: 20%;
        }

        .row-cols-sm-6>* {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-sm-auto {
          flex: 0 0 auto;
          width: auto;
        }

        .col-sm-1 {
          flex: 0 0 auto;
          width: 8.3333333%;
        }

        .col-sm-2 {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-sm-3 {
          flex: 0 0 auto;
          width: 25%;
        }

        .col-sm-4 {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .col-sm-5 {
          flex: 0 0 auto;
          width: 41.6666667%;
        }

        .col-sm-6 {
          flex: 0 0 auto;
          width: 50%;
        }

        .col-sm-7 {
          flex: 0 0 auto;
          width: 58.3333333%;
        }

        .col-sm-8 {
          flex: 0 0 auto;
          width: 66.6666667%;
        }

        .col-sm-9 {
          flex: 0 0 auto;
          width: 75%;
        }

        .col-sm-10 {
          flex: 0 0 auto;
          width: 83.3333333%;
        }

        .col-sm-11 {
          flex: 0 0 auto;
          width: 91.6666667%;
        }

        .col-sm-12 {
          flex: 0 0 auto;
          width: 100%;
        }

        .offset-sm-0 {
          margin-left: 0;
        }

        .offset-sm-1 {
          margin-left: 8.3333333%;
        }

        .offset-sm-2 {
          margin-left: 16.6666667%;
        }

        .offset-sm-3 {
          margin-left: 25%;
        }

        .offset-sm-4 {
          margin-left: 33.3333333%;
        }

        .offset-sm-5 {
          margin-left: 41.6666667%;
        }

        .offset-sm-6 {
          margin-left: 50%;
        }

        .offset-sm-7 {
          margin-left: 58.3333333%;
        }

        .offset-sm-8 {
          margin-left: 66.6666667%;
        }

        .offset-sm-9 {
          margin-left: 75%;
        }

        .offset-sm-10 {
          margin-left: 83.3333333%;
        }

        .offset-sm-11 {
          margin-left: 91.6666667%;
        }

        .g-sm-0,
        .gx-sm-0 {
          --tblr-gutter-x: 0;
        }

        .g-sm-0,
        .gy-sm-0 {
          --tblr-gutter-y: 0;
        }

        .g-sm-1,
        .gx-sm-1 {
          --tblr-gutter-x: 0.25rem;
        }

        .g-sm-1,
        .gy-sm-1 {
          --tblr-gutter-y: 0.25rem;
        }

        .g-sm-2,
        .gx-sm-2 {
          --tblr-gutter-x: 0.5rem;
        }

        .g-sm-2,
        .gy-sm-2 {
          --tblr-gutter-y: 0.5rem;
        }

        .g-sm-3,
        .gx-sm-3 {
          --tblr-gutter-x: 1rem;
        }

        .g-sm-3,
        .gy-sm-3 {
          --tblr-gutter-y: 1rem;
        }

        .g-sm-4,
        .gx-sm-4 {
          --tblr-gutter-x: 2rem;
        }

        .g-sm-4,
        .gy-sm-4 {
          --tblr-gutter-y: 2rem;
        }

        .g-sm-5,
        .gx-sm-5 {
          --tblr-gutter-x: 4rem;
        }

        .g-sm-5,
        .gy-sm-5 {
          --tblr-gutter-y: 4rem;
        }
      }

      @media (min-width: 768px) {
        .col-md {
          flex: 1 0 0%;
        }

        .row-cols-md-auto>* {
          flex: 0 0 auto;
          width: auto;
        }

        .row-cols-md-1>* {
          flex: 0 0 auto;
          width: 100%;
        }

        .row-cols-md-2>* {
          flex: 0 0 auto;
          width: 50%;
        }

        .row-cols-md-3>* {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .row-cols-md-4>* {
          flex: 0 0 auto;
          width: 25%;
        }

        .row-cols-md-5>* {
          flex: 0 0 auto;
          width: 20%;
        }

        .row-cols-md-6>* {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-md-auto {
          flex: 0 0 auto;
          width: auto;
        }

        .col-md-1 {
          flex: 0 0 auto;
          width: 8.3333333%;
        }

        .col-md-2 {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-md-3 {
          flex: 0 0 auto;
          width: 25%;
        }

        .col-md-4 {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .col-md-5 {
          flex: 0 0 auto;
          width: 41.6666667%;
        }

        .col-md-6 {
          flex: 0 0 auto;
          width: 50%;
        }

        .col-md-7 {
          flex: 0 0 auto;
          width: 58.3333333%;
        }

        .col-md-8 {
          flex: 0 0 auto;
          width: 66.6666667%;
        }

        .col-md-9 {
          flex: 0 0 auto;
          width: 75%;
        }

        .col-md-10 {
          flex: 0 0 auto;
          width: 83.3333333%;
        }

        .col-md-11 {
          flex: 0 0 auto;
          width: 91.6666667%;
        }

        .col-md-12 {
          flex: 0 0 auto;
          width: 100%;
        }

        .offset-md-0 {
          margin-left: 0;
        }

        .offset-md-1 {
          margin-left: 8.3333333%;
        }

        .offset-md-2 {
          margin-left: 16.6666667%;
        }

        .offset-md-3 {
          margin-left: 25%;
        }

        .offset-md-4 {
          margin-left: 33.3333333%;
        }

        .offset-md-5 {
          margin-left: 41.6666667%;
        }

        .offset-md-6 {
          margin-left: 50%;
        }

        .offset-md-7 {
          margin-left: 58.3333333%;
        }

        .offset-md-8 {
          margin-left: 66.6666667%;
        }

        .offset-md-9 {
          margin-left: 75%;
        }

        .offset-md-10 {
          margin-left: 83.3333333%;
        }

        .offset-md-11 {
          margin-left: 91.6666667%;
        }

        .g-md-0,
        .gx-md-0 {
          --tblr-gutter-x: 0;
        }

        .g-md-0,
        .gy-md-0 {
          --tblr-gutter-y: 0;
        }

        .g-md-1,
        .gx-md-1 {
          --tblr-gutter-x: 0.25rem;
        }

        .g-md-1,
        .gy-md-1 {
          --tblr-gutter-y: 0.25rem;
        }

        .g-md-2,
        .gx-md-2 {
          --tblr-gutter-x: 0.5rem;
        }

        .g-md-2,
        .gy-md-2 {
          --tblr-gutter-y: 0.5rem;
        }

        .g-md-3,
        .gx-md-3 {
          --tblr-gutter-x: 1rem;
        }

        .g-md-3,
        .gy-md-3 {
          --tblr-gutter-y: 1rem;
        }

        .g-md-4,
        .gx-md-4 {
          --tblr-gutter-x: 2rem;
        }

        .g-md-4,
        .gy-md-4 {
          --tblr-gutter-y: 2rem;
        }

        .g-md-5,
        .gx-md-5 {
          --tblr-gutter-x: 4rem;
        }

        .g-md-5,
        .gy-md-5 {
          --tblr-gutter-y: 4rem;
        }
      }

      @media (min-width: 992px) {
        .col-lg {
          flex: 1 0 0%;
        }

        .row-cols-lg-auto>* {
          flex: 0 0 auto;
          width: auto;
        }

        .row-cols-lg-1>* {
          flex: 0 0 auto;
          width: 100%;
        }

        .row-cols-lg-2>* {
          flex: 0 0 auto;
          width: 50%;
        }

        .row-cols-lg-3>* {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .row-cols-lg-4>* {
          flex: 0 0 auto;
          width: 25%;
        }

        .row-cols-lg-5>* {
          flex: 0 0 auto;
          width: 20%;
        }

        .row-cols-lg-6>* {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-lg-auto {
          flex: 0 0 auto;
          width: auto;
        }

        .col-lg-1 {
          flex: 0 0 auto;
          width: 8.3333333%;
        }

        .col-lg-2 {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-lg-3 {
          flex: 0 0 auto;
          width: 25%;
        }

        .col-lg-4 {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .col-lg-5 {
          flex: 0 0 auto;
          width: 41.6666667%;
        }

        .col-lg-6 {
          flex: 0 0 auto;
          width: 50%;
        }

        .col-lg-7 {
          flex: 0 0 auto;
          width: 58.3333333%;
        }

        .col-lg-8 {
          flex: 0 0 auto;
          width: 66.6666667%;
        }

        .col-lg-9 {
          flex: 0 0 auto;
          width: 75%;
        }

        .col-lg-10 {
          flex: 0 0 auto;
          width: 83.3333333%;
        }

        .col-lg-11 {
          flex: 0 0 auto;
          width: 91.6666667%;
        }

        .col-lg-12 {
          flex: 0 0 auto;
          width: 100%;
        }

        .offset-lg-0 {
          margin-left: 0;
        }

        .offset-lg-1 {
          margin-left: 8.3333333%;
        }

        .offset-lg-2 {
          margin-left: 16.6666667%;
        }

        .offset-lg-3 {
          margin-left: 25%;
        }

        .offset-lg-4 {
          margin-left: 33.3333333%;
        }

        .offset-lg-5 {
          margin-left: 41.6666667%;
        }

        .offset-lg-6 {
          margin-left: 50%;
        }

        .offset-lg-7 {
          margin-left: 58.3333333%;
        }

        .offset-lg-8 {
          margin-left: 66.6666667%;
        }

        .offset-lg-9 {
          margin-left: 75%;
        }

        .offset-lg-10 {
          margin-left: 83.3333333%;
        }

        .offset-lg-11 {
          margin-left: 91.6666667%;
        }

        .g-lg-0,
        .gx-lg-0 {
          --tblr-gutter-x: 0;
        }

        .g-lg-0,
        .gy-lg-0 {
          --tblr-gutter-y: 0;
        }

        .g-lg-1,
        .gx-lg-1 {
          --tblr-gutter-x: 0.25rem;
        }

        .g-lg-1,
        .gy-lg-1 {
          --tblr-gutter-y: 0.25rem;
        }

        .g-lg-2,
        .gx-lg-2 {
          --tblr-gutter-x: 0.5rem;
        }

        .g-lg-2,
        .gy-lg-2 {
          --tblr-gutter-y: 0.5rem;
        }

        .g-lg-3,
        .gx-lg-3 {
          --tblr-gutter-x: 1rem;
        }

        .g-lg-3,
        .gy-lg-3 {
          --tblr-gutter-y: 1rem;
        }

        .g-lg-4,
        .gx-lg-4 {
          --tblr-gutter-x: 2rem;
        }

        .g-lg-4,
        .gy-lg-4 {
          --tblr-gutter-y: 2rem;
        }

        .g-lg-5,
        .gx-lg-5 {
          --tblr-gutter-x: 4rem;
        }

        .g-lg-5,
        .gy-lg-5 {
          --tblr-gutter-y: 4rem;
        }
      }

      @media (min-width: 1200px) {
        .col-xl {
          flex: 1 0 0%;
        }

        .row-cols-xl-auto>* {
          flex: 0 0 auto;
          width: auto;
        }

        .row-cols-xl-1>* {
          flex: 0 0 auto;
          width: 100%;
        }

        .row-cols-xl-2>* {
          flex: 0 0 auto;
          width: 50%;
        }

        .row-cols-xl-3>* {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .row-cols-xl-4>* {
          flex: 0 0 auto;
          width: 25%;
        }

        .row-cols-xl-5>* {
          flex: 0 0 auto;
          width: 20%;
        }

        .row-cols-xl-6>* {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-xl-auto {
          flex: 0 0 auto;
          width: auto;
        }

        .col-xl-1 {
          flex: 0 0 auto;
          width: 8.3333333%;
        }

        .col-xl-2 {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-xl-3 {
          flex: 0 0 auto;
          width: 25%;
        }

        .col-xl-4 {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .col-xl-5 {
          flex: 0 0 auto;
          width: 41.6666667%;
        }

        .col-xl-6 {
          flex: 0 0 auto;
          width: 50%;
        }

        .col-xl-7 {
          flex: 0 0 auto;
          width: 58.3333333%;
        }

        .col-xl-8 {
          flex: 0 0 auto;
          width: 66.6666667%;
        }

        .col-xl-9 {
          flex: 0 0 auto;
          width: 75%;
        }

        .col-xl-10 {
          flex: 0 0 auto;
          width: 83.3333333%;
        }

        .col-xl-11 {
          flex: 0 0 auto;
          width: 91.6666667%;
        }

        .col-xl-12 {
          flex: 0 0 auto;
          width: 100%;
        }

        .offset-xl-0 {
          margin-left: 0;
        }

        .offset-xl-1 {
          margin-left: 8.3333333%;
        }

        .offset-xl-2 {
          margin-left: 16.6666667%;
        }

        .offset-xl-3 {
          margin-left: 25%;
        }

        .offset-xl-4 {
          margin-left: 33.3333333%;
        }

        .offset-xl-5 {
          margin-left: 41.6666667%;
        }

        .offset-xl-6 {
          margin-left: 50%;
        }

        .offset-xl-7 {
          margin-left: 58.3333333%;
        }

        .offset-xl-8 {
          margin-left: 66.6666667%;
        }

        .offset-xl-9 {
          margin-left: 75%;
        }

        .offset-xl-10 {
          margin-left: 83.3333333%;
        }

        .offset-xl-11 {
          margin-left: 91.6666667%;
        }

        .g-xl-0,
        .gx-xl-0 {
          --tblr-gutter-x: 0;
        }

        .g-xl-0,
        .gy-xl-0 {
          --tblr-gutter-y: 0;
        }

        .g-xl-1,
        .gx-xl-1 {
          --tblr-gutter-x: 0.25rem;
        }

        .g-xl-1,
        .gy-xl-1 {
          --tblr-gutter-y: 0.25rem;
        }

        .g-xl-2,
        .gx-xl-2 {
          --tblr-gutter-x: 0.5rem;
        }

        .g-xl-2,
        .gy-xl-2 {
          --tblr-gutter-y: 0.5rem;
        }

        .g-xl-3,
        .gx-xl-3 {
          --tblr-gutter-x: 1rem;
        }

        .g-xl-3,
        .gy-xl-3 {
          --tblr-gutter-y: 1rem;
        }

        .g-xl-4,
        .gx-xl-4 {
          --tblr-gutter-x: 2rem;
        }

        .g-xl-4,
        .gy-xl-4 {
          --tblr-gutter-y: 2rem;
        }

        .g-xl-5,
        .gx-xl-5 {
          --tblr-gutter-x: 4rem;
        }

        .g-xl-5,
        .gy-xl-5 {
          --tblr-gutter-y: 4rem;
        }
      }

      @media (min-width: 1400px) {
        .col-xxl {
          flex: 1 0 0%;
        }

        .row-cols-xxl-auto>* {
          flex: 0 0 auto;
          width: auto;
        }

        .row-cols-xxl-1>* {
          flex: 0 0 auto;
          width: 100%;
        }

        .row-cols-xxl-2>* {
          flex: 0 0 auto;
          width: 50%;
        }

        .row-cols-xxl-3>* {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .row-cols-xxl-4>* {
          flex: 0 0 auto;
          width: 25%;
        }

        .row-cols-xxl-5>* {
          flex: 0 0 auto;
          width: 20%;
        }

        .row-cols-xxl-6>* {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-xxl-auto {
          flex: 0 0 auto;
          width: auto;
        }

        .col-xxl-1 {
          flex: 0 0 auto;
          width: 8.3333333%;
        }

        .col-xxl-2 {
          flex: 0 0 auto;
          width: 16.6666667%;
        }

        .col-xxl-3 {
          flex: 0 0 auto;
          width: 25%;
        }

        .col-xxl-4 {
          flex: 0 0 auto;
          width: 33.3333333%;
        }

        .col-xxl-5 {
          flex: 0 0 auto;
          width: 41.6666667%;
        }

        .col-xxl-6 {
          flex: 0 0 auto;
          width: 50%;
        }

        .col-xxl-7 {
          flex: 0 0 auto;
          width: 58.3333333%;
        }

        .col-xxl-8 {
          flex: 0 0 auto;
          width: 66.6666667%;
        }

        .col-xxl-9 {
          flex: 0 0 auto;
          width: 75%;
        }

        .col-xxl-10 {
          flex: 0 0 auto;
          width: 83.3333333%;
        }

        .col-xxl-11 {
          flex: 0 0 auto;
          width: 91.6666667%;
        }

        .col-xxl-12 {
          flex: 0 0 auto;
          width: 100%;
        }

        .offset-xxl-0 {
          margin-left: 0;
        }

        .offset-xxl-1 {
          margin-left: 8.3333333%;
        }

        .offset-xxl-2 {
          margin-left: 16.6666667%;
        }

        .offset-xxl-3 {
          margin-left: 25%;
        }

        .offset-xxl-4 {
          margin-left: 33.3333333%;
        }

        .offset-xxl-5 {
          margin-left: 41.6666667%;
        }

        .offset-xxl-6 {
          margin-left: 50%;
        }

        .offset-xxl-7 {
          margin-left: 58.3333333%;
        }

        .offset-xxl-8 {
          margin-left: 66.6666667%;
        }

        .offset-xxl-9 {
          margin-left: 75%;
        }

        .offset-xxl-10 {
          margin-left: 83.3333333%;
        }

        .offset-xxl-11 {
          margin-left: 91.6666667%;
        }

        .g-xxl-0,
        .gx-xxl-0 {
          --tblr-gutter-x: 0;
        }

        .g-xxl-0,
        .gy-xxl-0 {
          --tblr-gutter-y: 0;
        }

        .g-xxl-1,
        .gx-xxl-1 {
          --tblr-gutter-x: 0.25rem;
        }

        .g-xxl-1,
        .gy-xxl-1 {
          --tblr-gutter-y: 0.25rem;
        }

        .g-xxl-2,
        .gx-xxl-2 {
          --tblr-gutter-x: 0.5rem;
        }

        .g-xxl-2,
        .gy-xxl-2 {
          --tblr-gutter-y: 0.5rem;
        }

        .g-xxl-3,
        .gx-xxl-3 {
          --tblr-gutter-x: 1rem;
        }

        .g-xxl-3,
        .gy-xxl-3 {
          --tblr-gutter-y: 1rem;
        }

        .g-xxl-4,
        .gx-xxl-4 {
          --tblr-gutter-x: 2rem;
        }

        .g-xxl-4,
        .gy-xxl-4 {
          --tblr-gutter-y: 2rem;
        }

        .g-xxl-5,
        .gx-xxl-5 {
          --tblr-gutter-x: 4rem;
        }

        .g-xxl-5,
        .gy-xxl-5 {
          --tblr-gutter-y: 4rem;
        }
      }

      .table,
      .markdown>table {
        --tblr-table-bg: transparent;
        --tblr-table-accent-bg: transparent;
        --tblr-table-striped-color: inherit;
        --tblr-table-striped-bg: var(--tblr-border-color-light);
        --tblr-table-active-color: inherit;
        --tblr-table-active-bg: rgba(0, 0, 0, 0.1);
        --tblr-table-hover-color: inherit;
        --tblr-table-hover-bg: rgba(0, 0, 0, 0.075);
        width: 100%;
        margin-bottom: 1rem;
        color: inherit;
        vertical-align: top;
        border-color: rgba(98, 105, 118, 0.06);
      }

      .table> :not(caption)>*>*,
      .markdown>table> :not(caption)>*>* {
        padding: 0.5rem 0.5rem;
        background-color: var(--tblr-table-bg);
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px var(--tblr-table-accent-bg);
      }

      .table>tbody,
      .markdown>table>tbody {
        vertical-align: inherit;
      }

      .table>thead,
      .markdown>table>thead {
        vertical-align: bottom;
      }

      .table> :not(:first-child),
      .markdown>table> :not(:first-child) {
        border-top: 2px solid rgba(98, 105, 118, 0.16);
      }

      .caption-top {
        caption-side: top;
      }

      .table-sm> :not(caption)>*>* {
        padding: 0.25rem 0.25rem;
      }

      .table-bordered> :not(caption)>*,
      .markdown>table> :not(caption)>* {
        border-width: 1px 0;
      }

      .table-bordered> :not(caption)>*>*,
      .markdown>table> :not(caption)>*>* {
        border-width: 0 0;
      }

      .table-borderless> :not(caption)>*>* {
        border-bottom-width: 0;
      }

      .table-borderless> :not(:first-child) {
        border-top-width: 0;
      }

      .table-striped>tbody>tr:nth-of-type(even)>* {
        --tblr-table-accent-bg: var(--tblr-table-striped-bg);
        color: var(--tblr-table-striped-color);
      }

      .table-active {
        --tblr-table-accent-bg: var(--tblr-table-active-bg);
        color: var(--tblr-table-active-color);
      }

      .table-hover>tbody>tr:hover>* {
        --tblr-table-accent-bg: var(--tblr-table-hover-bg);
        color: var(--tblr-table-hover-color);
      }

      .table-primary {
        --tblr-table-bg: #d2e1f3;
        --tblr-table-striped-bg: #c9d8ea;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #c0cfe1;
        --tblr-table-active-color: #f8fafc;
        --tblr-table-hover-bg: #c5d3e5;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #c0cfe1;
      }

      .table-secondary {
        --tblr-table-bg: #e0e1e4;
        --tblr-table-striped-bg: #d6d8dc;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #cdcfd3;
        --tblr-table-active-color: #1e293b;
        --tblr-table-hover-bg: #d1d3d7;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #cdcfd3;
      }

      .table-success {
        --tblr-table-bg: #d5f0da;
        --tblr-table-striped-bg: #cce6d2;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #c3dcca;
        --tblr-table-active-color: #1e293b;
        --tblr-table-hover-bg: #c7e1ce;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #c3dcca;
      }

      .table-info {
        --tblr-table-bg: #d9ebf9;
        --tblr-table-striped-bg: #d0e1f0;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #c6d8e6;
        --tblr-table-active-color: #1e293b;
        --tblr-table-hover-bg: #cbdceb;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #c6d8e6;
      }

      .table-warning {
        --tblr-table-bg: #fde1cd;
        --tblr-table-striped-bg: #f2d8c6;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #e7cfbe;
        --tblr-table-active-color: #1e293b;
        --tblr-table-hover-bg: #ecd3c2;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #e7cfbe;
      }

      .table-danger {
        --tblr-table-bg: #f7d7d7;
        --tblr-table-striped-bg: #eccecf;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #e1c6c7;
        --tblr-table-active-color: #f8fafc;
        --tblr-table-hover-bg: #e7cacb;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #e1c6c7;
      }

      .table-light {
        --tblr-table-bg: #f8fafc;
        --tblr-table-striped-bg: #edf0f2;
        --tblr-table-striped-color: #1e293b;
        --tblr-table-active-bg: #e2e5e9;
        --tblr-table-active-color: #1e293b;
        --tblr-table-hover-bg: #e8eaee;
        --tblr-table-hover-color: #1e293b;
        color: #1e293b;
        border-color: #e2e5e9;
      }

      .table-dark {
        --tblr-table-bg: #1e293b;
        --tblr-table-striped-bg: #293345;
        --tblr-table-striped-color: #f8fafc;
        --tblr-table-active-bg: #343e4e;
        --tblr-table-active-color: #f8fafc;
        --tblr-table-hover-bg: #2e3949;
        --tblr-table-hover-color: #f8fafc;
        color: #f8fafc;
        border-color: #343e4e;
      }

      .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      @media (max-width: 575.98px) {
        .table-responsive-sm {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
        }
      }

      @media (max-width: 767.98px) {
        .table-responsive-md {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
        }
      }

      @media (max-width: 991.98px) {
        .table-responsive-lg {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
        }
      }

      @media (max-width: 1199.98px) {
        .table-responsive-xl {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
        }
      }

      @media (max-width: 1399.98px) {
        .table-responsive-xxl {
          overflow-x: auto;
          -webkit-overflow-scrolling: touch;
        }
      }

      .form-label {
        margin-bottom: 0.1rem;
        font-size: 0.875rem;
        color: #8c9299;
        font-weight: 500;
      }

      .col-form-label {
        padding-top: calc(0.4375rem + 1px);
        padding-bottom: calc(0.4375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        font-weight: 500;
        line-height: 1.4285714;
      }

      .col-form-label-lg {
        padding-top: calc(0.5rem + 1px);
        padding-bottom: calc(0.5rem + 1px);
        font-size: 1.25rem;
      }

      .col-form-label-sm {
        padding-top: calc(0.125rem + 1px);
        padding-bottom: calc(0.125rem + 1px);
        font-size: 0.75rem;
      }

      .form-text {
        margin-top: 0.25rem;
        font-size: 85.7142857%;
        color: #626976;
      }

      .form-control {
        display: block;
        width: 100%;
        padding: 0.3375rem 0.65rem;
        font-size: 0.975rem;
        font-weight: 400;
        line-height: 1.5285714;
        color: #666666;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid #d9dbde;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 4px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-control {
          transition: none;
        }
      }

      .form-control[type="file"] {
        overflow: hidden;
      }

      .form-control[type="file"]:not(:disabled):not([readonly]) {
        cursor: pointer;
      }

      .form-control:focus {
        color: inherit;
        background-color: #ffffff;
        border-color: #90b5e2;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-control::-webkit-date-and-time-value {
        height: 1.4285714em;
      }

      .form-control::-webkit-input-placeholder {
        color: #a5a9b1;
        opacity: 1;
      }

      .form-control::-moz-placeholder {
        color: #a5a9b1;
        opacity: 1;
      }

      .form-control:-ms-input-placeholder {
        color: #a5a9b1;
        opacity: 1;
      }

      .form-control::-ms-input-placeholder {
        color: #a5a9b1;
        opacity: 1;
      }

      .form-control::placeholder {
        color: #a5a9b1;
        opacity: 1;
      }

      .form-control:disabled,
      .form-control[readonly] {
        background-color: #f1f5f9;
        opacity: 1;
      }

      .form-control::-webkit-file-upload-button {
        padding: 0.4375rem 0.75rem;
        margin: -0.4375rem -0.75rem;
        -webkit-margin-end: 0.75rem;
        margin-inline-end: 0.75rem;
        color: inherit;
        background-color: #f8fafc;
        pointer-events: none;
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        border-inline-end-width: 1px;
        border-radius: 0;
        -webkit-transition: color 0.15s ease-in-out,
          background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
          box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      .form-control::file-selector-button {
        padding: 0.4375rem 0.75rem;
        margin: -0.4375rem -0.75rem;
        -webkit-margin-end: 0.75rem;
        margin-inline-end: 0.75rem;
        color: inherit;
        background-color: #f8fafc;
        pointer-events: none;
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        border-inline-end-width: 1px;
        border-radius: 0;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-control::-webkit-file-upload-button {
          -webkit-transition: none;
          transition: none;
        }

        .form-control::file-selector-button {
          transition: none;
        }
      }

      .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
        background-color: #eceeef;
      }

      .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
        background-color: #eceeef;
      }

      .form-control::-webkit-file-upload-button {
        padding: 0.4375rem 0.75rem;
        margin: -0.4375rem -0.75rem;
        -webkit-margin-end: 0.75rem;
        margin-inline-end: 0.75rem;
        color: inherit;
        background-color: #f8fafc;
        pointer-events: none;
        border-color: inherit;
        border-style: solid;
        border-width: 0;
        border-inline-end-width: 1px;
        border-radius: 0;
        -webkit-transition: color 0.15s ease-in-out,
          background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
          box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-control::-webkit-file-upload-button {
          -webkit-transition: none;
          transition: none;
        }
      }

      .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
        background-color: #eceeef;
      }

      .form-control-plaintext {
        display: block;
        width: 100%;
        padding: 0.4375rem 0;
        margin-bottom: 0;
        line-height: 1.4285714;
        color: #1e293b;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0;
      }

      .form-control-plaintext.form-control-sm,
      .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0;
      }

      .form-control-sm {
        min-height: calc(1.4285714em + 0.25rem + 2px);
        padding-top: 0.255rem;
        padding-bottom: 0.255rem;
        font-size: 0.85rem;
        border-radius: 5px;
      }

      .form-control-sm::-webkit-file-upload-button {
        padding: 0.125rem 0.5rem;
        margin: -0.125rem -0.5rem;
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
      }

      .form-control-sm::file-selector-button {
        padding: 0.125rem 0.5rem;
        margin: -0.125rem -0.5rem;
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
      }

      .form-control-sm::-webkit-file-upload-button {
        padding: 0.125rem 0.5rem;
        margin: -0.125rem -0.5rem;
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
      }

      .form-control-lg {
        min-height: calc(1.4285714em + 1rem + 2px);
        padding: 0.5rem 1.5rem;
        font-size: 1.25rem;
        border-radius: 8px;
      }

      .form-control-lg::-webkit-file-upload-button {
        padding: 0.5rem 1.5rem;
        margin: -0.5rem -1.5rem;
        -webkit-margin-end: 1.5rem;
        margin-inline-end: 1.5rem;
      }

      .form-control-lg::file-selector-button {
        padding: 0.5rem 1.5rem;
        margin: -0.5rem -1.5rem;
        -webkit-margin-end: 1.5rem;
        margin-inline-end: 1.5rem;
      }

      .form-control-lg::-webkit-file-upload-button {
        padding: 0.5rem 1.5rem;
        margin: -0.5rem -1.5rem;
        -webkit-margin-end: 1.5rem;
        margin-inline-end: 1.5rem;
      }

      textarea.form-control {
        min-height: calc(1.4285714em + 0.875rem + 2px);
      }

      textarea.form-control-sm {
        min-height: calc(1.4285714em + 0.25rem + 2px);
      }

      textarea.form-control-lg {
        min-height: calc(1.4285714em + 1rem + 2px);
      }

      .form-control-color {
        width: 3rem;
        height: auto;
        padding: 0.4375rem;
      }

      .form-control-color:not(:disabled):not([readonly]) {
        cursor: pointer;
      }

      .form-control-color::-moz-color-swatch {
        height: 1.4285714em;
        border-radius: 4px;
      }

      .form-control-color::-webkit-color-swatch {
        height: 1.4285714em;
        border-radius: 4px;
      }

      .form-select {
        display: block;
        width: 100%;
        padding: 0.3375rem 2.25rem 0.3375rem 0.75rem;
        -moz-padding-start: calc(0.75rem - 3px);
        font-size: 0.975rem;
        font-weight: 400;
        line-height: 1.5285714;
        color: inherit;
        background-color: #ffffff;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23d9dbde' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        border: 1px solid #d9dbde;
        border-radius: 4px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-select {
          transition: none;
        }
      }

      .form-select:focus {
        border-color: #90b5e2;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-select[multiple],
      .form-select[size]:not([size="1"]) {
        padding-right: 0.75rem;
        background-image: none;
      }

      .form-select:disabled {
        background-color: #e2e8f0;
      }

      .form-select:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 inherit;
      }

      .form-select-sm {
        padding-top: 0.255rem;
        padding-bottom: 0.255rem;
        padding-left: 0.5rem;
        margin-bottom: 0.55em;
        font-size: 0.85rem;
        border-radius: 5px;
      }

      .form-select-lg {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 1.5rem;
        font-size: 1.25rem;
        border-radius: 8px;
      }

      .form-check {
        display: block;
        min-height: 1.25rem;
        padding-left: 1.5rem;
        margin-bottom: 0.5rem;
      }

      input[type="date"]::-webkit-input-placeholder {
        visibility: hidden !important;
      }

      .form-check .form-check-input {
        float: left;
        margin-left: -1.2rem;
      }

      .form-check-input {
        width: 1rem;
        height: 1rem;
        margin-top: 0.2142857rem;
        vertical-align: top;
        background-color: #ffffff;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: 1px solid rgba(98, 105, 118, 0.24);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
      }

      .form-check-input[type="checkbox"] {
        border-radius: 4px;
      }

      .form-check-input[type="radio"] {
        border-radius: 50%;
      }

      .form-check-input:active {
        filter: brightness(90%);
      }

      .form-check-input:focus {
        border-color: #90b5e2;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-check-input:checked {
        background-color: #206bc4;
        border-color: rgba(98, 105, 118, 0.24);
      }

      .form-check-input:checked[type="checkbox"] {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8.5l2.5 2.5l5.5 -5.5'/%3e%3c/svg%3e");
      }

      .form-check-input:checked[type="radio"] {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3ccircle r='3' fill='%23ffffff' cx='8' cy='8' /%3e%3c/svg%3e");
      }

      .form-check-input[type="checkbox"]:indeterminate {
        background-color: #206bc4;
        border-color: #206bc4;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
      }

      button:disabled {
        cursor: not-allowed;
        pointer-events: all !important;
      }

      .form-check-input:disabled {
        pointer-events: none;
        filter: none;
        opacity: 0.5;
      }

      .form-check-input[disabled]~.form-check-label,
      .form-check-input:disabled~.form-check-label {
        opacity: 0.7;
      }

      .form-switch {
        padding-left: 2.5rem;
      }

      .form-switch .form-check-input {
        width: 2rem;
        margin-left: -2.5rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23e6e7e9'/%3e%3c/svg%3e");
        background-position: left center;
        border-radius: 2rem;
        transition: background-position 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-switch .form-check-input {
          transition: none;
        }
      }

      .form-switch .form-check-input:focus {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2390b5e2'/%3e%3c/svg%3e");
      }

      .form-switch .form-check-input:checked {
        background-position: right center;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffffff'/%3e%3c/svg%3e");
      }

      .form-check-inline {
        display: inline-block;
        margin-right: 0.4rem;
      }

      .btn-check {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
      }

      .btn-check[disabled]+.btn,
      .btn-check:disabled+.btn {
        pointer-events: none;
        filter: none;
        opacity: 0.65;
      }

      .form-range {
        width: 100%;
        height: 1.25rem;
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
      }

      .form-range:focus {
        outline: 0;
      }

      .form-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #f8fafc, 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #f8fafc, 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-range::-moz-focus-outer {
        border: 0;
      }

      .form-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.375rem;
        background-color: #206bc4;
        border: 2px solid var(--tblr-border-color-light);
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
          box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        appearance: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-range::-webkit-slider-thumb {
          -webkit-transition: none;
          transition: none;
        }
      }

      .form-range::-webkit-slider-thumb:active {
        background-color: #bcd3ed;
      }

      .form-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.25rem;
        color: transparent;
        cursor: pointer;
        background-color: var(--tblr-border-color-light);
        border-color: transparent;
        border-radius: 1rem;
      }

      .form-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #206bc4;
        border: 2px solid var(--tblr-border-color-light);
        border-radius: 1rem;
        -moz-transition: background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
          box-shadow 0.15s ease-in-out;
        -moz-appearance: none;
        appearance: none;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-range::-moz-range-thumb {
          -moz-transition: none;
          transition: none;
        }
      }

      .form-range::-moz-range-thumb:active {
        background-color: #bcd3ed;
      }

      .form-range::-moz-range-track {
        width: 100%;
        height: 0.25rem;
        color: transparent;
        cursor: pointer;
        background-color: var(--tblr-border-color-light);
        border-color: transparent;
        border-radius: 1rem;
      }

      .form-range:disabled {
        pointer-events: none;
      }

      .form-range:disabled::-webkit-slider-thumb {
        background-color: #64748b;
      }

      .form-range:disabled::-moz-range-thumb {
        background-color: #64748b;
      }

      .form-floating {
        position: relative;
      }

      .form-floating>.form-control,
      .form-floating>.form-select {
        height: calc(3.5rem + 2px);
        line-height: 1.25;
      }

      .form-floating>label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 1rem 0.75rem;
        pointer-events: none;
        border: 1px solid transparent;
        transform-origin: 0 0;
        transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-floating>label {
          transition: none;
        }
      }

      .form-floating>.form-control {
        padding: 1rem 0.75rem;
      }

      .form-floating>.form-control::-webkit-input-placeholder {
        color: transparent;
      }

      .form-floating>.form-control::-moz-placeholder {
        color: transparent;
      }

      .form-floating>.form-control:-ms-input-placeholder {
        color: transparent;
      }

      .form-floating>.form-control::-ms-input-placeholder {
        color: transparent;
      }

      .form-floating>.form-control::placeholder {
        color: transparent;
      }

      .form-floating>.form-control:not(:-moz-placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
      }

      .form-floating>.form-control:not(:-ms-input-placeholder) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
      }

      .form-floating>.form-control:focus,
      .form-floating>.form-control:not(:placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
      }

      .form-floating>.form-control:-webkit-autofill {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
      }

      .form-floating>.form-select {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
      }

      .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
      }

      .form-floating>.form-control:not(:-ms-input-placeholder)~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
      }

      .form-floating>.form-control:focus~label,
      .form-floating>.form-control:not(:placeholder-shown)~label,
      .form-floating>.form-select~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
      }

      .form-floating>.form-control:-webkit-autofill~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
      }

      .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%;
      }

      .input-group>.form-control,
      .input-group>.form-select {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        min-width: 0;
      }

      .input-group>.form-control:focus,
      .input-group>.form-select:focus {
        z-index: 3;
      }

      .input-group .btn {
        position: relative;
        z-index: 2;
      }

      .input-group .btn:focus {
        z-index: 3;
      }

      .input-group-text {
        display: flex;
        align-items: center;
        padding: 0.4375rem 0.75rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.4285714;
        color: #626976;
        text-align: center;
        white-space: nowrap;
        background-color: #f8fafc;
        border: 1px solid #d9dbde;
        border-radius: 4px;
      }

      .input-group-lg>.form-control,
      .input-group-lg>.form-select,
      .input-group-lg>.input-group-text,
      .input-group-lg>.btn {
        padding: 1.5rem 1.5rem;
        font-size: 0.875rem;
        border-radius: 8px;
      }

      .input-group-sm>.form-control,
      .input-group-sm>.form-select,
      .input-group-sm>.input-group-text,
      .input-group-sm>.btn {
        padding: 0.125rem 0.5rem;
        font-size: 0.75rem;
        border-radius: 2px;
      }

      .input-group-lg>.form-select,
      .input-group-sm>.form-select {
        padding-right: 3rem;
      }

      .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
      .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .input-group.has-validation> :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
      .input-group.has-validation>.dropdown-toggle:nth-last-child(n + 4) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
        margin-left: -1px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 85.7142857%;
        color: #018016;
      }

      .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: 0.1rem;
        font-size: 0.765625rem;
        color: #f8fafc;
        background-color: rgba(47, 179, 68, 0.9);
        border-radius: 4px;
      }

      .was-validated :valid~.valid-feedback,
      .was-validated :valid~.valid-tooltip,
      .is-valid~.valid-feedback,
      .is-valid~.valid-tooltip {
        display: block;
      }

      .was-validated .form-control:valid,
      .form-control.is-valid {
        border-color: #018016;
        padding-right: calc(1.4285714em + 0.875rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%232fb344' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='20 6 9 17 4 12'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.3571429em + 0.21875rem) center;
        background-size: calc(0.7142857em + 0.4375rem) calc(0.7142857em + 0.4375rem);
      }

      .was-validated .form-control:valid:focus,
      .form-control.is-valid:focus {
        border-color: #018016;
        box-shadow: 0 0 0 0.25rem rgba(47, 179, 68, 0.25);
      }

      .was-validated textarea.form-control:valid,
      textarea.form-control.is-valid {
        padding-right: calc(1.4285714em + 0.875rem);
        background-position: top calc(0.3571429em + 0.21875rem) right calc(0.3571429em + 0.21875rem);
      }

      .was-validated .form-select:valid,
      .form-select.is-valid {
        border-color: #018016;
      }

      .was-validated .form-select:valid:not([multiple]):not([size]),
      .was-validated .form-select:valid:not([multiple])[size="1"],
      .form-select.is-valid:not([multiple]):not([size]),
      .form-select.is-valid:not([multiple])[size="1"] {
        padding-right: 4.125rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23d9dbde' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),
          url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%232fb344' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='20 6 9 17 4 12'%3e%3c/polyline%3e%3c/svg%3e");
        background-position: right 0.75rem center, center right 2.25rem;
        background-size: 16px 12px,
          calc(0.7142857em + 0.4375rem) calc(0.7142857em + 0.4375rem);
      }

      .was-validated .form-select:valid:focus,
      .form-select.is-valid:focus {
        border-color: #018016;
        box-shadow: 0 0 0 0.25rem rgba(8, 132, 29, 0.25);
      }

      .was-validated .form-check-input:valid,
      .form-check-input.is-valid {
        border-color: #2fb344;
      }

      .was-validated .form-check-input:valid:checked,
      .form-check-input.is-valid:checked {
        background-color: #2fb344;
      }

      .was-validated .form-check-input:valid:focus,
      .form-check-input.is-valid:focus {
        box-shadow: 0 0 0 0.25rem rgba(47, 179, 68, 0.25);
      }

      .was-validated .form-check-input:valid~.form-check-label,
      .form-check-input.is-valid~.form-check-label {
        color: #2fb344;
      }

      .form-check-inline .form-check-input~.valid-feedback {
        margin-left: 0.5em;
      }

      .was-validated .input-group .form-control:valid,
      .input-group .form-control.is-valid,
      .was-validated .input-group .form-select:valid,
      .input-group .form-select.is-valid {
        z-index: 1;
      }

      .was-validated .input-group .form-control:valid:focus,
      .input-group .form-control.is-valid:focus,
      .was-validated .input-group .form-select:valid:focus,
      .input-group .form-select.is-valid:focus {
        z-index: 3;
      }

      .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 85.7142857%;
        color: #ff3939;
      }

      .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: 0.1rem;
        font-size: 0.765625rem;
        color: #f8fafc;
        background-color: rgba(214, 57, 57, 0.9);
        border-radius: 4px;
      }

      .was-validated :invalid~.invalid-feedback,
      .was-validated :invalid~.invalid-tooltip,
      .is-invalid~.invalid-feedback,
      .is-invalid~.invalid-tooltip {
        display: block;
      }

      .was-validated .form-control:invalid,
      .form-control.is-invalid {
        border-color: #ff3939;
        padding-right: calc(1.4285714em + 0.875rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23d63939' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='18' y1='6' x2='6' y2='18'%3e%3c/line%3e%3cline x1='6' y1='6' x2='18' y2='18'%3e%3c/line%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.3571429em + 0.21875rem) center;
        background-size: calc(0.7142857em + 0.4375rem) calc(0.7142857em + 0.4375rem);
      }

      .was-validated .form-control:invalid:focus,
      .form-control.is-invalid:focus {
        border-color: #ff3939;
        box-shadow: 0 0 0 0.25rem rgba(214, 57, 57, 0.25);
      }

      .was-validated textarea.form-control:invalid,
      textarea.form-control.is-invalid {
        padding-right: calc(1.4285714em + 0.875rem);
        background-position: top calc(0.3571429em + 0.21875rem) right calc(0.3571429em + 0.21875rem);
      }

      .was-validated .form-select:invalid,
      .form-select.is-invalid {
        border-color: #ff3939;
      }

      .was-validated .form-select:invalid:not([multiple]):not([size]),
      .was-validated .form-select:invalid:not([multiple])[size="1"],
      .form-select.is-invalid:not([multiple]):not([size]),
      .form-select.is-invalid:not([multiple])[size="1"] {
        padding-right: 4.125rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23d9dbde' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),
          url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23d63939' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='18' y1='6' x2='6' y2='18'%3e%3c/line%3e%3cline x1='6' y1='6' x2='18' y2='18'%3e%3c/line%3e%3c/svg%3e");
        background-position: right 0.75rem center, center right 2.25rem;
        background-size: 16px 12px,
          calc(0.7142857em + 0.4375rem) calc(0.7142857em + 0.4375rem);
      }

      .was-validated .form-select:invalid:focus,
      .form-select.is-invalid:focus {
        border-color: #ff3939;
        box-shadow: 0 0 0 0.25rem rgba(214, 57, 57, 0.25);
      }

      .was-validated .form-check-input:invalid,
      .form-check-input.is-invalid {
        border-color: #ff3939;
      }

      .was-validated .form-check-input:invalid:checked,
      .form-check-input.is-invalid:checked {
        background-color: #ff3939;
      }

      .was-validated .form-check-input:invalid:focus,
      .form-check-input.is-invalid:focus {
        box-shadow: 0 0 0 0.25rem rgba(214, 57, 57, 0.25);
      }

      .was-validated .form-check-input:invalid~.form-check-label,
      .form-check-input.is-invalid~.form-check-label {
        color: #ff3939;
      }

      .form-check-inline .form-check-input~.invalid-feedback {
        margin-left: 0.5em;
      }

      .was-validated .input-group .form-control:invalid,
      .input-group .form-control.is-invalid,
      .was-validated .input-group .form-select:invalid,
      .input-group .form-select.is-invalid {
        z-index: 2;
      }

      .was-validated .input-group .form-control:invalid:focus,
      .input-group .form-control.is-invalid:focus,
      .was-validated .input-group .form-select:invalid:focus,
      .input-group .form-select.is-invalid:focus {
        z-index: 3;
      }

      .btn {
        display: inline-block;
        font-weight: 500;
        line-height: 1.4285714;
        color: #1e293b;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.3rem 0.8rem;
        font-size: 0.895rem;
        border-radius: 4px;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .btn {
          transition: none;
        }
      }

      .btn:hover {
        color: #1e293b;
        text-decoration: none;
      }

      .btn-check:focus+.btn,
      .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .btn:disabled,
      .btn.disabled,
      fieldset:disabled .btn {
        pointer-events: none;
        opacity: 0.65;
      }

      .btn-link {
        font-weight: 400;
        color: #206bc4;
        text-decoration: none;
      }

      .btn-link:hover {
        color: #1a569d;
        text-decoration: underline;
      }

      .btn-link:focus {
        text-decoration: underline;
      }

      .btn-link:disabled,
      .btn-link.disabled {
        color: #475569;
      }

      .btn-lg,
      .btn-group-lg>.btn {
        padding: 0.5rem 1.5rem;
        font-size: 1.25rem;
        border-radius: 8px;
      }

      .btn-sm,
      .btn-group-sm>.btn {
        padding: 0.125rem 0.5rem;
        font-size: 0.75rem;
        border-radius: 2px;
      }

      .fade {
        transition: opacity 0.15s linear;
      }

      @media (prefers-reduced-motion: reduce) {
        .fade {
          transition: none;
        }
      }

      .fade:not(.show) {
        opacity: 0;
      }

      .collapse:not(.show) {
        display: none;
      }

      .collapsing {
        height: 0;
        overflow: hidden;
        transition: height 0.35s ease;
      }

      @media (prefers-reduced-motion: reduce) {
        .collapsing {
          transition: none;
        }
      }

      .collapsing.collapse-horizontal {
        width: 0;
        height: auto;
        transition: width 0.35s ease;
      }

      @media (prefers-reduced-motion: reduce) {
        .collapsing.collapse-horizontal {
          transition: none;
        }
      }

      .dropup,
      .dropend,
      .dropdown,
      .dropstart {
        position: relative;
      }

      .dropdown-toggle {
        white-space: nowrap;
      }

      .dropdown-toggle:after {
        content: "";
        display: inline-block;
        vertical-align: 0.306em;
        width: 0.36em;
        height: 0.36em;
        border-bottom: 1px solid;
        border-left: 1px solid;
        margin-right: 0.1em;
        margin-left: 0.4em;
        transform: rotate(-45deg);
      }

      .dropdown-menu {
        position: absolute;
        z-index: 1000;
        display: none;
        min-width: 14rem;
        padding: 0.25rem;
        margin: 0;
        font-size: 0.8975rem;
        color: #1e293b;
        text-align: left;
        list-style: none;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid rgba(98, 105, 118, 0.16);
        border-radius: 4px;
      }

      .dropdown-menu[data-bs-popper] {
        left: -0.1em;
        top: 100%;
        margin-top: 1px;
      }

      .dropdown-menu-start {
        --bs-position: start;
      }

      .dropdown-menu-start[data-bs-popper] {
        right: auto;
        left: 0;
      }

      .dropdown-menu-end {
        --bs-position: end;
      }

      .dropdown-menu-end[data-bs-popper] {
        right: 0;
        left: auto;
      }

      @media (min-width: 576px) {
        .dropdown-menu-sm-start {
          --bs-position: start;
        }

        .dropdown-menu-sm-start[data-bs-popper] {
          right: auto;
          left: 0;
        }

        .dropdown-menu-sm-end {
          --bs-position: end;
        }

        .dropdown-menu-sm-end[data-bs-popper] {
          right: 0;
          left: auto;
        }
      }

      @media (min-width: 768px) {
        .dropdown-menu-md-start {
          --bs-position: start;
        }

        .dropdown-menu-md-start[data-bs-popper] {
          right: auto;
          left: 0;
        }

        .dropdown-menu-md-end {
          --bs-position: end;
        }

        .dropdown-menu-md-end[data-bs-popper] {
          right: 0;
          left: auto;
        }
      }

      @media (min-width: 992px) {
        .dropdown-menu-lg-start {
          --bs-position: start;
        }

        .dropdown-menu-lg-start[data-bs-popper] {
          right: auto;
          left: 0;
        }

        .dropdown-menu-lg-end {
          --bs-position: end;
        }

        .dropdown-menu-lg-end[data-bs-popper] {
          right: 0;
          left: auto;
        }
      }

      @media (min-width: 1200px) {
        .dropdown-menu-xl-start {
          --bs-position: start;
        }

        .dropdown-menu-xl-start[data-bs-popper] {
          right: auto;
          left: 0;
        }

        .dropdown-menu-xl-end {
          --bs-position: end;
        }

        .dropdown-menu-xl-end[data-bs-popper] {
          right: 0;
          left: auto;
        }
      }

      @media (min-width: 1400px) {
        .dropdown-menu-xxl-start {
          --bs-position: start;
        }

        .dropdown-menu-xxl-start[data-bs-popper] {
          right: auto;
          left: 0;
        }

        .dropdown-menu-xxl-end {
          --bs-position: end;
        }

        .dropdown-menu-xxl-end[data-bs-popper] {
          right: 0;
          left: auto;
        }
      }

      .dropup .dropdown-menu[data-bs-popper] {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 1px;
      }

      .dropup .dropdown-toggle:after {
        content: "";
        display: inline-block;
        vertical-align: 0.306em;
        width: 0.36em;
        height: 0.36em;
        border-bottom: 1px solid;
        border-left: 1px solid;
        margin-right: 0.1em;
        margin-left: 0.4em;
        transform: rotate(135deg);
      }

      .dropend .dropdown-menu[data-bs-popper] {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: 1px;
      }

      .dropend .dropdown-toggle:after {
        content: "";
        display: inline-block;
        vertical-align: 0.306em;
        width: 0.36em;
        height: 0.36em;
        border-bottom: 1px solid;
        border-left: 1px solid;
        margin-right: 0.1em;
        margin-left: 0.4em;
        transform: rotate(-135deg);
      }

      .dropend .dropdown-toggle::after {
        vertical-align: 0;
      }

      .dropstart .dropdown-menu[data-bs-popper] {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: 1px;
      }

      .dropstart .dropdown-toggle:after {
        content: "";
        display: inline-block;
        vertical-align: 0.306em;
        width: 0.36em;
        height: 0.36em;
        border-bottom: 1px solid;
        border-left: 1px solid;
        margin-right: 0.1em;
        margin-left: 0.4em;
        transform: rotate(45deg);
      }

      .dropstart .dropdown-toggle::before {
        vertical-align: 0;
      }

      .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid rgba(98, 105, 118, 0.16);
      }

      .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.5rem 0.5rem;
        border-radius: 0.23rem;
        clear: both;
        font-weight: 400;
        color: #666;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
      }

      .dropdown-item:hover,
      .dropdown-item:focus {
        color: #666;
        text-decoration: none;
        background-color: rgba(0, 94, 255, 0.1);
      }

      .dropdown-item.active,
      .dropdown-item:active {
        color: #206bc4;
        text-decoration: none;
        background-color: rgba(32, 107, 196, 0.06);
      }

      .dropdown-item.disabled,
      .dropdown-item:disabled {
        color: #64748b;
        pointer-events: none;
        background-color: transparent;
      }

      .dropdown-menu.show {
        display: block;
      }

      .dropdown-header {
        display: block;
        padding: 0.25rem 0.75rem;
        margin-bottom: 0;
        font-size: 0.765625rem;
        color: #475569;
        white-space: nowrap;
      }

      .dropdown-item-text {
        display: block;
        padding: 0.5rem 0.75rem;
        color: inherit;
      }

      .dropdown-menu-dark {
        color: #cbd5e1;
        background-color: #1e293b;
        border-color: rgba(98, 105, 118, 0.16);
      }

      .dropdown-menu-dark .dropdown-item {
        color: #cbd5e1;
      }

      .dropdown-menu-dark .dropdown-item:hover,
      .dropdown-menu-dark .dropdown-item:focus {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.15);
      }

      .dropdown-menu-dark .dropdown-item.active,
      .dropdown-menu-dark .dropdown-item:active {
        color: #206bc4;
        background-color: rgba(32, 107, 196, 0.06);
      }

      .dropdown-menu-dark .dropdown-item.disabled,
      .dropdown-menu-dark .dropdown-item:disabled {
        color: #64748b;
      }

      .dropdown-menu-dark .dropdown-divider {
        border-color: rgba(98, 105, 118, 0.16);
      }

      .dropdown-menu-dark .dropdown-item-text {
        color: #cbd5e1;
      }

      .dropdown-menu-dark .dropdown-header {
        color: #64748b;
      }

      .btn-group,
      .btn-group-vertical {
        position: relative;
        display: inline-flex;
        vertical-align: middle;
      }

      .btn-group>.btn,
      .btn-group-vertical>.btn {
        position: relative;
        flex: 1 1 auto;
      }

      .btn-group>.btn-check:checked+.btn,
      .btn-group>.btn-check:focus+.btn,
      .btn-group>.btn:hover,
      .btn-group>.btn:focus,
      .btn-group>.btn:active,
      .btn-group>.btn.active,
      .btn-group-vertical>.btn-check:checked+.btn,
      .btn-group-vertical>.btn-check:focus+.btn,
      .btn-group-vertical>.btn:hover,
      .btn-group-vertical>.btn:focus,
      .btn-group-vertical>.btn:active,
      .btn-group-vertical>.btn.active {
        z-index: 1;
      }

      .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
      }

      .btn-toolbar .input-group {
        width: auto;
      }

      .btn-group>.btn:not(:first-child),
      .btn-group>.btn-group:not(:first-child) {
        margin-left: -1px;
      }

      .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
      .btn-group>.btn-group:not(:last-child)>.btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .btn-group>.btn:nth-child(n + 3),
      .btn-group> :not(.btn-check)+.btn,
      .btn-group>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      .dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem;
      }

      .dropdown-toggle-split::after,
      .dropup .dropdown-toggle-split::after,
      .dropend .dropdown-toggle-split::after {
        margin-left: 0;
      }

      .dropstart .dropdown-toggle-split::before {
        margin-right: 0;
      }

      .btn-sm+.dropdown-toggle-split,
      .btn-group-sm>.btn+.dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem;
      }

      .btn-lg+.dropdown-toggle-split,
      .btn-group-lg>.btn+.dropdown-toggle-split {
        padding-right: 1.125rem;
        padding-left: 1.125rem;
      }

      .btn-group-vertical {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
      }

      .btn-group-vertical>.btn,
      .btn-group-vertical>.btn-group {
        width: 100%;
      }

      .btn-group-vertical>.btn:not(:first-child),
      .btn-group-vertical>.btn-group:not(:first-child) {
        margin-top: -1px;
      }

      .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
      .btn-group-vertical>.btn-group:not(:last-child)>.btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .btn-group-vertical>.btn~.btn,
      .btn-group-vertical>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
      }

      .nav-link {
        display: block;
        padding: 0.5rem 0.75rem;
        color: inherit;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .nav-link {
          transition: none;
        }
      }

      .nav-link:hover,
      .nav-link:focus {
        color: #1a569d;
        text-decoration: none;
      }

      .nav-link.disabled {
        color: #475569;
        pointer-events: none;
        cursor: default;
      }

      .nav-tabs {
        border-bottom: 1px solid #cbd5e1;
      }

      .nav-tabs .nav-link {
        margin-bottom: -9px;
        background: none;
        border: 1px solid transparent;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
      }

      .nav-tabs .nav-link:hover,
      .nav-tabs .nav-link:focus {
        border-color: #e2e8f0 #e2e8f0 #cbd5e1;
        isolation: isolate;
      }

      .nav-tabs .nav-link.disabled {
        color: #475569;
        background-color: transparent;
        border-color: transparent;
      }

      .nav-tabs .nav-link.active,
      .nav-tabs .nav-item.show .nav-link {
        color: #256cc8;
        background-color: #f8fafc;
        border-color: #cbd5e1 #cbd5e1 #f8fafc;
      }

      .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .nav-pills .nav-link {
        background: none;
        border: 0;
        border-radius: 4px;
      }

      .nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
        color: #206bc4;
        background-color: rgba(32, 107, 196, 0.06);
      }

      .nav-fill>.nav-link,
      .nav-fill .nav-item {
        flex: 1 1 auto;
        text-align: center;
      }

      .nav-justified>.nav-link,
      .nav-justified .nav-item {
        flex-basis: 0;
        flex-grow: 1;
        text-align: center;
      }

      .nav-fill .nav-item .nav-link,
      .nav-justified .nav-item .nav-link {
        width: 100%;
      }

      .tab-content>.tab-pane {
        display: none;
      }

      .tab-content>.active {
        display: block;
      }

      .navbar {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding-top: 0.1rem;
        padding-bottom: 0.1rem;
      }

      .navbar>.container,
      .navbar>.container-fluid,
      .navbar>.container-sm,
      .navbar>.container-md,
      .navbar>.container-lg,
      .navbar>.container-xl,
      .navbar>.container-xxl {
        display: flex;
        flex-wrap: inherit;
        align-items: center;
        justify-content: space-between;
      }

      .navbar-brand {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        margin-right: 1rem;
        font-size: 1rem;
        white-space: nowrap;
      }

      .navbar-brand:hover,
      .navbar-brand:focus {
        text-decoration: none;
      }

      .navbar-nav {
        display: flex;
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
      }

      .navbar-text {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }

      .navbar-collapse {
        flex-basis: 100%;
        flex-grow: 1;
        align-items: center;
      }

      .navbar-toggler {
        padding: 0 0;
        font-size: 1rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 4px;
        transition: box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar-toggler {
          transition: none;
        }
      }

      .navbar-toggler:hover {
        text-decoration: none;
      }

      .navbar-toggler:focus {
        text-decoration: none;
        outline: 0;
        box-shadow: 0 0 0 0;
      }

      .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
      }

      .navbar-nav-scroll {
        max-height: var(--tblr-scroll-height, 75vh);
        overflow-y: auto;
      }

      @media (min-width: 576px) {
        .navbar-expand-sm {
          flex-wrap: nowrap;
          justify-content: flex-start;
        }

        .navbar-expand-sm .navbar-nav {
          flex-direction: row;
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
          position: absolute;
        }

        .navbar-expand-sm .navbar-nav .nav-link {
          padding-right: 0.75rem;
          padding-left: 0.75rem;
        }

        .navbar-expand-sm .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-expand-sm .navbar-collapse {
          display: flex !important;
          flex-basis: auto;
        }

        .navbar-expand-sm .navbar-toggler {
          display: none;
        }

        .navbar-expand-sm .offcanvas-header {
          display: none;
        }

        .navbar-expand-sm .offcanvas {
          position: inherit;
          bottom: 0;
          z-index: 1000;
          flex-grow: 1;
          visibility: visible !important;
          background-color: transparent;
          border-right: 0;
          border-left: 0;
          transition: none;
          transform: none;
        }

        .navbar-expand-sm .offcanvas-top,
        .navbar-expand-sm .offcanvas-bottom {
          height: auto;
          border-top: 0;
          border-bottom: 0;
        }

        .navbar-expand-sm .offcanvas-body {
          display: flex;
          flex-grow: 0;
          padding: 0;
          overflow-y: visible;
        }
      }

      @media (min-width: 768px) {
        .navbar-expand-md {
          flex-wrap: nowrap;
          justify-content: flex-start;
        }

        .navbar-expand-md .navbar-nav {
          flex-direction: row;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
          position: absolute;
        }

        .navbar-expand-md .navbar-nav .nav-link {
          padding-right: 0.75rem;
          padding-left: 0.75rem;
        }

        .navbar-expand-md .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-expand-md .navbar-collapse {
          display: flex !important;
          flex-basis: auto;
        }

        .navbar-expand-md .navbar-toggler {
          display: none;
        }

        .navbar-expand-md .offcanvas-header {
          display: none;
        }

        .navbar-expand-md .offcanvas {
          position: inherit;
          bottom: 0;
          z-index: 1000;
          flex-grow: 1;
          visibility: visible !important;
          background-color: transparent;
          border-right: 0;
          border-left: 0;
          transition: none;
          transform: none;
        }

        .navbar-expand-md .offcanvas-top,
        .navbar-expand-md .offcanvas-bottom {
          height: auto;
          border-top: 0;
          border-bottom: 0;
        }

        .navbar-expand-md .offcanvas-body {
          display: flex;
          flex-grow: 0;
          padding: 0;
          overflow-y: visible;
        }
      }

      @media (min-width: 992px) {
        .navbar-expand-lg {
          flex-wrap: nowrap;
          justify-content: flex-start;
        }

        .navbar-expand-lg .navbar-nav {
          flex-direction: row;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
          position: absolute;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 0.75rem;
          padding-left: 0.75rem;
        }

        .navbar-expand-lg .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-expand-lg .navbar-collapse {
          display: flex !important;
          flex-basis: auto;
        }

        .navbar-expand-lg .navbar-toggler {
          display: none;
        }

        .navbar-expand-lg .offcanvas-header {
          display: none;
        }

        .navbar-expand-lg .offcanvas {
          position: inherit;
          bottom: 0;
          z-index: 1000;
          flex-grow: 1;
          visibility: visible !important;
          background-color: transparent;
          border-right: 0;
          border-left: 0;
          transition: none;
          transform: none;
        }

        .navbar-expand-lg .offcanvas-top,
        .navbar-expand-lg .offcanvas-bottom {
          height: auto;
          border-top: 0;
          border-bottom: 0;
        }

        .navbar-expand-lg .offcanvas-body {
          display: flex;
          flex-grow: 0;
          padding: 0;
          overflow-y: visible;
        }
      }

      @media (min-width: 1200px) {
        .navbar-expand-xl {
          flex-wrap: nowrap;
          justify-content: flex-start;
        }

        .navbar-expand-xl .navbar-nav {
          flex-direction: row;
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
          position: absolute;
        }

        .navbar-expand-xl .navbar-nav .nav-link {
          padding-right: 0.75rem;
          padding-left: 0.75rem;
        }

        .navbar-expand-xl .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-expand-xl .navbar-collapse {
          display: flex !important;
          flex-basis: auto;
        }

        .navbar-expand-xl .navbar-toggler {
          display: none;
        }

        .navbar-expand-xl .offcanvas-header {
          display: none;
        }

        .navbar-expand-xl .offcanvas {
          position: inherit;
          bottom: 0;
          z-index: 1000;
          flex-grow: 1;
          visibility: visible !important;
          background-color: transparent;
          border-right: 0;
          border-left: 0;
          transition: none;
          transform: none;
        }

        .navbar-expand-xl .offcanvas-top,
        .navbar-expand-xl .offcanvas-bottom {
          height: auto;
          border-top: 0;
          border-bottom: 0;
        }

        .navbar-expand-xl .offcanvas-body {
          display: flex;
          flex-grow: 0;
          padding: 0;
          overflow-y: visible;
        }
      }

      @media (min-width: 1400px) {
        .navbar-expand-xxl {
          flex-wrap: nowrap;
          justify-content: flex-start;
        }

        .navbar-expand-xxl .navbar-nav {
          flex-direction: row;
        }

        .navbar-expand-xxl .navbar-nav .dropdown-menu {
          position: absolute;
        }

        .navbar-expand-xxl .navbar-nav .nav-link {
          padding-right: 0.75rem;
          padding-left: 0.75rem;
        }

        .navbar-expand-xxl .navbar-nav-scroll {
          overflow: visible;
        }

        .navbar-expand-xxl .navbar-collapse {
          display: flex !important;
          flex-basis: auto;
        }

        .navbar-expand-xxl .navbar-toggler {
          display: none;
        }

        .navbar-expand-xxl .offcanvas-header {
          display: none;
        }

        .navbar-expand-xxl .offcanvas {
          position: inherit;
          bottom: 0;
          z-index: 1000;
          flex-grow: 1;
          visibility: visible !important;
          background-color: transparent;
          border-right: 0;
          border-left: 0;
          transition: none;
          transform: none;
        }

        .navbar-expand-xxl .offcanvas-top,
        .navbar-expand-xxl .offcanvas-bottom {
          height: auto;
          border-top: 0;
          border-bottom: 0;
        }

        .navbar-expand-xxl .offcanvas-body {
          display: flex;
          flex-grow: 0;
          padding: 0;
          overflow-y: visible;
        }
      }

      .navbar-expand {
        flex-wrap: nowrap;
        justify-content: flex-start;
      }

      .navbar-expand .navbar-nav {
        flex-direction: row;
      }

      .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute;
      }

      .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.75rem;
        padding-left: 0.75rem;
      }

      .navbar-expand .navbar-nav-scroll {
        overflow: visible;
      }

      .navbar-expand .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      .navbar-expand .navbar-toggler {
        display: none;
      }

      .navbar-expand .offcanvas-header {
        display: none;
      }

      .navbar-expand .offcanvas {
        position: inherit;
        bottom: 0;
        z-index: 1000;
        flex-grow: 1;
        visibility: visible !important;
        background-color: transparent;
        border-right: 0;
        border-left: 0;
        transition: none;
        transform: none;
      }

      .navbar-expand .offcanvas-top,
      .navbar-expand .offcanvas-bottom {
        height: auto;
        border-top: 0;
        border-bottom: 0;
      }

      .navbar-expand .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
      }

      .navbar-light .navbar-brand {
        color: #1e293b;
      }

      .navbar-light .navbar-brand:hover,
      .navbar-light .navbar-brand:focus {
        color: #1e293b;
      }

      .navbar-light .navbar-nav .nav-link {
        color: rgba(30, 41, 59, 0.7);
      }

      .navbar-light .navbar-nav .nav-link:hover,
      .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7);
      }

      .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(30, 41, 59, 0.3);
      }

      .navbar-light .navbar-nav .show>.nav-link,
      .navbar-light .navbar-nav .nav-link.active {
        color: #256cc8;
      }

      .navbar-light .navbar-toggler {
        color: rgba(30, 41, 59, 0.7);
        border-color: rgba(0, 0, 0, 0.1);
      }

      .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2830, 41, 59, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .navbar-light .navbar-text {
        color: rgba(30, 41, 59, 0.7);
      }

      .navbar-light .navbar-text a,
      .navbar-light .navbar-text a:hover,
      .navbar-light .navbar-text a:focus {
        color: #1e293b;
      }

      .navbar-dark .navbar-brand {
        color: #ffffff;
      }

      .navbar-dark .navbar-brand:hover,
      .navbar-dark .navbar-brand:focus {
        color: #ffffff;
      }

      .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.7);
      }

      .navbar-dark .navbar-nav .nav-link:hover,
      .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75);
      }

      .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.3);
      }

      .navbar-dark .navbar-nav .show>.nav-link,
      .navbar-dark .navbar-nav .nav-link.active {
        color: #ffffff;
      }

      .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.7);
        border-color: rgba(255, 255, 255, 0.1);
      }

      .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.7%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.7);
      }

      .navbar-dark .navbar-text a,
      .navbar-dark .navbar-text a:hover,
      .navbar-dark .navbar-text a:focus {
        color: #ffffff;
      }

      .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: border-box;
        border: 1px solid rgba(98, 105, 118, 0.16);
        border-radius: 4px;
      }

      .card>hr,
      .card>.hr {
        margin-right: 0;
        margin-left: 0;
      }

      .card>.list-group {
        border-top: inherit;
        border-bottom: inherit;
      }

      .card>.list-group:first-child {
        border-top-width: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
      }

      .card>.list-group:last-child {
        border-bottom-width: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
      }

      .card>.card-header+.list-group,
      .card>.list-group+.card-footer {
        border-top: 0;
      }

      .card-body {
        flex: 1 1 auto;
        padding: 1rem 1rem;
      }

      .card-title {
        margin-bottom: 1.25rem;
      }

      .card-subtitle {
        margin-top: -0.625rem;
        margin-bottom: 0;
      }

      .card-text:last-child {
        margin-bottom: 0;
      }

      .card-link:hover {
        text-decoration: none;
      }

      .card-link+.card-link {
        margin-left: 1rem;
      }

      .card-header {
        padding: 0.5rem 0.5rem;
        margin-bottom: 0;
        color: #626976;
        background-color: #ffffff;
        border-bottom: 1px solid rgba(98, 105, 118, 0.16);
      }

      .card-header:first-child {
        border-radius: 3px 3px 0 0;
      }

      .card-footer {
        padding: 0.75rem 1rem;
        color: #626976;
        background-color: #ffffff;
        border-top: 1px solid rgba(98, 105, 118, 0.16);
      }

      .card-footer:last-child {
        border-radius: 0 0 3px 3px;
      }

      .card-header-tabs {
        margin-right: -0.5rem;
        margin-bottom: -0.75rem;
        margin-left: -0.5rem;
        border-bottom: 0;
      }

      .card-header-tabs .nav-link.active {
        background-color: #ffffff;
        border-bottom-color: #ffffff;
      }

      .card-header-pills {
        margin-right: -0.5rem;
        margin-left: -0.5rem;
      }

      .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        border-radius: 3px;
      }

      .card-img,
      .card-img-top,
      .card-img-bottom {
        width: 100%;
      }

      .card-img,
      .card-img-top {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
      }

      .card-img,
      .card-img-bottom {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
      }

      .card-group>.card {
        margin-bottom: 1.5rem;
      }

      @media (min-width: 576px) {
        .card-group {
          display: flex;
          flex-flow: row wrap;
        }

        .card-group>.card {
          flex: 1 0 0%;
          margin-bottom: 0;
        }

        .card-group>.card+.card {
          margin-left: 0;
          border-left: 0;
        }

        .card-group>.card:not(:last-child) {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0;
        }

        .card-group>.card:not(:last-child) .card-img-top,
        .card-group>.card:not(:last-child) .card-header {
          border-top-right-radius: 0;
        }

        .card-group>.card:not(:last-child) .card-img-bottom,
        .card-group>.card:not(:last-child) .card-footer {
          border-bottom-right-radius: 0;
        }

        .card-group>.card:not(:first-child) {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-img-top,
        .card-group>.card:not(:first-child) .card-header {
          border-top-left-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-img-bottom,
        .card-group>.card:not(:first-child) .card-footer {
          border-bottom-left-radius: 0;
        }
      }

      .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 0.8rem 0.8rem;
        font-size: 1.0rem;
        color: #666666;
        text-align: left;
        background-color: transparent;
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
          border-radius 0.15s ease;
      }

      @media (prefers-reduced-motion: reduce) {
        .accordion-button {
          transition: none;
        }
      }

      .accordion-button:not(.collapsed) {
        color: inherit;
        background-color: transparent;
        box-shadow: inset 0 -1px 0 rgba(98, 105, 118, 0.16);
      }

      .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='inherit'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        transform: rotate(-180deg);
      }

      .accordion-button::after {
        flex-shrink: 0;
        width: 1rem;
        height: 1rem;
        margin-left: auto;
        content: "";
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%231e293b'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-size: 1rem;
        transition: transform 0.2s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .accordion-button::after {
          transition: none;
        }
      }

      .accordion-button:hover {
        z-index: 2;
      }

      .accordion-button:focus {
        z-index: 3;
        border-color: rgba(98, 105, 118, 0.16);
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .accordion-header {
        margin-bottom: 0;
      }

      .accordion-item {
        background-color: transparent;
        border: 1px solid rgba(98, 105, 118, 0.16);
      }

      .accordion-item:first-of-type {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
      }

      .accordion-item:first-of-type .accordion-button {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
      }

      .accordion-item:not(:first-of-type) {
        border-top: 0;
      }

      .accordion-item:last-of-type {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
      }

      .accordion-item:last-of-type .accordion-button.collapsed {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
      }

      .accordion-item:last-of-type .accordion-collapse {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
      }

      .accordion-body {
        padding: 0.3rem 0.3rem;
      }

      .accordion-flush .accordion-collapse {
        border-width: 0;
      }

      .accordion-flush .accordion-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0;
      }

      .accordion-flush .accordion-item:first-child {
        border-top: 0;
      }

      .accordion-flush .accordion-item:last-child {
        border-bottom: 0;
      }

      .accordion-flush .accordion-item .accordion-button {
        border-radius: 0;
      }

      .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 0 0;
        margin-bottom: 1rem;
        list-style: none;
      }

      .breadcrumb-item+.breadcrumb-item {
        padding-left: 0.5rem;
      }

      .breadcrumb-item+.breadcrumb-item::before {
        float: left;
        padding-right: 0.5rem;
        color: #626976;
        content: var(--tblr-breadcrumb-divider, "/")
          /* rtl: var(--tblr-breadcrumb-divider, "/") */
        ;
      }

      .breadcrumb-item.active {
        color: inherit;
      }

      .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
      }

      .paginate_button {
        padding: 2px;
      }

      .page-link {
        position: relative;
        display: block;
        color: #626976;
        background-color: transparent;
        border: 0 solid #cbd5e1;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .page-link {
          transition: none;
        }
      }

      .page-link:hover {
        z-index: 2;
        color: #1a569d;
        text-decoration: none;
        background-color: #e2e8f0;
        border-color: #cbd5e1;
      }

      .page-link:focus {
        z-index: 3;
        color: #1a569d;
        background-color: #e2e8f0;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .page-item:not(:first-child) .page-link {
        margin-left: 0;
      }

      .page-item.active .page-link {
        z-index: 3;
        color: #ffffff;
        background-color: #206bc4;
        border-color: #206bc4;
      }

      .page-item.disabled .page-link {
        color: rgba(98, 105, 118, 0.5);
        pointer-events: none;
        background-color: transparent;
        border-color: #cbd5e1;
      }

      .page-link {
        padding: 0.25rem 0.25rem;
      }

      .page-item:first-child .page-link {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
      }

      .page-item:last-child .page-link {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
      }

      .pagination-lg .page-link {
        padding: 0.75rem 1.5rem;
        font-size: 1.09375rem;
      }

      .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
      }

      .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
      }

      .pagination-sm .page-link {
        padding: 0.25rem 0.5rem;
        font-size: 0.765625rem;
      }

      .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
      }

      .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
      }

      .badge {
        display: inline-block;
        padding: 0.35em 0.65em;
        font-size: 85.7142857%;
        font-weight: 500;
        line-height: 1;
        color: #ffffff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 4px;
      }

      .badge:empty {
        display: none;
      }

      .btn .badge {
        position: relative;
        top: -1px;
      }

      .alert {
        position: relative;
        padding: 0.5rem 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 4px;
      }

      .alert-heading {
        color: inherit;
      }

      .alert-link {
        font-weight: 600;
      }

      .alert-dismissible {
        padding-right: 3rem;
      }

      .alert-dismissible .btn-close {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        padding: 1.25rem 1rem;
      }

      @-webkit-keyframes progress-bar-stripes {
        0% {
          background-position-x: 0.5rem;
        }
      }

      @keyframes progress-bar-stripes {
        0% {
          background-position-x: 0.5rem;
        }
      }

      .progress {
        display: flex;
        height: 0.5rem;
        overflow: hidden;
        font-size: 0.65625rem;
        background-color: #e6e7e9;
        border-radius: 4px;
      }

      .progress-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        color: #ffffff;
        text-align: center;
        white-space: nowrap;
        background-color: #206bc4;
        transition: width 0.6s ease;
      }

      @media (prefers-reduced-motion: reduce) {
        .progress-bar {
          transition: none;
        }
      }

      .progress-bar-striped {
        background-image: linear-gradient(45deg,
            rgba(255, 255, 255, 0.15) 25%,
            transparent 25%,
            transparent 50%,
            rgba(255, 255, 255, 0.15) 50%,
            rgba(255, 255, 255, 0.15) 75%,
            transparent 75%,
            transparent);
        background-size: 0.5rem 0.5rem;
      }

      .progress-bar-animated {
        -webkit-animation: 1s linear infinite progress-bar-stripes;
        animation: 1s linear infinite progress-bar-stripes;
      }

      @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
          -webkit-animation: none;
          animation: none;
        }
      }

      .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        border-radius: 4px;
      }

      .list-group-numbered {
        list-style-type: none;
        counter-reset: section;
      }

      .list-group-numbered>li::before {
        content: counters(section, ".") ". ";
        counter-increment: section;
      }

      .list-group-item-action {
        width: 100%;
        color: inherit;
        text-align: inherit;
      }

      .list-group-item-action:hover,
      .list-group-item-action:focus {
        z-index: 1;
        color: inherit;
        text-decoration: none;
        background-color: #f1f5f9;
      }

      .list-group-item-action:active {
        color: #1e293b;
        background-color: #e2e8f0;
      }

      .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1rem;
        color: #0f172a;
        background-color: inherit;
        border: 1px solid #e6e7e9;
      }

      .list-group-item:first-child {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
      }

      .list-group-item:last-child {
        border-bottom-right-radius: inherit;
        border-bottom-left-radius: inherit;
      }

      .list-group-item.disabled,
      .list-group-item:disabled {
        color: #475569;
        pointer-events: none;
        background-color: inherit;
      }

      .list-group-item.active {
        z-index: 2;
        color: #ffffff;
        background-color: #206bc4;
        border-color: #206bc4;
      }

      .list-group-item+.list-group-item {
        border-top-width: 0;
      }

      .list-group-item+.list-group-item.active {
        margin-top: -1px;
        border-top-width: 1px;
      }

      .list-group-horizontal {
        flex-direction: row;
      }

      .list-group-horizontal>.list-group-item:first-child {
        border-bottom-left-radius: 4px;
        border-top-right-radius: 0;
      }

      .list-group-horizontal>.list-group-item:last-child {
        border-top-right-radius: 4px;
        border-bottom-left-radius: 0;
      }

      .list-group-horizontal>.list-group-item.active {
        margin-top: 0;
      }

      .list-group-horizontal>.list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0;
      }

      .list-group-horizontal>.list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px;
      }

      @media (min-width: 576px) {
        .list-group-horizontal-sm {
          flex-direction: row;
        }

        .list-group-horizontal-sm>.list-group-item:first-child {
          border-bottom-left-radius: 4px;
          border-top-right-radius: 0;
        }

        .list-group-horizontal-sm>.list-group-item:last-child {
          border-top-right-radius: 4px;
          border-bottom-left-radius: 0;
        }

        .list-group-horizontal-sm>.list-group-item.active {
          margin-top: 0;
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item {
          border-top-width: 1px;
          border-left-width: 0;
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
          margin-left: -1px;
          border-left-width: 1px;
        }
      }

      @media (min-width: 768px) {
        .list-group-horizontal-md {
          flex-direction: row;
        }

        .list-group-horizontal-md>.list-group-item:first-child {
          border-bottom-left-radius: 4px;
          border-top-right-radius: 0;
        }

        .list-group-horizontal-md>.list-group-item:last-child {
          border-top-right-radius: 4px;
          border-bottom-left-radius: 0;
        }

        .list-group-horizontal-md>.list-group-item.active {
          margin-top: 0;
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item {
          border-top-width: 1px;
          border-left-width: 0;
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item.active {
          margin-left: -1px;
          border-left-width: 1px;
        }
      }

      @media (min-width: 992px) {
        .list-group-horizontal-lg {
          flex-direction: row;
        }

        .list-group-horizontal-lg>.list-group-item:first-child {
          border-bottom-left-radius: 4px;
          border-top-right-radius: 0;
        }

        .list-group-horizontal-lg>.list-group-item:last-child {
          border-top-right-radius: 4px;
          border-bottom-left-radius: 0;
        }

        .list-group-horizontal-lg>.list-group-item.active {
          margin-top: 0;
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item {
          border-top-width: 1px;
          border-left-width: 0;
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
          margin-left: -1px;
          border-left-width: 1px;
        }
      }

      @media (min-width: 1200px) {
        .list-group-horizontal-xl {
          flex-direction: row;
        }

        .list-group-horizontal-xl>.list-group-item:first-child {
          border-bottom-left-radius: 4px;
          border-top-right-radius: 0;
        }

        .list-group-horizontal-xl>.list-group-item:last-child {
          border-top-right-radius: 4px;
          border-bottom-left-radius: 0;
        }

        .list-group-horizontal-xl>.list-group-item.active {
          margin-top: 0;
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item {
          border-top-width: 1px;
          border-left-width: 0;
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
          margin-left: -1px;
          border-left-width: 1px;
        }
      }

      @media (min-width: 1400px) {
        .list-group-horizontal-xxl {
          flex-direction: row;
        }

        .list-group-horizontal-xxl>.list-group-item:first-child {
          border-bottom-left-radius: 4px;
          border-top-right-radius: 0;
        }

        .list-group-horizontal-xxl>.list-group-item:last-child {
          border-top-right-radius: 4px;
          border-bottom-left-radius: 0;
        }

        .list-group-horizontal-xxl>.list-group-item.active {
          margin-top: 0;
        }

        .list-group-horizontal-xxl>.list-group-item+.list-group-item {
          border-top-width: 1px;
          border-left-width: 0;
        }

        .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
          margin-left: -1px;
          border-left-width: 1px;
        }
      }

      .list-group-flush {
        border-radius: 0;
      }

      .list-group-flush>.list-group-item {
        border-width: 0 0 1px;
      }

      .list-group-flush>.list-group-item:last-child {
        border-bottom-width: 0;
      }

      .list-group-item-primary {
        color: #134076;
        background-color: #d2e1f3;
      }

      .list-group-item-primary.list-group-item-action:hover,
      .list-group-item-primary.list-group-item-action:focus {
        color: #134076;
        background-color: #bdcbdb;
      }

      .list-group-item-primary.list-group-item-action.active {
        color: #ffffff;
        background-color: #134076;
        border-color: #134076;
      }

      .list-group-item-secondary {
        color: #3b3f47;
        background-color: #e0e1e4;
      }

      .list-group-item-secondary.list-group-item-action:hover,
      .list-group-item-secondary.list-group-item-action:focus {
        color: #3b3f47;
        background-color: #cacbcd;
      }

      .list-group-item-secondary.list-group-item-action.active {
        color: #ffffff;
        background-color: #3b3f47;
        border-color: #3b3f47;
      }

      .list-group-item-success {
        color: #1c6b29;
        background-color: #d5f0da;
      }

      .list-group-item-success.list-group-item-action:hover,
      .list-group-item-success.list-group-item-action:focus {
        color: #1c6b29;
        background-color: #c0d8c4;
      }

      .list-group-item-success.list-group-item-action.active {
        color: #ffffff;
        background-color: #1c6b29;
        border-color: #1c6b29;
      }

      .list-group-item-info {
        color: #285c87;
        background-color: #d9ebf9;
      }

      .list-group-item-info.list-group-item-action:hover,
      .list-group-item-info.list-group-item-action:focus {
        color: #285c87;
        background-color: #c3d4e0;
      }

      .list-group-item-info.list-group-item-action.active {
        color: #ffffff;
        background-color: #285c87;
        border-color: #285c87;
      }

      .list-group-item-warning {
        color: #943e04;
        background-color: #fde1cd;
      }

      .list-group-item-warning.list-group-item-action:hover,
      .list-group-item-warning.list-group-item-action:focus {
        color: #943e04;
        background-color: #e4cbb9;
      }

      .list-group-item-warning.list-group-item-action.active {
        color: #ffffff;
        background-color: #943e04;
        border-color: #943e04;
      }

      .list-group-item-danger {
        color: #802222;
        background-color: #f7d7d7;
      }

      .list-group-item-danger.list-group-item-action:hover,
      .list-group-item-danger.list-group-item-action:focus {
        color: #802222;
        background-color: #dec2c2;
      }

      .list-group-item-danger.list-group-item-action.active {
        color: #ffffff;
        background-color: #802222;
        border-color: #802222;
      }

      .list-group-item-light {
        color: #959697;
        background-color: #fefefe;
      }

      .list-group-item-light.list-group-item-action:hover,
      .list-group-item-light.list-group-item-action:focus {
        color: #959697;
        background-color: #e5e5e5;
      }

      .list-group-item-light.list-group-item-action.active {
        color: #ffffff;
        background-color: #959697;
        border-color: #959697;
      }

      .list-group-item-dark {
        color: #121923;
        background-color: #d2d4d8;
      }

      .list-group-item-dark.list-group-item-action:hover,
      .list-group-item-dark.list-group-item-action:focus {
        color: #121923;
        background-color: #bdbfc2;
      }

      .list-group-item-dark.list-group-item-action.active {
        color: #ffffff;
        background-color: #121923;
        border-color: #121923;
      }

      .list-group-item-muted {
        color: #3b3f47;
        background-color: #e0e1e4;
      }

      .list-group-item-muted.list-group-item-action:hover,
      .list-group-item-muted.list-group-item-action:focus {
        color: #3b3f47;
        background-color: #cacbcd;
      }

      .list-group-item-muted.list-group-item-action.active {
        color: #ffffff;
        background-color: #3b3f47;
        border-color: #3b3f47;
      }

      .btn-close {
        box-sizing: content-box;
        width: 0.75rem;
        height: 0.75rem;
        padding: 0.25em 0.25em;
        color: #000000;
        background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/0.75rem auto no-repeat;
        border: 0;
        border-radius: 4px;
        opacity: 0.3;
      }

      .btn-close:hover {
        color: #000000;
        text-decoration: none;
        opacity: 0.75;
      }

      .btn-close:focus {
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
        opacity: 1;
      }

      .btn-close:disabled,
      .btn-close.disabled {
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        opacity: 0.25;
      }

      .btn-close-white {
        filter: invert(1) grayscale(100%) brightness(200%);
      }

      .toast {
        width: 350px;
        max-width: 100%;
        font-size: 0.875rem;
        pointer-events: auto;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid #e6e7e9;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        border-radius: 4px;
      }

      .toast.showing {
        opacity: 0;
      }

      .toast:not(.show) {
        display: none;
      }

      .toast-container {
        width: -webkit-max-content;
        width: -moz-max-content;
        width: max-content;
        max-width: 100%;
        pointer-events: none;
      }

      .toast-container> :not(:last-child) {
        margin-bottom: 1.5rem;
      }

      .toast-header {
        display: flex;
        align-items: center;
        padding: 0.5rem 0.75rem;
        color: #626976;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
      }

      .toast-header .btn-close {
        margin-right: -0.375rem;
        margin-left: 0.75rem;
      }

      .toast-body {
        padding: 0.75rem;
        word-wrap: break-word;
      }

      .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1055;
        display: none;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        outline: 0;
      }

      .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
      }

      .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
        transform: translate(0, -1rem);
      }

      @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
          transition: none;
        }
      }

      .modal.show .modal-dialog {
        transform: none;
      }

      .modal.modal-static .modal-dialog {
        transform: scale(1.02);
      }

      .modal-dialog-scrollable {
        height: calc(100% - 1rem);
      }

      .modal-dialog-scrollable .modal-content {
        max-height: 100%;
        overflow: hidden;
      }

      .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
      }

      .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
      }

      .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #f8fafc;
        background-clip: padding-box;
        border: 1px solid transparent;
        border-radius: 4px;
        outline: 0;
      }

      .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        width: 100vw;
        height: 100vh;
        background-color: #1e293b;
      }

      .modal-backdrop.fade {
        opacity: 0;
      }

      .modal-backdrop.show {
        opacity: 0.24;
      }

      .modal-header {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: space-between;
        padding: 1.5rem;
        border-bottom: 1px solid #e6e7e9;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
      }

      .modal-header .btn-close {
        padding: 0.75rem 0.75rem;
        margin: -0.75rem -0.75rem -0.75rem auto;
      }

      .modal-title {
        margin-bottom: 0;
        line-height: 1.4285714;
      }

      .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1.5rem;
      }

      .modal-footer {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        align-items: center;
        justify-content: flex-end;
        padding: 1.125rem;
        border-top: 0 solid #e6e7e9;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
      }

      .modal-footer>* {
        margin: 0.375rem;
      }

      @media (min-width: 576px) {
        .modal-dialog {
          max-width: 540px;
          margin: 1.75rem auto;
        }

        .modal-dialog-scrollable {
          height: calc(100% - 3.5rem);
        }

        .modal-dialog-centered {
          min-height: calc(100% - 3.5rem);
        }

        .modal-sm {
          max-width: 380px;
        }
      }

      @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
          max-width: 720px;
        }
      }

      @media (min-width: 1200px) {
        .modal-xl {
          max-width: 1140px;
        }
      }

      .modal-fullscreen {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
      }

      .modal-fullscreen .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
      }

      .modal-fullscreen .modal-header {
        border-radius: 0;
      }

      .modal-fullscreen .modal-body {
        overflow-y: auto;
      }

      .modal-fullscreen .modal-footer {
        border-radius: 0;
      }

      @media (max-width: 575.98px) {
        .modal-fullscreen-sm-down {
          width: 100vw;
          max-width: none;
          height: 100%;
          margin: 0;
        }

        .modal-fullscreen-sm-down .modal-content {
          height: 100%;
          border: 0;
          border-radius: 0;
        }

        .modal-fullscreen-sm-down .modal-header {
          border-radius: 0;
        }

        .modal-fullscreen-sm-down .modal-body {
          overflow-y: auto;
        }

        .modal-fullscreen-sm-down .modal-footer {
          border-radius: 0;
        }
      }

      @media (max-width: 767.98px) {
        .modal-fullscreen-md-down {
          width: 100vw;
          max-width: none;
          height: 100%;
          margin: 0;
        }

        .modal-fullscreen-md-down .modal-content {
          height: 100%;
          border: 0;
          border-radius: 0;
        }

        .modal-fullscreen-md-down .modal-header {
          border-radius: 0;
        }

        .modal-fullscreen-md-down .modal-body {
          overflow-y: auto;
        }

        .modal-fullscreen-md-down .modal-footer {
          border-radius: 0;
        }
      }

      @media (max-width: 991.98px) {
        .modal-fullscreen-lg-down {
          width: 100vw;
          max-width: none;
          height: 100%;
          margin: 0;
        }

        .modal-fullscreen-lg-down .modal-content {
          height: 100%;
          border: 0;
          border-radius: 0;
        }

        .modal-fullscreen-lg-down .modal-header {
          border-radius: 0;
        }

        .modal-fullscreen-lg-down .modal-body {
          overflow-y: auto;
        }

        .modal-fullscreen-lg-down .modal-footer {
          border-radius: 0;
        }
      }

      @media (max-width: 1199.98px) {
        .modal-fullscreen-xl-down {
          width: 100vw;
          max-width: none;
          height: 100%;
          margin: 0;
        }

        .modal-fullscreen-xl-down .modal-content {
          height: 100%;
          border: 0;
          border-radius: 0;
        }

        .modal-fullscreen-xl-down .modal-header {
          border-radius: 0;
        }

        .modal-fullscreen-xl-down .modal-body {
          overflow-y: auto;
        }

        .modal-fullscreen-xl-down .modal-footer {
          border-radius: 0;
        }
      }

      @media (max-width: 1399.98px) {
        .modal-fullscreen-xxl-down {
          width: 100vw;
          max-width: none;
          height: 100%;
          margin: 0;
        }

        .modal-fullscreen-xxl-down .modal-content {
          height: 100%;
          border: 0;
          border-radius: 0;
        }

        .modal-fullscreen-xxl-down .modal-header {
          border-radius: 0;
        }

        .modal-fullscreen-xxl-down .modal-body {
          overflow-y: auto;
        }

        .modal-fullscreen-xxl-down .modal-footer {
          border-radius: 0;
        }
      }

      .tooltip {
        position: absolute;
        z-index: 1080;
        display: block;
        margin: 0;
        font-family: system-ui, sans-serif, sans-serif;
        font-style: normal;
        font-weight: 700;
        line-height: 1.4285714;
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
        font-size: 0.8rem;
        word-wrap: break-word;
        opacity: 0;
      }

      .tooltip.show {
        opacity: 0.75;
      }

      .tooltip .tooltip-arrow {
        position: absolute;
        display: block;
        width: 0.4rem;
        height: 0.3rem;
      }

      .tooltip .tooltip-arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid;
      }

      .bs-tooltip-top,
      .bs-tooltip-auto[data-popper-placement^="top"] {
        padding: 0.3rem 0;
      }

      .bs-tooltip-top .tooltip-arrow,
      .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
        bottom: 0;
      }

      .bs-tooltip-top .tooltip-arrow::before,
      .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
        top: -1px;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000000;
      }

      .bs-tooltip-end,
      .bs-tooltip-auto[data-popper-placement^="right"] {
        padding: 0.6rem 0.4rem;
      }

      .bs-tooltip-end .tooltip-arrow,
      .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
        left: 0;
        width: 0.4rem;
        height: 0.4rem;
      }

      .bs-tooltip-end .tooltip-arrow::before,
      .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
        right: -1px;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000000;
      }

      .bs-tooltip-bottom,
      .bs-tooltip-auto[data-popper-placement^="bottom"] {
        padding: 0.3rem 0;
      }

      .bs-tooltip-bottom .tooltip-arrow,
      .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
        top: 0;
      }

      .bs-tooltip-bottom .tooltip-arrow::before,
      .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
        bottom: -1px;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000000;
      }

      .bs-tooltip-start,
      .bs-tooltip-auto[data-popper-placement^="left"] {
        padding: 0.4rem 0.4rem;
      }

      .bs-tooltip-start .tooltip-arrow,
      .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
        right: 0;
        width: 0.4rem;
        height: 0.4rem;
      }

      .bs-tooltip-start .tooltip-arrow::before,
      .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
        left: -1px;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000000;
      }

      .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #ffffff;
        text-align: center;
        background-color: #000000;
        border-radius: 4px;
      }

      .popover {
        position: absolute;
        top: 0;
        left: 0
          /* rtl:ignore */
        ;
        z-index: 1070;
        display: block;
        max-width: 276px;
        font-family: var(--tblr-font-sans-serif);
        font-style: normal;
        font-weight: 400;
        line-height: 1.4285714;
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
        font-size: 0.765625rem;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid #e6e7e9;
        border-radius: 8px;
      }

      .popover .popover-arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
      }

      .popover .popover-arrow::before,
      .popover .popover-arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid;
      }

      .bs-popover-top>.popover-arrow,
      .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow {
        bottom: calc(-0.5rem - 1px);
      }

      .bs-popover-top>.popover-arrow::before,
      .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #e6e7e9;
      }

      .bs-popover-top>.popover-arrow::after,
      .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #ffffff;
      }

      .bs-popover-end>.popover-arrow,
      .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow {
        left: calc(-0.5rem - 1px);
        width: 0.5rem;
        height: 1rem;
      }

      .bs-popover-end>.popover-arrow::before,
      .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #e6e7e9;
      }

      .bs-popover-end>.popover-arrow::after,
      .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #ffffff;
      }

      .bs-popover-bottom>.popover-arrow,
      .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow {
        top: calc(-0.5rem - 1px);
      }

      .bs-popover-bottom>.popover-arrow::before,
      .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #e6e7e9;
      }

      .bs-popover-bottom>.popover-arrow::after,
      .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #ffffff;
      }

      .bs-popover-bottom .popover-header::before,
      .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f0f0f0;
      }

      .bs-popover-start>.popover-arrow,
      .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow {
        right: calc(-0.5rem - 1px);
        width: 0.5rem;
        height: 1rem;
      }

      .bs-popover-start>.popover-arrow::before,
      .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #e6e7e9;
      }

      .bs-popover-start>.popover-arrow::after,
      .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #ffffff;
      }

      .popover-header {
        padding: 0.5rem 1rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        background-color: #f0f0f0;
        border-bottom: 1px solid #e6e7e9;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
      }

      .popover-header:empty {
        display: none;
      }

      .popover-body {
        padding: 1rem 1rem;
        color: #1e293b;
      }

      .carousel {
        position: relative;
      }

      .carousel.pointer-event {
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
        transition: transform 0.6s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .carousel-item {
          transition: none;
        }
      }

      .carousel-item.active,
      .carousel-item-next,
      .carousel-item-prev {
        display: block;
      }

      /* rtl:begin:ignore */
      .carousel-item-next:not(.carousel-item-start),
      .active.carousel-item-end {
        transform: translateX(100%);
      }

      .carousel-item-prev:not(.carousel-item-end),
      .active.carousel-item-start {
        transform: translateX(-100%);
      }

      /* rtl:end:ignore */
      .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none;
      }

      .carousel-fade .carousel-item.active,
      .carousel-fade .carousel-item-next.carousel-item-start,
      .carousel-fade .carousel-item-prev.carousel-item-end {
        z-index: 1;
        opacity: 1;
      }

      .carousel-fade .active.carousel-item-start,
      .carousel-fade .active.carousel-item-end {
        z-index: 0;
        opacity: 0;
        transition: opacity 0s 0.6s;
      }

      @media (prefers-reduced-motion: reduce) {

        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
          transition: none;
        }
      }

      .carousel-control-prev,
      .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        padding: 0;
        color: #ffffff;
        text-align: center;
        background: none;
        border: 0;
        opacity: 0.5;
        transition: opacity 0.15s ease;
      }

      @media (prefers-reduced-motion: reduce) {

        .carousel-control-prev,
        .carousel-control-next {
          transition: none;
        }
      }

      .carousel-control-prev:hover,
      .carousel-control-prev:focus,
      .carousel-control-next:hover,
      .carousel-control-next:focus {
        color: #ffffff;
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

      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        display: inline-block;
        width: 1.5rem;
        height: 1.5rem;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100% 100%;
      }

      /* rtl:options: {
    "autoRename": true,
    "stringMap":[ {
    "name" : "prev-next",
    "search" : "prev",
    "replace" : "next"
    } ]
    } */
      .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='15 18 9 12 15 6'%3e%3c/polyline%3e%3c/svg%3e");
      }

      .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='9 18 15 12 9 6'%3e%3c/polyline%3e%3c/svg%3e");
      }

      .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: center;
        padding: 0;
        margin-right: 15%;
        margin-bottom: 1rem;
        margin-left: 15%;
        list-style: none;
      }

      .carousel-indicators [data-bs-target] {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        padding: 0;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: 0.5;
        transition: opacity 0.6s ease;
      }

      @media (prefers-reduced-motion: reduce) {
        .carousel-indicators [data-bs-target] {
          transition: none;
        }
      }

      .carousel-indicators .active {
        opacity: 1;
      }

      .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 1.25rem;
        left: 15%;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        color: #ffffff;
        text-align: center;
      }

      .carousel-dark .carousel-control-prev-icon,
      .carousel-dark .carousel-control-next-icon {
        filter: invert(1) grayscale(100);
      }

      .carousel-dark .carousel-indicators [data-bs-target] {
        background-color: #000000;
      }

      .carousel-dark .carousel-caption {
        color: #000000;
      }

      @-webkit-keyframes spinner-border {
        to {
          transform: rotate(360deg)
            /* rtl:ignore */
          ;
        }
      }

      @keyframes spinner-border {
        to {
          transform: rotate(360deg)
            /* rtl:ignore */
          ;
        }
      }

      .spinner-border {
        display: inline-block;
        width: 1.5rem;
        height: 1.5rem;
        vertical-align: -0.125em;
        border: 2px solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: 0.75s linear infinite spinner-border;
        animation: 0.75s linear infinite spinner-border;
      }

      .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 1px;
      }

      @-webkit-keyframes spinner-grow {
        0% {
          transform: scale(0);
        }

        50% {
          opacity: 1;
          transform: none;
        }
      }

      @keyframes spinner-grow {
        0% {
          transform: scale(0);
        }

        50% {
          opacity: 1;
          transform: none;
        }
      }

      .spinner-grow {
        display: inline-block;
        width: 1.5rem;
        height: 1.5rem;
        vertical-align: -0.125em;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: 0.75s linear infinite spinner-grow;
        animation: 0.75s linear infinite spinner-grow;
      }

      .spinner-grow-sm {
        width: 1rem;
        height: 1rem;
      }

      @media (prefers-reduced-motion: reduce) {

        .spinner-border,
        .spinner-grow {
          -webkit-animation-duration: 1.5s;
          animation-duration: 1.5s;
        }
      }

      .offcanvas {
        position: fixed;
        bottom: 0;
        z-index: 1045;
        display: flex;
        flex-direction: column;
        max-width: 100%;
        visibility: hidden;
        background-color: #f8fafc;
        background-clip: padding-box;
        outline: 0;
        transition: transform 0.3s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .offcanvas {
          transition: none;
        }
      }

      .offcanvas-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #1e293b;
      }

      .offcanvas-backdrop.fade {
        opacity: 0;
      }

      .offcanvas-backdrop.show {
        opacity: 0.24;
      }

      .offcanvas-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.5rem 1.5rem;
      }

      .offcanvas-header .btn-close {
        padding: 0.75rem 0.75rem;
        margin-top: -0.75rem;
        margin-right: -0.75rem;
        margin-bottom: -0.75rem;
      }

      .offcanvas-title {
        margin-bottom: 0;
        line-height: 1.4285714;
      }

      .offcanvas-body {
        flex-grow: 1;
        padding: 1.5rem 1.5rem;
        overflow-y: auto;
      }

      .offcanvas-start {
        top: 0;
        left: 0;
        width: 400px;
        border-right: 1px solid rgba(98, 105, 118, 0.16);
        transform: translateX(-100%);
      }

      .offcanvas-end {
        top: 0;
        right: 0;
        width: 400px;
        border-left: 1px solid rgba(98, 105, 118, 0.16);
        transform: translateX(100%);
      }

      .offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: 30vh;
        max-height: 100%;
        border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        transform: translateY(-100%);
      }

      .offcanvas-bottom {
        right: 0;
        left: 0;
        height: 30vh;
        max-height: 100%;
        border-top: 1px solid rgba(98, 105, 118, 0.16);
        transform: translateY(100%);
      }

      .offcanvas.show {
        transform: none;
      }

      .placeholder {
        display: inline-block;
        min-height: 1em;
        vertical-align: middle;
        cursor: wait;
        background-color: currentColor;
        opacity: 0.5;
      }

      .placeholder.btn::before {
        display: inline-block;
        content: "";
      }

      .placeholder-xs {
        min-height: 0.6em;
      }

      .placeholder-sm {
        min-height: 0.8em;
      }

      .placeholder-lg {
        min-height: 1.2em;
      }

      .placeholder-glow .placeholder {
        -webkit-animation: placeholder-glow 2s ease-in-out infinite;
        animation: placeholder-glow 2s ease-in-out infinite;
      }

      @-webkit-keyframes placeholder-glow {
        50% {
          opacity: 0.2;
        }
      }

      @keyframes placeholder-glow {
        50% {
          opacity: 0.2;
        }
      }

      .placeholder-wave {
        -webkit-mask-image: linear-gradient(130deg,
            #000000 55%,
            rgba(0, 0, 0, 0.8) 75%,
            #000000 95%);
        mask-image: linear-gradient(130deg,
            #000000 55%,
            rgba(0, 0, 0, 0.8) 75%,
            #000000 95%);
        -webkit-mask-size: 200% 100%;
        mask-size: 200% 100%;
        -webkit-animation: placeholder-wave 2s linear infinite;
        animation: placeholder-wave 2s linear infinite;
      }

      @-webkit-keyframes placeholder-wave {
        100% {
          -webkit-mask-position: -200% 0%;
          mask-position: -200% 0%;
        }
      }

      @keyframes placeholder-wave {
        100% {
          -webkit-mask-position: -200% 0%;
          mask-position: -200% 0%;
        }
      }

      .clearfix::after {
        display: block;
        clear: both;
        content: "";
      }

      .link-primary {
        color: #206bc4;
      }

      .link-primary:hover,
      .link-primary:focus {
        color: #1a569d;
      }

      .link-secondary {
        color: #626976;
      }

      .link-secondary:hover,
      .link-secondary:focus {
        color: #4e545e;
      }

      .link-success {
        color: #2fb344;
      }

      .link-success:hover,
      .link-success:focus {
        color: #268f36;
      }

      .link-info {
        color: #4299e1;
      }

      .link-info:hover,
      .link-info:focus {
        color: #357ab4;
      }

      .link-warning {
        color: #f76707;
      }

      .link-warning:hover,
      .link-warning:focus {
        color: #c65206;
      }

      .link-danger {
        color: #ff3939;
      }

      .link-danger:hover,
      .link-danger:focus {
        color: #ab2e2e;
      }

      .link-light {
        color: #f8fafc;
      }

      .link-light:hover,
      .link-light:focus {
        color: #f9fbfd;
      }

      .link-dark {
        color: #1e293b;
      }

      .link-dark:hover,
      .link-dark:focus {
        color: #18212f;
      }

      .link-muted {
        color: #626976;
      }

      .link-muted:hover,
      .link-muted:focus {
        color: #4e545e;
      }

      .ratio {
        position: relative;
        width: 100%;
      }

      .ratio::before {
        display: block;
        padding-top: var(--tblr-aspect-ratio);
        content: "";
      }

      .ratio>* {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }

      .ratio-1x1 {
        --tblr-aspect-ratio: 100%;
      }

      .ratio-4x3 {
        --tblr-aspect-ratio: calc(3 / 4 * 100%);
      }

      .ratio-3x4 {
        --tblr-aspect-ratio: calc(4 / 3 * 100%);
      }

      .ratio-16x9 {
        --tblr-aspect-ratio: calc(9 / 16 * 100%);
      }

      .ratio-9x16 {
        --tblr-aspect-ratio: calc(16 / 9 * 100%);
      }

      .ratio-21x9 {
        --tblr-aspect-ratio: calc(9 / 21 * 100%);
      }

      .ratio-9x21 {
        --tblr-aspect-ratio: calc(21 / 9 * 100%);
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

      .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
      }

      @media (min-width: 576px) {
        .sticky-sm-top {
          position: -webkit-sticky;
          position: sticky;
          top: 0;
          z-index: 1020;
        }
      }

      @media (min-width: 768px) {
        .sticky-md-top {
          position: -webkit-sticky;
          position: sticky;
          top: 0;
          z-index: 1020;
        }
      }

      @media (min-width: 992px) {
        .sticky-lg-top {
          position: -webkit-sticky;
          position: sticky;
          top: 0;
          z-index: 1020;
        }
      }

      @media (min-width: 1200px) {
        .sticky-xl-top {
          position: -webkit-sticky;
          position: sticky;
          top: 0;
          z-index: 1020;
        }
      }

      @media (min-width: 1400px) {
        .sticky-xxl-top {
          position: -webkit-sticky;
          position: sticky;
          top: 0;
          z-index: 1020;
        }
      }

      .hstack {
        display: flex;
        flex-direction: row;
        align-items: center;
        align-self: stretch;
      }

      .vstack {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        align-self: stretch;
      }

      .visually-hidden,
      .visually-hidden-focusable:not(:focus):not(:focus-within) {
        position: absolute !important;
        width: 1px !important;
        height: 1px !important;
        padding: 0 !important;
        margin: -1px !important;
        overflow: hidden !important;
        clip: rect(0, 0, 0, 0) !important;
        white-space: nowrap !important;
        border: 0 !important;
      }

      .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
      }

      .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }

      .vr {
        display: inline-block;
        align-self: stretch;
        width: 1px;
        min-height: 1em;
        background-color: currentColor;
        opacity: 0.16;
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

      .float-start {
        float: left !important;
      }

      .float-end {
        float: right !important;
      }

      .float-none {
        float: none !important;
      }

      .opacity-0 {
        opacity: 0 !important;
      }

      .opacity-25 {
        opacity: 0.25 !important;
      }

      .opacity-50 {
        opacity: 0.5 !important;
      }

      .opacity-75 {
        opacity: 0.75 !important;
      }

      .opacity-100 {
        opacity: 1 !important;
      }

      .overflow-auto {
        overflow: auto !important;
      }

      .overflow-hidden {
        overflow: hidden !important;
      }

      .overflow-visible {
        overflow: visible !important;
      }

      .overflow-scroll {
        overflow: scroll !important;
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

      .d-grid {
        display: grid !important;
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
        display: flex !important;
      }

      .d-inline-flex {
        display: inline-flex !important;
      }

      .d-none {
        display: none !important;
      }

      .shadow {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
      }

      .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
      }

      .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
      }

      .shadow-none {
        box-shadow: none !important;
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

      .top-0 {
        top: 0 !important;
      }

      .top-50 {
        top: 50% !important;
      }

      .top-100 {
        top: 100% !important;
      }

      .bottom-0 {
        bottom: 0 !important;
      }

      .bottom-50 {
        bottom: 50% !important;
      }

      .bottom-100 {
        bottom: 100% !important;
      }

      .start-0 {
        left: 0 !important;
      }

      .start-50 {
        left: 50% !important;
      }

      .start-100 {
        left: 100% !important;
      }

      .end-0 {
        right: 0 !important;
      }

      .end-50 {
        right: 50% !important;
      }

      .end-100 {
        right: 100% !important;
      }

      .translate-middle {
        transform: translate(-50%, -50%) !important;
      }

      .translate-middle-x {
        transform: translateX(-50%) !important;
      }

      .translate-middle-y {
        transform: translateY(-50%) !important;
      }

      .border {
        border: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-wide {
        border: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-0 {
        border: 0 !important;
      }

      .border-top {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-top-wide {
        border-top: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-top-0 {
        border-top: 0 !important;
      }

      .border-end {
        border-right: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-end-wide {
        border-right: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-end-0 {
        border-right: 0 !important;
      }

      .border-bottom {
        border-bottom: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-bottom-wide {
        border-bottom: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-bottom-0 {
        border-bottom: 0 !important;
      }

      .border-start {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-start-wide {
        border-left: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-start-0 {
        border-left: 0 !important;
      }

      .border-primary {
        border-color: #206bc4 !important;
      }

      .border-secondary {
        border-color: #626976 !important;
      }

      .border-success {
        border-color: #2fb344 !important;
      }

      .border-info {
        border-color: #4299e1 !important;
      }

      .border-warning {
        border-color: #f76707 !important;
      }

      .border-danger {
        border-color: #ff3939 !important;
      }

      .border-light {
        border-color: #f8fafc !important;
      }

      .border-dark {
        border-color: #1e293b !important;
      }

      .border-muted {
        border-color: #626976 !important;
      }

      .border-white {
        border-color: #ffffff !important;
      }

      .border-1 {
        border-width: 1px !important;
      }

      .border-2 {
        border-width: 2px !important;
      }

      .border-3 {
        border-width: 3px !important;
      }

      .border-4 {
        border-width: 4px !important;
      }

      .border-5 {
        border-width: 5px !important;
      }

      .w-0 {
        width: 0 !important;
      }

      .w-1 {
        width: 0.25rem !important;
      }

      .w-2 {
        width: 0.5rem !important;
      }

      .w-3 {
        width: 1rem !important;
      }

      .w-4 {
        width: 2rem !important;
      }

      .w-5 {
        width: 4rem !important;
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

      .mw-100 {
        max-width: 100% !important;
      }

      .vw-100 {
        width: 100vw !important;
      }

      .min-vw-100 {
        min-width: 100vw !important;
      }

      .h-0 {
        height: 0 !important;
      }

      .h-1 {
        height: 0.25rem !important;
      }

      .h-2 {
        height: 0.5rem !important;
      }

      .h-3 {
        height: 1rem !important;
      }

      .h-4 {
        height: 2rem !important;
      }

      .h-5 {
        height: 4rem !important;
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

      .mh-100 {
        max-height: 100% !important;
      }

      .vh-100 {
        height: 100vh !important;
      }

      .min-vh-100 {
        min-height: 100vh !important;
      }

      .flex-fill {
        flex: 1 1 auto !important;
      }

      .flex-row {
        flex-direction: row !important;
      }

      .flex-column {
        flex-direction: column !important;
      }

      .flex-row-reverse {
        flex-direction: row-reverse !important;
      }

      .flex-column-reverse {
        flex-direction: column-reverse !important;
      }

      .flex-grow-0 {
        flex-grow: 0 !important;
      }

      .flex-grow-1 {
        flex-grow: 1 !important;
      }

      .flex-shrink-0 {
        flex-shrink: 0 !important;
      }

      .flex-shrink-1 {
        flex-shrink: 1 !important;
      }

      .flex-wrap {
        flex-wrap: wrap !important;
      }

      .flex-nowrap {
        flex-wrap: nowrap !important;
      }

      .flex-wrap-reverse {
        flex-wrap: wrap-reverse !important;
      }

      .gap-0 {
        gap: 0 !important;
      }

      .gap-1 {
        gap: 0.25rem !important;
      }

      .gap-2 {
        gap: 0.5rem !important;
      }

      .gap-3 {
        gap: 1rem !important;
      }

      .gap-4 {
        gap: 2rem !important;
      }

      .gap-5 {
        gap: 4rem !important;
      }

      .justify-content-start {
        justify-content: flex-start !important;
      }

      .justify-content-end {
        justify-content: flex-end !important;
      }

      .justify-content-center {
        justify-content: center !important;
      }

      .justify-content-between {
        justify-content: space-between !important;
      }

      .justify-content-around {
        justify-content: space-around !important;
      }

      .justify-content-evenly {
        justify-content: space-evenly !important;
      }

      .align-items-start {
        align-items: flex-start !important;
      }

      .align-items-end {
        align-items: flex-end !important;
      }

      .align-items-center {
        align-items: center !important;
      }

      .align-items-baseline {
        align-items: baseline !important;
      }

      .align-items-stretch {
        align-items: stretch !important;
      }

      .align-content-start {
        align-content: flex-start !important;
      }

      .align-content-end {
        align-content: flex-end !important;
      }

      .align-content-center {
        align-content: center !important;
      }

      .align-content-between {
        align-content: space-between !important;
      }

      .align-content-around {
        align-content: space-around !important;
      }

      .align-content-stretch {
        align-content: stretch !important;
      }

      .align-self-auto {
        align-self: auto !important;
      }

      .align-self-start {
        align-self: flex-start !important;
      }

      .align-self-end {
        align-self: flex-end !important;
      }

      .align-self-center {
        align-self: center !important;
      }

      .align-self-baseline {
        align-self: baseline !important;
      }

      .align-self-stretch {
        align-self: stretch !important;
      }

      .order-first {
        order: -1 !important;
      }

      .order-0 {
        order: 0 !important;
      }

      .order-1 {
        order: 1 !important;
      }

      .order-2 {
        order: 2 !important;
      }

      .order-3 {
        order: 3 !important;
      }

      .order-4 {
        order: 4 !important;
      }

      .order-5 {
        order: 5 !important;
      }

      .order-last {
        order: 6 !important;
      }

      .m-0 {
        margin: 0 !important;
      }

      .m-1 {
        margin: 0.25rem !important;
      }

      .m-2 {
        margin: 0.5rem !important;
      }

      .m-3 {
        margin: 1rem !important;
      }

      .m-4 {
        margin: 2rem !important;
      }

      .m-5 {
        margin: 4rem !important;
      }

      .m-auto {
        margin: auto !important;
      }

      .mx-0 {
        margin-right: 0 !important;
        margin-left: 0 !important;
      }

      .mx-1 {
        margin-right: 0.25rem !important;
        margin-left: 0.25rem !important;
      }

      .mx-2 {
        margin-right: 0.5rem !important;
        margin-left: 0.5rem !important;
      }

      .mx-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important;
      }

      .mx-4 {
        margin-right: 2rem !important;
        margin-left: 2rem !important;
      }

      .mx-5 {
        margin-right: 4rem !important;
        margin-left: 4rem !important;
      }

      .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
      }

      .my-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }

      .my-1 {
        margin-top: 0.25rem !important;
        margin-bottom: 0.25rem !important;
      }

      .my-2 {
        margin-top: 0.5rem !important;
        margin-bottom: 0.5rem !important;
      }

      .my-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
      }

      .my-4 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
      }

      .my-5 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
      }

      .my-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }

      .mt-0 {
        margin-top: 0 !important;
      }

      .mt-1 {
        margin-top: 0.25rem !important;
      }

      .mt-2 {
        margin-top: 0.5rem !important;
      }

      .mt-3 {
        margin-top: 1rem !important;
      }

      .mt-4 {
        margin-top: 2rem !important;
      }

      .mt-5 {
        margin-top: 4rem !important;
      }

      .mt-auto {
        margin-top: auto !important;
      }

      .me-0 {
        margin-right: 0 !important;
      }

      .me-1 {
        margin-right: 0.25rem !important;
      }

      .me-2 {
        margin-right: 0.5rem !important;
      }

      .me-3 {
        margin-right: 1rem !important;
      }

      .me-4 {
        margin-right: 2rem !important;
      }

      .me-5 {
        margin-right: 4rem !important;
      }

      .me-auto {
        margin-right: auto !important;
      }

      .mb-0 {
        margin-bottom: 0 !important;
      }

      .mb-1 {
        margin-bottom: 0.25rem !important;
      }

      .mb-2 {
        margin-bottom: 0.5rem !important;
      }

      .mb-3 {
        margin-bottom: 1rem !important;
      }

      .mb-4 {
        margin-bottom: 2rem !important;
      }

      .mb-5 {
        margin-bottom: 4rem !important;
      }

      .mb-auto {
        margin-bottom: auto !important;
      }

      .ms-0 {
        margin-left: 0 !important;
      }

      .ms-1 {
        margin-left: 0.25rem !important;
      }

      .ms-2 {
        margin-left: 0.5rem !important;
      }

      .ms-3 {
        margin-left: 1rem !important;
      }

      .ms-4 {
        margin-left: 2rem !important;
      }

      .ms-5 {
        margin-left: 4rem !important;
      }

      .ms-auto {
        margin-left: auto !important;
      }

      .p-0 {
        padding: 0 !important;
      }

      .p-1 {
        padding: 0.25rem !important;
      }

      .p-2 {
        padding: 0.5rem !important;
      }

      .p-3 {
        padding: 1rem !important;
      }

      .p-4 {
        padding: 2rem !important;
      }

      .p-5 {
        padding: 4rem !important;
      }

      .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important;
      }

      .px-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
      }

      .px-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
      }

      .px-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
      }

      .px-4 {
        padding-right: 2rem !important;
        padding-left: 2rem !important;
      }

      .px-5 {
        padding-right: 4rem !important;
        padding-left: 4rem !important;
      }

      .py-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }

      .py-1 {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
      }

      .py-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
      }

      .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
      }

      .py-4 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
      }

      .py-5 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }

      .pt-0 {
        padding-top: 0 !important;
      }

      .pt-1 {
        padding-top: 0.25rem !important;
      }

      .pt-2 {
        padding-top: 0.5rem !important;
      }

      .pt-3 {
        padding-top: 1rem !important;
      }

      .pt-4 {
        padding-top: 2rem !important;
      }

      .pt-5 {
        padding-top: 4rem !important;
      }

      .pe-0 {
        padding-right: 0 !important;
      }

      .pe-1 {
        padding-right: 0.25rem !important;
      }

      .pe-2 {
        padding-right: 0.5rem !important;
      }

      .pe-3 {
        padding-right: 1rem !important;
      }

      .pe-4 {
        padding-right: 2rem !important;
      }

      .pe-5 {
        padding-right: 4rem !important;
      }

      .pb-0 {
        padding-bottom: 0 !important;
      }

      .pb-1 {
        padding-bottom: 0.25rem !important;
      }

      .pb-2 {
        padding-bottom: 0.5rem !important;
      }

      .pb-3 {
        padding-bottom: 1rem !important;
      }

      .pb-4 {
        padding-bottom: 2rem !important;
      }

      .pb-5 {
        padding-bottom: 4rem !important;
      }

      .ps-0 {
        padding-left: 0 !important;
      }

      .ps-1 {
        padding-left: 0.25rem !important;
      }

      .ps-2 {
        padding-left: 0.5rem !important;
      }

      .ps-3 {
        padding-left: 1rem !important;
      }

      .ps-4 {
        padding-left: 2rem !important;
      }

      .ps-5 {
        padding-left: 4rem !important;
      }

      .font-monospace {
        font-family: var(--tblr-font-monospace) !important;
      }

      .fs-1 {
        font-size: calc(1.275rem + 0.3vw) !important;
      }

      .fs-2 {
        font-size: 1.25rem !important;
      }

      .fs-3 {
        font-size: 1rem !important;
      }

      .fs-4 {
        font-size: 0.875rem !important;
      }

      .fs-5 {
        font-size: 0.75rem !important;
      }

      .fs-6 {
        font-size: 0.625rem !important;
      }

      .fst-italic {
        font-style: italic !important;
      }

      .fst-normal {
        font-style: normal !important;
      }

      .fw-light {
        font-weight: 300 !important;
      }

      .fw-lighter {
        font-weight: lighter !important;
      }

      .fw-normal {
        font-weight: 400 !important;
      }

      .fw-bold {
        font-weight: 600 !important;
      }

      .fw-bolder {
        font-weight: bolder !important;
      }

      .lh-1 {
        line-height: 1 !important;
      }

      .lh-sm {
        line-height: 1.1428571 !important;
      }

      .lh-base {
        line-height: 1.4285714 !important;
      }

      .lh-lg {
        line-height: 1.7142857 !important;
      }

      .text-start {
        text-align: left !important;
      }

      .text-end {
        text-align: right !important;
      }

      .text-center {
        text-align: center !important;
      }

      .text-decoration-none {
        text-decoration: none !important;
      }

      .text-decoration-underline {
        text-decoration: underline !important;
      }

      .text-decoration-line-through {
        text-decoration: line-through !important;
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

      .text-wrap {
        white-space: normal !important;
      }

      .text-nowrap {
        white-space: nowrap !important;
      }

      /* rtl:begin:remove */
      .text-break {
        word-wrap: break-word !important;
        word-break: break-word !important;
      }

      /* rtl:end:remove */
      .text-primary {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-primary-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-secondary {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-secondary-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-success {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-success-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-info {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-info-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-warning {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-warning-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-danger {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-danger-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-light {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-light-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-dark {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-dark-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-muted {
        --tblr-text-opacity: 1;
        color: #626976 !important;
      }

      .text-black {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-black-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-white {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-white-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-body {
        --tblr-text-opacity: 1;
        color: rgba(var(--tblr-body-color-rgb), var(--tblr-text-opacity)) !important;
      }

      .text-black-50 {
        --tblr-text-opacity: 1;
        color: rgba(0, 0, 0, 0.5) !important;
      }

      .text-white-50 {
        --tblr-text-opacity: 1;
        color: rgba(255, 255, 255, 0.5) !important;
      }

      .text-reset {
        --tblr-text-opacity: 1;
        color: inherit !important;
      }

      .text-opacity-25 {
        --tblr-text-opacity: 0.25;
      }

      .text-opacity-50 {
        --tblr-text-opacity: 0.5;
      }

      .text-opacity-75 {
        --tblr-text-opacity: 0.75;
      }

      .text-opacity-100 {
        --tblr-text-opacity: 1;
      }

      .bg-primary {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-primary-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-secondary {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-secondary-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-success {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-success-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-info {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-info-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-warning {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-warning-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-danger {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-danger-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-light {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-light-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-dark {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-dark-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-muted {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-muted-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-black {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-black-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-white {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-white-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-body {
        --tblr-bg-opacity: 1;
        background-color: rgba(var(--tblr-body-bg-rgb),
            var(--tblr-bg-opacity)) !important;
      }

      .bg-transparent {
        --tblr-bg-opacity: 1;
        background-color: transparent !important;
      }

      .bg-opacity-10 {
        --tblr-bg-opacity: 0.1;
      }

      .bg-opacity-25 {
        --tblr-bg-opacity: 0.25;
      }

      .bg-opacity-50 {
        --tblr-bg-opacity: 0.5;
      }

      .bg-opacity-75 {
        --tblr-bg-opacity: 0.75;
      }

      .bg-opacity-100 {
        --tblr-bg-opacity: 1;
      }

      .bg-gradient {
        background-image: var(--tblr-gradient) !important;
      }

      .user-select-all {
        -webkit-user-select: all !important;
        -moz-user-select: all !important;
        user-select: all !important;
      }

      .user-select-auto {
        -webkit-user-select: auto !important;
        -moz-user-select: auto !important;
        -ms-user-select: auto !important;
        user-select: auto !important;
      }

      .user-select-none {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important;
      }

      .pe-none {
        pointer-events: none !important;
      }

      .pe-auto {
        pointer-events: auto !important;
      }

      .rounded {
        border-radius: 4px !important;
      }

      .rounded-0 {
        border-radius: 0 !important;
      }

      .rounded-1 {
        border-radius: 2px !important;
      }

      .rounded-2 {
        border-radius: 4px !important;
      }

      .rounded-3 {
        border-radius: 8px !important;
      }

      .rounded-circle {
        border-radius: 50% !important;
      }

      .rounded-pill {
        border-radius: 100rem !important;
      }

      .rounded-top {
        border-top-left-radius: 4px !important;
        border-top-right-radius: 4px !important;
      }

      .rounded-end {
        border-top-right-radius: 4px !important;
        border-bottom-right-radius: 4px !important;
      }

      .rounded-bottom {
        border-bottom-right-radius: 4px !important;
        border-bottom-left-radius: 4px !important;
      }

      .rounded-start {
        border-bottom-left-radius: 4px !important;
        border-top-left-radius: 4px !important;
      }

      .visible {
        visibility: visible !important;
      }

      .invisible {
        visibility: hidden !important;
      }

      .object-contain {
        -o-object-fit: contain !important;
        object-fit: contain !important;
      }

      .object-cover {
        -o-object-fit: cover !important;
        object-fit: cover !important;
      }

      .object-fill {
        -o-object-fit: fill !important;
        object-fit: fill !important;
      }

      .object-scale-down {
        -o-object-fit: scale-down !important;
        object-fit: scale-down !important;
      }

      .object-none {
        -o-object-fit: none !important;
        object-fit: none !important;
      }

      .tracking-tight {
        letter-spacing: -0.05em !important;
      }

      .tracking-normal {
        letter-spacing: 0 !important;
      }

      .tracking-wide {
        letter-spacing: 0.05em !important;
      }

      .cursor-auto {
        cursor: auto !important;
      }

      .cursor-pointer {
        cursor: pointer !important;
      }

      .cursor-move {
        cursor: move !important;
      }

      .cursor-not-allowed {
        cursor: not-allowed !important;
      }

      .cursor-zoom-in {
        cursor: zoom-in !important;
      }

      .cursor-zoom-out {
        cursor: zoom-out !important;
      }

      .cursor-default {
        cursor: default !important;
      }

      .cursor-none {
        cursor: none !important;
      }

      .cursor-help {
        cursor: help !important;
      }

      .cursor-progress {
        cursor: progress !important;
      }

      .cursor-wait {
        cursor: wait !important;
      }

      .cursor-text {
        cursor: text !important;
      }

      .cursor-v-text {
        cursor: vertical-text !important;
      }

      .cursor-grab {
        cursor: -webkit-grab !important;
        cursor: grab !important;
      }

      .cursor-grabbing {
        cursor: -webkit-grabbing !important;
        cursor: grabbing !important;
      }

      .border-x {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
        border-right: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-x-wide {
        border-left: 2px solid rgba(98, 105, 118, 0.16) !important;
        border-right: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-x-0 {
        border-left: 0 !important;
        border-right: 0 !important;
      }

      .border-y {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
        border-bottom: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-y-wide {
        border-top: 2px solid rgba(98, 105, 118, 0.16) !important;
        border-bottom: 2px solid rgba(98, 105, 118, 0.16) !important;
      }

      .border-y-0 {
        border-top: 0 !important;
        border-bottom: 0 !important;
      }

      .columns-2 {
        -moz-columns: 2 !important;
        columns: 2 !important;
      }

      .columns-3 {
        -moz-columns: 3 !important;
        columns: 3 !important;
      }

      .columns-4 {
        -moz-columns: 4 !important;
        columns: 4 !important;
      }

      @media (min-width: 576px) {
        .float-sm-start {
          float: left !important;
        }

        .float-sm-end {
          float: right !important;
        }

        .float-sm-none {
          float: none !important;
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

        .d-sm-grid {
          display: grid !important;
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
          display: flex !important;
        }

        .d-sm-inline-flex {
          display: inline-flex !important;
        }

        .d-sm-none {
          display: none !important;
        }

        .flex-sm-fill {
          flex: 1 1 auto !important;
        }

        .flex-sm-row {
          flex-direction: row !important;
        }

        .flex-sm-column {
          flex-direction: column !important;
        }

        .flex-sm-row-reverse {
          flex-direction: row-reverse !important;
        }

        .flex-sm-column-reverse {
          flex-direction: column-reverse !important;
        }

        .flex-sm-grow-0 {
          flex-grow: 0 !important;
        }

        .flex-sm-grow-1 {
          flex-grow: 1 !important;
        }

        .flex-sm-shrink-0 {
          flex-shrink: 0 !important;
        }

        .flex-sm-shrink-1 {
          flex-shrink: 1 !important;
        }

        .flex-sm-wrap {
          flex-wrap: wrap !important;
        }

        .flex-sm-nowrap {
          flex-wrap: nowrap !important;
        }

        .flex-sm-wrap-reverse {
          flex-wrap: wrap-reverse !important;
        }

        .gap-sm-0 {
          gap: 0 !important;
        }

        .gap-sm-1 {
          gap: 0.25rem !important;
        }

        .gap-sm-2 {
          gap: 0.5rem !important;
        }

        .gap-sm-3 {
          gap: 1rem !important;
        }

        .gap-sm-4 {
          gap: 2rem !important;
        }

        .gap-sm-5 {
          gap: 4rem !important;
        }

        .justify-content-sm-start {
          justify-content: flex-start !important;
        }

        .justify-content-sm-end {
          justify-content: flex-end !important;
        }

        .justify-content-sm-center {
          justify-content: center !important;
        }

        .justify-content-sm-between {
          justify-content: space-between !important;
        }

        .justify-content-sm-around {
          justify-content: space-around !important;
        }

        .justify-content-sm-evenly {
          justify-content: space-evenly !important;
        }

        .align-items-sm-start {
          align-items: flex-start !important;
        }

        .align-items-sm-end {
          align-items: flex-end !important;
        }

        .align-items-sm-center {
          align-items: center !important;
        }

        .align-items-sm-baseline {
          align-items: baseline !important;
        }

        .align-items-sm-stretch {
          align-items: stretch !important;
        }

        .align-content-sm-start {
          align-content: flex-start !important;
        }

        .align-content-sm-end {
          align-content: flex-end !important;
        }

        .align-content-sm-center {
          align-content: center !important;
        }

        .align-content-sm-between {
          align-content: space-between !important;
        }

        .align-content-sm-around {
          align-content: space-around !important;
        }

        .align-content-sm-stretch {
          align-content: stretch !important;
        }

        .align-self-sm-auto {
          align-self: auto !important;
        }

        .align-self-sm-start {
          align-self: flex-start !important;
        }

        .align-self-sm-end {
          align-self: flex-end !important;
        }

        .align-self-sm-center {
          align-self: center !important;
        }

        .align-self-sm-baseline {
          align-self: baseline !important;
        }

        .align-self-sm-stretch {
          align-self: stretch !important;
        }

        .order-sm-first {
          order: -1 !important;
        }

        .order-sm-0 {
          order: 0 !important;
        }

        .order-sm-1 {
          order: 1 !important;
        }

        .order-sm-2 {
          order: 2 !important;
        }

        .order-sm-3 {
          order: 3 !important;
        }

        .order-sm-4 {
          order: 4 !important;
        }

        .order-sm-5 {
          order: 5 !important;
        }

        .order-sm-last {
          order: 6 !important;
        }

        .m-sm-0 {
          margin: 0 !important;
        }

        .m-sm-1 {
          margin: 0.25rem !important;
        }

        .m-sm-2 {
          margin: 0.5rem !important;
        }

        .m-sm-3 {
          margin: 1rem !important;
        }

        .m-sm-4 {
          margin: 2rem !important;
        }

        .m-sm-5 {
          margin: 4rem !important;
        }

        .m-sm-auto {
          margin: auto !important;
        }

        .mx-sm-0 {
          margin-right: 0 !important;
          margin-left: 0 !important;
        }

        .mx-sm-1 {
          margin-right: 0.25rem !important;
          margin-left: 0.25rem !important;
        }

        .mx-sm-2 {
          margin-right: 0.5rem !important;
          margin-left: 0.5rem !important;
        }

        .mx-sm-3 {
          margin-right: 1rem !important;
          margin-left: 1rem !important;
        }

        .mx-sm-4 {
          margin-right: 2rem !important;
          margin-left: 2rem !important;
        }

        .mx-sm-5 {
          margin-right: 4rem !important;
          margin-left: 4rem !important;
        }

        .mx-sm-auto {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        .my-sm-0 {
          margin-top: 0 !important;
          margin-bottom: 0 !important;
        }

        .my-sm-1 {
          margin-top: 0.25rem !important;
          margin-bottom: 0.25rem !important;
        }

        .my-sm-2 {
          margin-top: 0.5rem !important;
          margin-bottom: 0.5rem !important;
        }

        .my-sm-3 {
          margin-top: 1rem !important;
          margin-bottom: 1rem !important;
        }

        .my-sm-4 {
          margin-top: 2rem !important;
          margin-bottom: 2rem !important;
        }

        .my-sm-5 {
          margin-top: 4rem !important;
          margin-bottom: 4rem !important;
        }

        .my-sm-auto {
          margin-top: auto !important;
          margin-bottom: auto !important;
        }

        .mt-sm-0 {
          margin-top: 0 !important;
        }

        .mt-sm-1 {
          margin-top: 0.25rem !important;
        }

        .mt-sm-2 {
          margin-top: 0.5rem !important;
        }

        .mt-sm-3 {
          margin-top: 1rem !important;
        }

        .mt-sm-4 {
          margin-top: 2rem !important;
        }

        .mt-sm-5 {
          margin-top: 4rem !important;
        }

        .mt-sm-auto {
          margin-top: auto !important;
        }

        .me-sm-0 {
          margin-right: 0 !important;
        }

        .me-sm-1 {
          margin-right: 0.25rem !important;
        }

        .me-sm-2 {
          margin-right: 0.5rem !important;
        }

        .me-sm-3 {
          margin-right: 1rem !important;
        }

        .me-sm-4 {
          margin-right: 2rem !important;
        }

        .me-sm-5 {
          margin-right: 4rem !important;
        }

        .me-sm-auto {
          margin-right: auto !important;
        }

        .mb-sm-0 {
          margin-bottom: 0 !important;
        }

        .mb-sm-1 {
          margin-bottom: 0.25rem !important;
        }

        .mb-sm-2 {
          margin-bottom: 0.5rem !important;
        }

        .mb-sm-3 {
          margin-bottom: 1rem !important;
        }

        .mb-sm-4 {
          margin-bottom: 2rem !important;
        }

        .mb-sm-5 {
          margin-bottom: 4rem !important;
        }

        .mb-sm-auto {
          margin-bottom: auto !important;
        }

        .ms-sm-0 {
          margin-left: 0 !important;
        }

        .ms-sm-1 {
          margin-left: 0.25rem !important;
        }

        .ms-sm-2 {
          margin-left: 0.5rem !important;
        }

        .ms-sm-3 {
          margin-left: 1rem !important;
        }

        .ms-sm-4 {
          margin-left: 2rem !important;
        }

        .ms-sm-5 {
          margin-left: 4rem !important;
        }

        .ms-sm-auto {
          margin-left: auto !important;
        }

        .p-sm-0 {
          padding: 0 !important;
        }

        .p-sm-1 {
          padding: 0.25rem !important;
        }

        .p-sm-2 {
          padding: 0.5rem !important;
        }

        .p-sm-3 {
          padding: 1rem !important;
        }

        .p-sm-4 {
          padding: 2rem !important;
        }

        .p-sm-5 {
          padding: 4rem !important;
        }

        .px-sm-0 {
          padding-right: 0 !important;
          padding-left: 0 !important;
        }

        .px-sm-1 {
          padding-right: 0.25rem !important;
          padding-left: 0.25rem !important;
        }

        .px-sm-2 {
          padding-right: 0.5rem !important;
          padding-left: 0.5rem !important;
        }

        .px-sm-3 {
          padding-right: 1rem !important;
          padding-left: 1rem !important;
        }

        .px-sm-4 {
          padding-right: 2rem !important;
          padding-left: 2rem !important;
        }

        .px-sm-5 {
          padding-right: 4rem !important;
          padding-left: 4rem !important;
        }

        .py-sm-0 {
          padding-top: 0 !important;
          padding-bottom: 0 !important;
        }

        .py-sm-1 {
          padding-top: 0.25rem !important;
          padding-bottom: 0.25rem !important;
        }

        .py-sm-2 {
          padding-top: 0.5rem !important;
          padding-bottom: 0.5rem !important;
        }

        .py-sm-3 {
          padding-top: 1rem !important;
          padding-bottom: 1rem !important;
        }

        .py-sm-4 {
          padding-top: 2rem !important;
          padding-bottom: 2rem !important;
        }

        .py-sm-5 {
          padding-top: 4rem !important;
          padding-bottom: 4rem !important;
        }

        .pt-sm-0 {
          padding-top: 0 !important;
        }

        .pt-sm-1 {
          padding-top: 0.25rem !important;
        }

        .pt-sm-2 {
          padding-top: 0.5rem !important;
        }

        .pt-sm-3 {
          padding-top: 1rem !important;
        }

        .pt-sm-4 {
          padding-top: 2rem !important;
        }

        .pt-sm-5 {
          padding-top: 4rem !important;
        }

        .pe-sm-0 {
          padding-right: 0 !important;
        }

        .pe-sm-1 {
          padding-right: 0.25rem !important;
        }

        .pe-sm-2 {
          padding-right: 0.5rem !important;
        }

        .pe-sm-3 {
          padding-right: 1rem !important;
        }

        .pe-sm-4 {
          padding-right: 2rem !important;
        }

        .pe-sm-5 {
          padding-right: 4rem !important;
        }

        .pb-sm-0 {
          padding-bottom: 0 !important;
        }

        .pb-sm-1 {
          padding-bottom: 0.25rem !important;
        }

        .pb-sm-2 {
          padding-bottom: 0.5rem !important;
        }

        .pb-sm-3 {
          padding-bottom: 1rem !important;
        }

        .pb-sm-4 {
          padding-bottom: 2rem !important;
        }

        .pb-sm-5 {
          padding-bottom: 4rem !important;
        }

        .ps-sm-0 {
          padding-left: 0 !important;
        }

        .ps-sm-1 {
          padding-left: 0.25rem !important;
        }

        .ps-sm-2 {
          padding-left: 0.5rem !important;
        }

        .ps-sm-3 {
          padding-left: 1rem !important;
        }

        .ps-sm-4 {
          padding-left: 2rem !important;
        }

        .ps-sm-5 {
          padding-left: 4rem !important;
        }

        .text-sm-start {
          text-align: left !important;
        }

        .text-sm-end {
          text-align: right !important;
        }

        .text-sm-center {
          text-align: center !important;
        }

        .columns-sm-2 {
          -moz-columns: 2 !important;
          columns: 2 !important;
        }

        .columns-sm-3 {
          -moz-columns: 3 !important;
          columns: 3 !important;
        }

        .columns-sm-4 {
          -moz-columns: 4 !important;
          columns: 4 !important;
        }
      }

      @media (min-width: 768px) {
        .float-md-start {
          float: left !important;
        }

        .float-md-end {
          float: right !important;
        }

        .float-md-none {
          float: none !important;
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

        .d-md-grid {
          display: grid !important;
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
          display: flex !important;
        }

        .d-md-inline-flex {
          display: inline-flex !important;
        }

        .d-md-none {
          display: none !important;
        }

        .flex-md-fill {
          flex: 1 1 auto !important;
        }

        .flex-md-row {
          flex-direction: row !important;
        }

        .flex-md-column {
          flex-direction: column !important;
        }

        .flex-md-row-reverse {
          flex-direction: row-reverse !important;
        }

        .flex-md-column-reverse {
          flex-direction: column-reverse !important;
        }

        .flex-md-grow-0 {
          flex-grow: 0 !important;
        }

        .flex-md-grow-1 {
          flex-grow: 1 !important;
        }

        .flex-md-shrink-0 {
          flex-shrink: 0 !important;
        }

        .flex-md-shrink-1 {
          flex-shrink: 1 !important;
        }

        .flex-md-wrap {
          flex-wrap: wrap !important;
        }

        .flex-md-nowrap {
          flex-wrap: nowrap !important;
        }

        .flex-md-wrap-reverse {
          flex-wrap: wrap-reverse !important;
        }

        .gap-md-0 {
          gap: 0 !important;
        }

        .gap-md-1 {
          gap: 0.25rem !important;
        }

        .gap-md-2 {
          gap: 0.5rem !important;
        }

        .gap-md-3 {
          gap: 1rem !important;
        }

        .gap-md-4 {
          gap: 2rem !important;
        }

        .gap-md-5 {
          gap: 4rem !important;
        }

        .justify-content-md-start {
          justify-content: flex-start !important;
        }

        .justify-content-md-end {
          justify-content: flex-end !important;
        }

        .justify-content-md-center {
          justify-content: center !important;
        }

        .justify-content-md-between {
          justify-content: space-between !important;
        }

        .justify-content-md-around {
          justify-content: space-around !important;
        }

        .justify-content-md-evenly {
          justify-content: space-evenly !important;
        }

        .align-items-md-start {
          align-items: flex-start !important;
        }

        .align-items-md-end {
          align-items: flex-end !important;
        }

        .align-items-md-center {
          align-items: center !important;
        }

        .align-items-md-baseline {
          align-items: baseline !important;
        }

        .align-items-md-stretch {
          align-items: stretch !important;
        }

        .align-content-md-start {
          align-content: flex-start !important;
        }

        .align-content-md-end {
          align-content: flex-end !important;
        }

        .align-content-md-center {
          align-content: center !important;
        }

        .align-content-md-between {
          align-content: space-between !important;
        }

        .align-content-md-around {
          align-content: space-around !important;
        }

        .align-content-md-stretch {
          align-content: stretch !important;
        }

        .align-self-md-auto {
          align-self: auto !important;
        }

        .align-self-md-start {
          align-self: flex-start !important;
        }

        .align-self-md-end {
          align-self: flex-end !important;
        }

        .align-self-md-center {
          align-self: center !important;
        }

        .align-self-md-baseline {
          align-self: baseline !important;
        }

        .align-self-md-stretch {
          align-self: stretch !important;
        }

        .order-md-first {
          order: -1 !important;
        }

        .order-md-0 {
          order: 0 !important;
        }

        .order-md-1 {
          order: 1 !important;
        }

        .order-md-2 {
          order: 2 !important;
        }

        .order-md-3 {
          order: 3 !important;
        }

        .order-md-4 {
          order: 4 !important;
        }

        .order-md-5 {
          order: 5 !important;
        }

        .order-md-last {
          order: 6 !important;
        }

        .m-md-0 {
          margin: 0 !important;
        }

        .m-md-1 {
          margin: 0.25rem !important;
        }

        .m-md-2 {
          margin: 0.5rem !important;
        }

        .m-md-3 {
          margin: 1rem !important;
        }

        .m-md-4 {
          margin: 2rem !important;
        }

        .m-md-5 {
          margin: 4rem !important;
        }

        .m-md-auto {
          margin: auto !important;
        }

        .mx-md-0 {
          margin-right: 0 !important;
          margin-left: 0 !important;
        }

        .mx-md-1 {
          margin-right: 0.25rem !important;
          margin-left: 0.25rem !important;
        }

        .mx-md-2 {
          margin-right: 0.5rem !important;
          margin-left: 0.5rem !important;
        }

        .mx-md-3 {
          margin-right: 1rem !important;
          margin-left: 1rem !important;
        }

        .mx-md-4 {
          margin-right: 2rem !important;
          margin-left: 2rem !important;
        }

        .mx-md-5 {
          margin-right: 4rem !important;
          margin-left: 4rem !important;
        }

        .mx-md-auto {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        .my-md-0 {
          margin-top: 0 !important;
          margin-bottom: 0 !important;
        }

        .my-md-1 {
          margin-top: 0.25rem !important;
          margin-bottom: 0.25rem !important;
        }

        .my-md-2 {
          margin-top: 0.5rem !important;
          margin-bottom: 0.5rem !important;
        }

        .my-md-3 {
          margin-top: 1rem !important;
          margin-bottom: 1rem !important;
        }

        .my-md-4 {
          margin-top: 2rem !important;
          margin-bottom: 2rem !important;
        }

        .my-md-5 {
          margin-top: 4rem !important;
          margin-bottom: 4rem !important;
        }

        .my-md-auto {
          margin-top: auto !important;
          margin-bottom: auto !important;
        }

        .mt-md-0 {
          margin-top: 0 !important;
        }

        .mt-md-1 {
          margin-top: 0.25rem !important;
        }

        .mt-md-2 {
          margin-top: 0.5rem !important;
        }

        .mt-md-3 {
          margin-top: 1rem !important;
        }

        .mt-md-4 {
          margin-top: 2rem !important;
        }

        .mt-md-5 {
          margin-top: 4rem !important;
        }

        .mt-md-auto {
          margin-top: auto !important;
        }

        .me-md-0 {
          margin-right: 0 !important;
        }

        .me-md-1 {
          margin-right: 0.25rem !important;
        }

        .me-md-2 {
          margin-right: 0.5rem !important;
        }

        .me-md-3 {
          margin-right: 1rem !important;
        }

        .me-md-4 {
          margin-right: 2rem !important;
        }

        .me-md-5 {
          margin-right: 4rem !important;
        }

        .me-md-auto {
          margin-right: auto !important;
        }

        .mb-md-0 {
          margin-bottom: 0 !important;
        }

        .mb-md-1 {
          margin-bottom: 0.25rem !important;
        }

        .mb-md-2 {
          margin-bottom: 0.5rem !important;
        }

        .mb-md-3 {
          margin-bottom: 1rem !important;
        }

        .mb-md-4 {
          margin-bottom: 2rem !important;
        }

        .mb-md-5 {
          margin-bottom: 4rem !important;
        }

        .mb-md-auto {
          margin-bottom: auto !important;
        }

        .ms-md-0 {
          margin-left: 0 !important;
        }

        .ms-md-1 {
          margin-left: 0.25rem !important;
        }

        .ms-md-2 {
          margin-left: 0.5rem !important;
        }

        .ms-md-3 {
          margin-left: 1rem !important;
        }

        .ms-md-4 {
          margin-left: 2rem !important;
        }

        .ms-md-5 {
          margin-left: 4rem !important;
        }

        .ms-md-auto {
          margin-left: auto !important;
        }

        .p-md-0 {
          padding: 0 !important;
        }

        .p-md-1 {
          padding: 0.25rem !important;
        }

        .p-md-2 {
          padding: 0.5rem !important;
        }

        .p-md-3 {
          padding: 1rem !important;
        }

        .p-md-4 {
          padding: 2rem !important;
        }

        .p-md-5 {
          padding: 4rem !important;
        }

        .px-md-0 {
          padding-right: 0 !important;
          padding-left: 0 !important;
        }

        .px-md-1 {
          padding-right: 0.25rem !important;
          padding-left: 0.25rem !important;
        }

        .px-md-2 {
          padding-right: 0.5rem !important;
          padding-left: 0.5rem !important;
        }

        .px-md-3 {
          padding-right: 1rem !important;
          padding-left: 1rem !important;
        }

        .px-md-4 {
          padding-right: 2rem !important;
          padding-left: 2rem !important;
        }

        .px-md-5 {
          padding-right: 4rem !important;
          padding-left: 4rem !important;
        }

        .py-md-0 {
          padding-top: 0 !important;
          padding-bottom: 0 !important;
        }

        .py-md-1 {
          padding-top: 0.25rem !important;
          padding-bottom: 0.25rem !important;
        }

        .py-md-2 {
          padding-top: 0.5rem !important;
          padding-bottom: 0.5rem !important;
        }

        .py-md-3 {
          padding-top: 1rem !important;
          padding-bottom: 1rem !important;
        }

        .py-md-4 {
          padding-top: 2rem !important;
          padding-bottom: 2rem !important;
        }

        .py-md-5 {
          padding-top: 4rem !important;
          padding-bottom: 4rem !important;
        }

        .pt-md-0 {
          padding-top: 0 !important;
        }

        .pt-md-1 {
          padding-top: 0.25rem !important;
        }

        .pt-md-2 {
          padding-top: 0.5rem !important;
        }

        .pt-md-3 {
          padding-top: 1rem !important;
        }

        .pt-md-4 {
          padding-top: 2rem !important;
        }

        .pt-md-5 {
          padding-top: 4rem !important;
        }

        .pe-md-0 {
          padding-right: 0 !important;
        }

        .pe-md-1 {
          padding-right: 0.25rem !important;
        }

        .pe-md-2 {
          padding-right: 0.5rem !important;
        }

        .pe-md-3 {
          padding-right: 1rem !important;
        }

        .pe-md-4 {
          padding-right: 2rem !important;
        }

        .pe-md-5 {
          padding-right: 4rem !important;
        }

        .pb-md-0 {
          padding-bottom: 0 !important;
        }

        .pb-md-1 {
          padding-bottom: 0.25rem !important;
        }

        .pb-md-2 {
          padding-bottom: 0.5rem !important;
        }

        .pb-md-3 {
          padding-bottom: 1rem !important;
        }

        .pb-md-4 {
          padding-bottom: 2rem !important;
        }

        .pb-md-5 {
          padding-bottom: 4rem !important;
        }

        .ps-md-0 {
          padding-left: 0 !important;
        }

        .ps-md-1 {
          padding-left: 0.25rem !important;
        }

        .ps-md-2 {
          padding-left: 0.5rem !important;
        }

        .ps-md-3 {
          padding-left: 1rem !important;
        }

        .ps-md-4 {
          padding-left: 2rem !important;
        }

        .ps-md-5 {
          padding-left: 4rem !important;
        }

        .text-md-start {
          text-align: left !important;
        }

        .text-md-end {
          text-align: right !important;
        }

        .text-md-center {
          text-align: center !important;
        }

        .columns-md-2 {
          -moz-columns: 2 !important;
          columns: 2 !important;
        }

        .columns-md-3 {
          -moz-columns: 3 !important;
          columns: 3 !important;
        }

        .columns-md-4 {
          -moz-columns: 4 !important;
          columns: 4 !important;
        }
      }

      @media (min-width: 992px) {
        .float-lg-start {
          float: left !important;
        }

        .float-lg-end {
          float: right !important;
        }

        .float-lg-none {
          float: none !important;
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

        .d-lg-grid {
          display: grid !important;
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
          display: flex !important;
        }

        .d-lg-inline-flex {
          display: inline-flex !important;
        }

        .d-lg-none {
          display: none !important;
        }

        .flex-lg-fill {
          flex: 1 1 auto !important;
        }

        .flex-lg-row {
          flex-direction: row !important;
        }

        .flex-lg-column {
          flex-direction: column !important;
        }

        .flex-lg-row-reverse {
          flex-direction: row-reverse !important;
        }

        .flex-lg-column-reverse {
          flex-direction: column-reverse !important;
        }

        .flex-lg-grow-0 {
          flex-grow: 0 !important;
        }

        .flex-lg-grow-1 {
          flex-grow: 1 !important;
        }

        .flex-lg-shrink-0 {
          flex-shrink: 0 !important;
        }

        .flex-lg-shrink-1 {
          flex-shrink: 1 !important;
        }

        .flex-lg-wrap {
          flex-wrap: wrap !important;
        }

        .flex-lg-nowrap {
          flex-wrap: nowrap !important;
        }

        .flex-lg-wrap-reverse {
          flex-wrap: wrap-reverse !important;
        }

        .gap-lg-0 {
          gap: 0 !important;
        }

        .gap-lg-1 {
          gap: 0.25rem !important;
        }

        .gap-lg-2 {
          gap: 0.5rem !important;
        }

        .gap-lg-3 {
          gap: 1rem !important;
        }

        .gap-lg-4 {
          gap: 2rem !important;
        }

        .gap-lg-5 {
          gap: 4rem !important;
        }

        .justify-content-lg-start {
          justify-content: flex-start !important;
        }

        .justify-content-lg-end {
          justify-content: flex-end !important;
        }

        .justify-content-lg-center {
          justify-content: center !important;
        }

        .justify-content-lg-between {
          justify-content: space-between !important;
        }

        .justify-content-lg-around {
          justify-content: space-around !important;
        }

        .justify-content-lg-evenly {
          justify-content: space-evenly !important;
        }

        .align-items-lg-start {
          align-items: flex-start !important;
        }

        .align-items-lg-end {
          align-items: flex-end !important;
        }

        .align-items-lg-center {
          align-items: center !important;
        }

        .align-items-lg-baseline {
          align-items: baseline !important;
        }

        .align-items-lg-stretch {
          align-items: stretch !important;
        }

        .align-content-lg-start {
          align-content: flex-start !important;
        }

        .align-content-lg-end {
          align-content: flex-end !important;
        }

        .align-content-lg-center {
          align-content: center !important;
        }

        .align-content-lg-between {
          align-content: space-between !important;
        }

        .align-content-lg-around {
          align-content: space-around !important;
        }

        .align-content-lg-stretch {
          align-content: stretch !important;
        }

        .align-self-lg-auto {
          align-self: auto !important;
        }

        .align-self-lg-start {
          align-self: flex-start !important;
        }

        .align-self-lg-end {
          align-self: flex-end !important;
        }

        .align-self-lg-center {
          align-self: center !important;
        }

        .align-self-lg-baseline {
          align-self: baseline !important;
        }

        .align-self-lg-stretch {
          align-self: stretch !important;
        }

        .order-lg-first {
          order: -1 !important;
        }

        .order-lg-0 {
          order: 0 !important;
        }

        .order-lg-1 {
          order: 1 !important;
        }

        .order-lg-2 {
          order: 2 !important;
        }

        .order-lg-3 {
          order: 3 !important;
        }

        .order-lg-4 {
          order: 4 !important;
        }

        .order-lg-5 {
          order: 5 !important;
        }

        .order-lg-last {
          order: 6 !important;
        }

        .m-lg-0 {
          margin: 0 !important;
        }

        .m-lg-1 {
          margin: 0.25rem !important;
        }

        .m-lg-2 {
          margin: 0.5rem !important;
        }

        .m-lg-3 {
          margin: 1rem !important;
        }

        .m-lg-4 {
          margin: 2rem !important;
        }

        .m-lg-5 {
          margin: 4rem !important;
        }

        .m-lg-auto {
          margin: auto !important;
        }

        .mx-lg-0 {
          margin-right: 0 !important;
          margin-left: 0 !important;
        }

        .mx-lg-1 {
          margin-right: 0.25rem !important;
          margin-left: 0.25rem !important;
        }

        .mx-lg-2 {
          margin-right: 0.5rem !important;
          margin-left: 0.5rem !important;
        }

        .mx-lg-3 {
          margin-right: 1rem !important;
          margin-left: 1rem !important;
        }

        .mx-lg-4 {
          margin-right: 2rem !important;
          margin-left: 2rem !important;
        }

        .mx-lg-5 {
          margin-right: 4rem !important;
          margin-left: 4rem !important;
        }

        .mx-lg-auto {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        .my-lg-0 {
          margin-top: 0 !important;
          margin-bottom: 0 !important;
        }

        .my-lg-1 {
          margin-top: 0.25rem !important;
          margin-bottom: 0.25rem !important;
        }

        .my-lg-2 {
          margin-top: 0.5rem !important;
          margin-bottom: 0.5rem !important;
        }

        .my-lg-3 {
          margin-top: 1rem !important;
          margin-bottom: 1rem !important;
        }

        .my-lg-4 {
          margin-top: 2rem !important;
          margin-bottom: 2rem !important;
        }

        .my-lg-5 {
          margin-top: 4rem !important;
          margin-bottom: 4rem !important;
        }

        .my-lg-auto {
          margin-top: auto !important;
          margin-bottom: auto !important;
        }

        .mt-lg-0 {
          margin-top: 0 !important;
        }

        .mt-lg-1 {
          margin-top: 0.25rem !important;
        }

        .mt-lg-2 {
          margin-top: 0.5rem !important;
        }

        .mt-lg-3 {
          margin-top: 1rem !important;
        }

        .mt-lg-4 {
          margin-top: 2rem !important;
        }

        .mt-lg-5 {
          margin-top: 4rem !important;
        }

        .mt-lg-auto {
          margin-top: auto !important;
        }

        .me-lg-0 {
          margin-right: 0 !important;
        }

        .me-lg-1 {
          margin-right: 0.25rem !important;
        }

        .me-lg-2 {
          margin-right: 0.5rem !important;
        }

        .me-lg-3 {
          margin-right: 1rem !important;
        }

        .me-lg-4 {
          margin-right: 2rem !important;
        }

        .me-lg-5 {
          margin-right: 4rem !important;
        }

        .me-lg-auto {
          margin-right: auto !important;
        }

        .mb-lg-0 {
          margin-bottom: 0 !important;
        }

        .mb-lg-1 {
          margin-bottom: 0.25rem !important;
        }

        .mb-lg-2 {
          margin-bottom: 0.5rem !important;
        }

        .mb-lg-3 {
          margin-bottom: 1rem !important;
        }

        .mb-lg-4 {
          margin-bottom: 2rem !important;
        }

        .mb-lg-5 {
          margin-bottom: 4rem !important;
        }

        .mb-lg-auto {
          margin-bottom: auto !important;
        }

        .ms-lg-0 {
          margin-left: 0 !important;
        }

        .ms-lg-1 {
          margin-left: 0.25rem !important;
        }

        .ms-lg-2 {
          margin-left: 0.5rem !important;
        }

        .ms-lg-3 {
          margin-left: 1rem !important;
        }

        .ms-lg-4 {
          margin-left: 2rem !important;
        }

        .ms-lg-5 {
          margin-left: 4rem !important;
        }

        .ms-lg-auto {
          margin-left: auto !important;
        }

        .p-lg-0 {
          padding: 0 !important;
        }

        .p-lg-1 {
          padding: 0.25rem !important;
        }

        .p-lg-2 {
          padding: 0.5rem !important;
        }

        .p-lg-3 {
          padding: 1rem !important;
        }

        .p-lg-4 {
          padding: 2rem !important;
        }

        .p-lg-5 {
          padding: 4rem !important;
        }

        .px-lg-0 {
          padding-right: 0 !important;
          padding-left: 0 !important;
        }

        .px-lg-1 {
          padding-right: 0.25rem !important;
          padding-left: 0.25rem !important;
        }

        .px-lg-2 {
          padding-right: 0.5rem !important;
          padding-left: 0.5rem !important;
        }

        .px-lg-3 {
          padding-right: 1rem !important;
          padding-left: 1rem !important;
        }

        .px-lg-4 {
          padding-right: 2rem !important;
          padding-left: 2rem !important;
        }

        .px-lg-5 {
          padding-right: 4rem !important;
          padding-left: 4rem !important;
        }

        .py-lg-0 {
          padding-top: 0 !important;
          padding-bottom: 0 !important;
        }

        .py-lg-1 {
          padding-top: 0.25rem !important;
          padding-bottom: 0.25rem !important;
        }

        .py-lg-2 {
          padding-top: 0.5rem !important;
          padding-bottom: 0.5rem !important;
        }

        .py-lg-3 {
          padding-top: 1rem !important;
          padding-bottom: 1rem !important;
        }

        .py-lg-4 {
          padding-top: 2rem !important;
          padding-bottom: 2rem !important;
        }

        .py-lg-5 {
          padding-top: 4rem !important;
          padding-bottom: 4rem !important;
        }

        .pt-lg-0 {
          padding-top: 0 !important;
        }

        .pt-lg-1 {
          padding-top: 0.25rem !important;
        }

        .pt-lg-2 {
          padding-top: 0.5rem !important;
        }

        .pt-lg-3 {
          padding-top: 1rem !important;
        }

        .pt-lg-4 {
          padding-top: 2rem !important;
        }

        .pt-lg-5 {
          padding-top: 4rem !important;
        }

        .pe-lg-0 {
          padding-right: 0 !important;
        }

        .pe-lg-1 {
          padding-right: 0.25rem !important;
        }

        .pe-lg-2 {
          padding-right: 0.5rem !important;
        }

        .pe-lg-3 {
          padding-right: 1rem !important;
        }

        .pe-lg-4 {
          padding-right: 2rem !important;
        }

        .pe-lg-5 {
          padding-right: 4rem !important;
        }

        .pb-lg-0 {
          padding-bottom: 0 !important;
        }

        .pb-lg-1 {
          padding-bottom: 0.25rem !important;
        }

        .pb-lg-2 {
          padding-bottom: 0.5rem !important;
        }

        .pb-lg-3 {
          padding-bottom: 1rem !important;
        }

        .pb-lg-4 {
          padding-bottom: 2rem !important;
        }

        .pb-lg-5 {
          padding-bottom: 4rem !important;
        }

        .ps-lg-0 {
          padding-left: 0 !important;
        }

        .ps-lg-1 {
          padding-left: 0.25rem !important;
        }

        .ps-lg-2 {
          padding-left: 0.5rem !important;
        }

        .ps-lg-3 {
          padding-left: 1rem !important;
        }

        .ps-lg-4 {
          padding-left: 2rem !important;
        }

        .ps-lg-5 {
          padding-left: 4rem !important;
        }

        .text-lg-start {
          text-align: left !important;
        }

        .text-lg-end {
          text-align: right !important;
        }

        .text-lg-center {
          text-align: center !important;
        }

        .columns-lg-2 {
          -moz-columns: 2 !important;
          columns: 2 !important;
        }

        .columns-lg-3 {
          -moz-columns: 3 !important;
          columns: 3 !important;
        }

        .columns-lg-4 {
          -moz-columns: 4 !important;
          columns: 4 !important;
        }
      }

      @media (min-width: 1200px) {
        .float-xl-start {
          float: left !important;
        }

        .float-xl-end {
          float: right !important;
        }

        .float-xl-none {
          float: none !important;
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

        .d-xl-grid {
          display: grid !important;
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
          display: flex !important;
        }

        .d-xl-inline-flex {
          display: inline-flex !important;
        }

        .d-xl-none {
          display: none !important;
        }

        .flex-xl-fill {
          flex: 1 1 auto !important;
        }

        .flex-xl-row {
          flex-direction: row !important;
        }

        .flex-xl-column {
          flex-direction: column !important;
        }

        .flex-xl-row-reverse {
          flex-direction: row-reverse !important;
        }

        .flex-xl-column-reverse {
          flex-direction: column-reverse !important;
        }

        .flex-xl-grow-0 {
          flex-grow: 0 !important;
        }

        .flex-xl-grow-1 {
          flex-grow: 1 !important;
        }

        .flex-xl-shrink-0 {
          flex-shrink: 0 !important;
        }

        .flex-xl-shrink-1 {
          flex-shrink: 1 !important;
        }

        .flex-xl-wrap {
          flex-wrap: wrap !important;
        }

        .flex-xl-nowrap {
          flex-wrap: nowrap !important;
        }

        .flex-xl-wrap-reverse {
          flex-wrap: wrap-reverse !important;
        }

        .gap-xl-0 {
          gap: 0 !important;
        }

        .gap-xl-1 {
          gap: 0.25rem !important;
        }

        .gap-xl-2 {
          gap: 0.5rem !important;
        }

        .gap-xl-3 {
          gap: 1rem !important;
        }

        .gap-xl-4 {
          gap: 2rem !important;
        }

        .gap-xl-5 {
          gap: 4rem !important;
        }

        .justify-content-xl-start {
          justify-content: flex-start !important;
        }

        .justify-content-xl-end {
          justify-content: flex-end !important;
        }

        .justify-content-xl-center {
          justify-content: center !important;
        }

        .justify-content-xl-between {
          justify-content: space-between !important;
        }

        .justify-content-xl-around {
          justify-content: space-around !important;
        }

        .justify-content-xl-evenly {
          justify-content: space-evenly !important;
        }

        .align-items-xl-start {
          align-items: flex-start !important;
        }

        .align-items-xl-end {
          align-items: flex-end !important;
        }

        .align-items-xl-center {
          align-items: center !important;
        }

        .align-items-xl-baseline {
          align-items: baseline !important;
        }

        .align-items-xl-stretch {
          align-items: stretch !important;
        }

        .align-content-xl-start {
          align-content: flex-start !important;
        }

        .align-content-xl-end {
          align-content: flex-end !important;
        }

        .align-content-xl-center {
          align-content: center !important;
        }

        .align-content-xl-between {
          align-content: space-between !important;
        }

        .align-content-xl-around {
          align-content: space-around !important;
        }

        .align-content-xl-stretch {
          align-content: stretch !important;
        }

        .align-self-xl-auto {
          align-self: auto !important;
        }

        .align-self-xl-start {
          align-self: flex-start !important;
        }

        .align-self-xl-end {
          align-self: flex-end !important;
        }

        .align-self-xl-center {
          align-self: center !important;
        }

        .align-self-xl-baseline {
          align-self: baseline !important;
        }

        .align-self-xl-stretch {
          align-self: stretch !important;
        }

        .order-xl-first {
          order: -1 !important;
        }

        .order-xl-0 {
          order: 0 !important;
        }

        .order-xl-1 {
          order: 1 !important;
        }

        .order-xl-2 {
          order: 2 !important;
        }

        .order-xl-3 {
          order: 3 !important;
        }

        .order-xl-4 {
          order: 4 !important;
        }

        .order-xl-5 {
          order: 5 !important;
        }

        .order-xl-last {
          order: 6 !important;
        }

        .m-xl-0 {
          margin: 0 !important;
        }

        .m-xl-1 {
          margin: 0.25rem !important;
        }

        .m-xl-2 {
          margin: 0.5rem !important;
        }

        .m-xl-3 {
          margin: 1rem !important;
        }

        .m-xl-4 {
          margin: 2rem !important;
        }

        .m-xl-5 {
          margin: 4rem !important;
        }

        .m-xl-auto {
          margin: auto !important;
        }

        .mx-xl-0 {
          margin-right: 0 !important;
          margin-left: 0 !important;
        }

        .mx-xl-1 {
          margin-right: 0.25rem !important;
          margin-left: 0.25rem !important;
        }

        .mx-xl-2 {
          margin-right: 0.5rem !important;
          margin-left: 0.5rem !important;
        }

        .mx-xl-3 {
          margin-right: 1rem !important;
          margin-left: 1rem !important;
        }

        .mx-xl-4 {
          margin-right: 2rem !important;
          margin-left: 2rem !important;
        }

        .mx-xl-5 {
          margin-right: 4rem !important;
          margin-left: 4rem !important;
        }

        .mx-xl-auto {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        .my-xl-0 {
          margin-top: 0 !important;
          margin-bottom: 0 !important;
        }

        .my-xl-1 {
          margin-top: 0.25rem !important;
          margin-bottom: 0.25rem !important;
        }

        .my-xl-2 {
          margin-top: 0.5rem !important;
          margin-bottom: 0.5rem !important;
        }

        .my-xl-3 {
          margin-top: 1rem !important;
          margin-bottom: 1rem !important;
        }

        .my-xl-4 {
          margin-top: 2rem !important;
          margin-bottom: 2rem !important;
        }

        .my-xl-5 {
          margin-top: 4rem !important;
          margin-bottom: 4rem !important;
        }

        .my-xl-auto {
          margin-top: auto !important;
          margin-bottom: auto !important;
        }

        .mt-xl-0 {
          margin-top: 0 !important;
        }

        .mt-xl-1 {
          margin-top: 0.25rem !important;
        }

        .mt-xl-2 {
          margin-top: 0.5rem !important;
        }

        .mt-xl-3 {
          margin-top: 1rem !important;
        }

        .mt-xl-4 {
          margin-top: 2rem !important;
        }

        .mt-xl-5 {
          margin-top: 4rem !important;
        }

        .mt-xl-auto {
          margin-top: auto !important;
        }

        .me-xl-0 {
          margin-right: 0 !important;
        }

        .me-xl-1 {
          margin-right: 0.25rem !important;
        }

        .me-xl-2 {
          margin-right: 0.5rem !important;
        }

        .me-xl-3 {
          margin-right: 1rem !important;
        }

        .me-xl-4 {
          margin-right: 2rem !important;
        }

        .me-xl-5 {
          margin-right: 4rem !important;
        }

        .me-xl-auto {
          margin-right: auto !important;
        }

        .mb-xl-0 {
          margin-bottom: 0 !important;
        }

        .mb-xl-1 {
          margin-bottom: 0.25rem !important;
        }

        .mb-xl-2 {
          margin-bottom: 0.5rem !important;
        }

        .mb-xl-3 {
          margin-bottom: 1rem !important;
        }

        .mb-xl-4 {
          margin-bottom: 2rem !important;
        }

        .mb-xl-5 {
          margin-bottom: 4rem !important;
        }

        .mb-xl-auto {
          margin-bottom: auto !important;
        }

        .ms-xl-0 {
          margin-left: 0 !important;
        }

        .ms-xl-1 {
          margin-left: 0.25rem !important;
        }

        .ms-xl-2 {
          margin-left: 0.5rem !important;
        }

        .ms-xl-3 {
          margin-left: 1rem !important;
        }

        .ms-xl-4 {
          margin-left: 2rem !important;
        }

        .ms-xl-5 {
          margin-left: 4rem !important;
        }

        .ms-xl-auto {
          margin-left: auto !important;
        }

        .p-xl-0 {
          padding: 0 !important;
        }

        .p-xl-1 {
          padding: 0.25rem !important;
        }

        .p-xl-2 {
          padding: 0.5rem !important;
        }

        .p-xl-3 {
          padding: 1rem !important;
        }

        .p-xl-4 {
          padding: 2rem !important;
        }

        .p-xl-5 {
          padding: 4rem !important;
        }

        .px-xl-0 {
          padding-right: 0 !important;
          padding-left: 0 !important;
        }

        .px-xl-1 {
          padding-right: 0.25rem !important;
          padding-left: 0.25rem !important;
        }

        .px-xl-2 {
          padding-right: 0.5rem !important;
          padding-left: 0.5rem !important;
        }

        .px-xl-3 {
          padding-right: 1rem !important;
          padding-left: 1rem !important;
        }

        .px-xl-4 {
          padding-right: 2rem !important;
          padding-left: 2rem !important;
        }

        .px-xl-5 {
          padding-right: 4rem !important;
          padding-left: 4rem !important;
        }

        .py-xl-0 {
          padding-top: 0 !important;
          padding-bottom: 0 !important;
        }

        .py-xl-1 {
          padding-top: 0.25rem !important;
          padding-bottom: 0.25rem !important;
        }

        .py-xl-2 {
          padding-top: 0.5rem !important;
          padding-bottom: 0.5rem !important;
        }

        .py-xl-3 {
          padding-top: 1rem !important;
          padding-bottom: 1rem !important;
        }

        .py-xl-4 {
          padding-top: 2rem !important;
          padding-bottom: 2rem !important;
        }

        .py-xl-5 {
          padding-top: 4rem !important;
          padding-bottom: 4rem !important;
        }

        .pt-xl-0 {
          padding-top: 0 !important;
        }

        .pt-xl-1 {
          padding-top: 0.25rem !important;
        }

        .pt-xl-2 {
          padding-top: 0.5rem !important;
        }

        .pt-xl-3 {
          padding-top: 1rem !important;
        }

        .pt-xl-4 {
          padding-top: 2rem !important;
        }

        .pt-xl-5 {
          padding-top: 4rem !important;
        }

        .pe-xl-0 {
          padding-right: 0 !important;
        }

        .pe-xl-1 {
          padding-right: 0.25rem !important;
        }

        .pe-xl-2 {
          padding-right: 0.5rem !important;
        }

        .pe-xl-3 {
          padding-right: 1rem !important;
        }

        .pe-xl-4 {
          padding-right: 2rem !important;
        }

        .pe-xl-5 {
          padding-right: 4rem !important;
        }

        .pb-xl-0 {
          padding-bottom: 0 !important;
        }

        .pb-xl-1 {
          padding-bottom: 0.25rem !important;
        }

        .pb-xl-2 {
          padding-bottom: 0.5rem !important;
        }

        .pb-xl-3 {
          padding-bottom: 1rem !important;
        }

        .pb-xl-4 {
          padding-bottom: 2rem !important;
        }

        .pb-xl-5 {
          padding-bottom: 4rem !important;
        }

        .ps-xl-0 {
          padding-left: 0 !important;
        }

        .ps-xl-1 {
          padding-left: 0.25rem !important;
        }

        .ps-xl-2 {
          padding-left: 0.5rem !important;
        }

        .ps-xl-3 {
          padding-left: 1rem !important;
        }

        .ps-xl-4 {
          padding-left: 2rem !important;
        }

        .ps-xl-5 {
          padding-left: 4rem !important;
        }

        .text-xl-start {
          text-align: left !important;
        }

        .text-xl-end {
          text-align: right !important;
        }

        .text-xl-center {
          text-align: center !important;
        }

        .columns-xl-2 {
          -moz-columns: 2 !important;
          columns: 2 !important;
        }

        .columns-xl-3 {
          -moz-columns: 3 !important;
          columns: 3 !important;
        }

        .columns-xl-4 {
          -moz-columns: 4 !important;
          columns: 4 !important;
        }
      }

      @media (min-width: 1400px) {
        .float-xxl-start {
          float: left !important;
        }

        .float-xxl-end {
          float: right !important;
        }

        .float-xxl-none {
          float: none !important;
        }

        .d-xxl-inline {
          display: inline !important;
        }

        .d-xxl-inline-block {
          display: inline-block !important;
        }

        .d-xxl-block {
          display: block !important;
        }

        .d-xxl-grid {
          display: grid !important;
        }

        .d-xxl-table {
          display: table !important;
        }

        .d-xxl-table-row {
          display: table-row !important;
        }

        .d-xxl-table-cell {
          display: table-cell !important;
        }

        .d-xxl-flex {
          display: flex !important;
        }

        .d-xxl-inline-flex {
          display: inline-flex !important;
        }

        .d-xxl-none {
          display: none !important;
        }

        .flex-xxl-fill {
          flex: 1 1 auto !important;
        }

        .flex-xxl-row {
          flex-direction: row !important;
        }

        .flex-xxl-column {
          flex-direction: column !important;
        }

        .flex-xxl-row-reverse {
          flex-direction: row-reverse !important;
        }

        .flex-xxl-column-reverse {
          flex-direction: column-reverse !important;
        }

        .flex-xxl-grow-0 {
          flex-grow: 0 !important;
        }

        .flex-xxl-grow-1 {
          flex-grow: 1 !important;
        }

        .flex-xxl-shrink-0 {
          flex-shrink: 0 !important;
        }

        .flex-xxl-shrink-1 {
          flex-shrink: 1 !important;
        }

        .flex-xxl-wrap {
          flex-wrap: wrap !important;
        }

        .flex-xxl-nowrap {
          flex-wrap: nowrap !important;
        }

        .flex-xxl-wrap-reverse {
          flex-wrap: wrap-reverse !important;
        }

        .gap-xxl-0 {
          gap: 0 !important;
        }

        .gap-xxl-1 {
          gap: 0.25rem !important;
        }

        .gap-xxl-2 {
          gap: 0.5rem !important;
        }

        .gap-xxl-3 {
          gap: 1rem !important;
        }

        .gap-xxl-4 {
          gap: 2rem !important;
        }

        .gap-xxl-5 {
          gap: 4rem !important;
        }

        .justify-content-xxl-start {
          justify-content: flex-start !important;
        }

        .justify-content-xxl-end {
          justify-content: flex-end !important;
        }

        .justify-content-xxl-center {
          justify-content: center !important;
        }

        .justify-content-xxl-between {
          justify-content: space-between !important;
        }

        .justify-content-xxl-around {
          justify-content: space-around !important;
        }

        .justify-content-xxl-evenly {
          justify-content: space-evenly !important;
        }

        .align-items-xxl-start {
          align-items: flex-start !important;
        }

        .align-items-xxl-end {
          align-items: flex-end !important;
        }

        .align-items-xxl-center {
          align-items: center !important;
        }

        .align-items-xxl-baseline {
          align-items: baseline !important;
        }

        .align-items-xxl-stretch {
          align-items: stretch !important;
        }

        .align-content-xxl-start {
          align-content: flex-start !important;
        }

        .align-content-xxl-end {
          align-content: flex-end !important;
        }

        .align-content-xxl-center {
          align-content: center !important;
        }

        .align-content-xxl-between {
          align-content: space-between !important;
        }

        .align-content-xxl-around {
          align-content: space-around !important;
        }

        .align-content-xxl-stretch {
          align-content: stretch !important;
        }

        .align-self-xxl-auto {
          align-self: auto !important;
        }

        .align-self-xxl-start {
          align-self: flex-start !important;
        }

        .align-self-xxl-end {
          align-self: flex-end !important;
        }

        .align-self-xxl-center {
          align-self: center !important;
        }

        .align-self-xxl-baseline {
          align-self: baseline !important;
        }

        .align-self-xxl-stretch {
          align-self: stretch !important;
        }

        .order-xxl-first {
          order: -1 !important;
        }

        .order-xxl-0 {
          order: 0 !important;
        }

        .order-xxl-1 {
          order: 1 !important;
        }

        .order-xxl-2 {
          order: 2 !important;
        }

        .order-xxl-3 {
          order: 3 !important;
        }

        .order-xxl-4 {
          order: 4 !important;
        }

        .order-xxl-5 {
          order: 5 !important;
        }

        .order-xxl-last {
          order: 6 !important;
        }

        .m-xxl-0 {
          margin: 0 !important;
        }

        .m-xxl-1 {
          margin: 0.25rem !important;
        }

        .m-xxl-2 {
          margin: 0.5rem !important;
        }

        .m-xxl-3 {
          margin: 1rem !important;
        }

        .m-xxl-4 {
          margin: 2rem !important;
        }

        .m-xxl-5 {
          margin: 4rem !important;
        }

        .m-xxl-auto {
          margin: auto !important;
        }

        .mx-xxl-0 {
          margin-right: 0 !important;
          margin-left: 0 !important;
        }

        .mx-xxl-1 {
          margin-right: 0.25rem !important;
          margin-left: 0.25rem !important;
        }

        .mx-xxl-2 {
          margin-right: 0.5rem !important;
          margin-left: 0.5rem !important;
        }

        .mx-xxl-3 {
          margin-right: 1rem !important;
          margin-left: 1rem !important;
        }

        .mx-xxl-4 {
          margin-right: 2rem !important;
          margin-left: 2rem !important;
        }

        .mx-xxl-5 {
          margin-right: 4rem !important;
          margin-left: 4rem !important;
        }

        .mx-xxl-auto {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        .my-xxl-0 {
          margin-top: 0 !important;
          margin-bottom: 0 !important;
        }

        .my-xxl-1 {
          margin-top: 0.25rem !important;
          margin-bottom: 0.25rem !important;
        }

        .my-xxl-2 {
          margin-top: 0.5rem !important;
          margin-bottom: 0.5rem !important;
        }

        .my-xxl-3 {
          margin-top: 1rem !important;
          margin-bottom: 1rem !important;
        }

        .my-xxl-4 {
          margin-top: 2rem !important;
          margin-bottom: 2rem !important;
        }

        .my-xxl-5 {
          margin-top: 4rem !important;
          margin-bottom: 4rem !important;
        }

        .my-xxl-auto {
          margin-top: auto !important;
          margin-bottom: auto !important;
        }

        .mt-xxl-0 {
          margin-top: 0 !important;
        }

        .mt-xxl-1 {
          margin-top: 0.25rem !important;
        }

        .mt-xxl-2 {
          margin-top: 0.5rem !important;
        }

        .mt-xxl-3 {
          margin-top: 1rem !important;
        }

        .mt-xxl-4 {
          margin-top: 2rem !important;
        }

        .mt-xxl-5 {
          margin-top: 4rem !important;
        }

        .mt-xxl-auto {
          margin-top: auto !important;
        }

        .me-xxl-0 {
          margin-right: 0 !important;
        }

        .me-xxl-1 {
          margin-right: 0.25rem !important;
        }

        .me-xxl-2 {
          margin-right: 0.5rem !important;
        }

        .me-xxl-3 {
          margin-right: 1rem !important;
        }

        .me-xxl-4 {
          margin-right: 2rem !important;
        }

        .me-xxl-5 {
          margin-right: 4rem !important;
        }

        .me-xxl-auto {
          margin-right: auto !important;
        }

        .mb-xxl-0 {
          margin-bottom: 0 !important;
        }

        .mb-xxl-1 {
          margin-bottom: 0.25rem !important;
        }

        .mb-xxl-2 {
          margin-bottom: 0.5rem !important;
        }

        .mb-xxl-3 {
          margin-bottom: 1rem !important;
        }

        .mb-xxl-4 {
          margin-bottom: 2rem !important;
        }

        .mb-xxl-5 {
          margin-bottom: 4rem !important;
        }

        .mb-xxl-auto {
          margin-bottom: auto !important;
        }

        .ms-xxl-0 {
          margin-left: 0 !important;
        }

        .ms-xxl-1 {
          margin-left: 0.25rem !important;
        }

        .ms-xxl-2 {
          margin-left: 0.5rem !important;
        }

        .ms-xxl-3 {
          margin-left: 1rem !important;
        }

        .ms-xxl-4 {
          margin-left: 2rem !important;
        }

        .ms-xxl-5 {
          margin-left: 4rem !important;
        }

        .ms-xxl-auto {
          margin-left: auto !important;
        }

        .p-xxl-0 {
          padding: 0 !important;
        }

        .p-xxl-1 {
          padding: 0.25rem !important;
        }

        .p-xxl-2 {
          padding: 0.5rem !important;
        }

        .p-xxl-3 {
          padding: 1rem !important;
        }

        .p-xxl-4 {
          padding: 2rem !important;
        }

        .p-xxl-5 {
          padding: 4rem !important;
        }

        .px-xxl-0 {
          padding-right: 0 !important;
          padding-left: 0 !important;
        }

        .px-xxl-1 {
          padding-right: 0.25rem !important;
          padding-left: 0.25rem !important;
        }

        .px-xxl-2 {
          padding-right: 0.5rem !important;
          padding-left: 0.5rem !important;
        }

        .px-xxl-3 {
          padding-right: 1rem !important;
          padding-left: 1rem !important;
        }

        .px-xxl-4 {
          padding-right: 2rem !important;
          padding-left: 2rem !important;
        }

        .px-xxl-5 {
          padding-right: 4rem !important;
          padding-left: 4rem !important;
        }

        .py-xxl-0 {
          padding-top: 0 !important;
          padding-bottom: 0 !important;
        }

        .py-xxl-1 {
          padding-top: 0.25rem !important;
          padding-bottom: 0.25rem !important;
        }

        .py-xxl-2 {
          padding-top: 0.5rem !important;
          padding-bottom: 0.5rem !important;
        }

        .py-xxl-3 {
          padding-top: 1rem !important;
          padding-bottom: 1rem !important;
        }

        .py-xxl-4 {
          padding-top: 2rem !important;
          padding-bottom: 2rem !important;
        }

        .py-xxl-5 {
          padding-top: 4rem !important;
          padding-bottom: 4rem !important;
        }

        .pt-xxl-0 {
          padding-top: 0 !important;
        }

        .pt-xxl-1 {
          padding-top: 0.25rem !important;
        }

        .pt-xxl-2 {
          padding-top: 0.5rem !important;
        }

        .pt-xxl-3 {
          padding-top: 1rem !important;
        }

        .pt-xxl-4 {
          padding-top: 2rem !important;
        }

        .pt-xxl-5 {
          padding-top: 4rem !important;
        }

        .pe-xxl-0 {
          padding-right: 0 !important;
        }

        .pe-xxl-1 {
          padding-right: 0.25rem !important;
        }

        .pe-xxl-2 {
          padding-right: 0.5rem !important;
        }

        .pe-xxl-3 {
          padding-right: 1rem !important;
        }

        .pe-xxl-4 {
          padding-right: 2rem !important;
        }

        .pe-xxl-5 {
          padding-right: 4rem !important;
        }

        .pb-xxl-0 {
          padding-bottom: 0 !important;
        }

        .pb-xxl-1 {
          padding-bottom: 0.25rem !important;
        }

        .pb-xxl-2 {
          padding-bottom: 0.5rem !important;
        }

        .pb-xxl-3 {
          padding-bottom: 1rem !important;
        }

        .pb-xxl-4 {
          padding-bottom: 2rem !important;
        }

        .pb-xxl-5 {
          padding-bottom: 4rem !important;
        }

        .ps-xxl-0 {
          padding-left: 0 !important;
        }

        .ps-xxl-1 {
          padding-left: 0.25rem !important;
        }

        .ps-xxl-2 {
          padding-left: 0.5rem !important;
        }

        .ps-xxl-3 {
          padding-left: 1rem !important;
        }

        .ps-xxl-4 {
          padding-left: 2rem !important;
        }

        .ps-xxl-5 {
          padding-left: 4rem !important;
        }

        .text-xxl-start {
          text-align: left !important;
        }

        .text-xxl-end {
          text-align: right !important;
        }

        .text-xxl-center {
          text-align: center !important;
        }

        .columns-xxl-2 {
          -moz-columns: 2 !important;
          columns: 2 !important;
        }

        .columns-xxl-3 {
          -moz-columns: 3 !important;
          columns: 3 !important;
        }

        .columns-xxl-4 {
          -moz-columns: 4 !important;
          columns: 4 !important;
        }
      }

      @media (min-width: 1200px) {
        .fs-1 {
          font-size: 1.5rem !important;
        }
      }

      @media print {
        .d-print-inline {
          display: inline !important;
        }

        .d-print-inline-block {
          display: inline-block !important;
        }

        .d-print-block {
          display: block !important;
        }

        .d-print-grid {
          display: grid !important;
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
          display: flex !important;
        }

        .d-print-inline-flex {
          display: inline-flex !important;
        }

        .d-print-none {
          display: none !important;
        }
      }

      :root {
        font-size: 16px;
        height: 100%;
        --tblr-card-bg: #ffffff;
        --tblr-card-bg-rgb: 255, 255, 255;
        --tblr-border-color: #e6e7e9;
        --tblr-border-color-rgb: 230, 231, 233;
        --tblr-border-color-light: #f2f3f4;
        --tblr-border-color-light-rgb: 242, 243, 244;
      }

      body {
        overflow-y: scroll;
        letter-spacing: 0;
        touch-action: manipulation;
        text-rendering: optimizeLegibility;
        font-feature-settings: "liga"0;
        position: relative;
        min-height: 100%;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      @media print {
        body {
          background: transparent;
        }
      }

      ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
        -webkit-transition: background 0.3s;
        transition: background 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        ::-webkit-scrollbar {
          -webkit-transition: none;
          transition: none;
        }
      }

      ::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: rgba(var(--tblr-body-color-rgb), 0.16);
      }

      ::-webkit-scrollbar-track {
        background: rgba(var(--tblr-body-color-rgb), 0.06);
      }

      :hover::-webkit-scrollbar-thumb {
        background: rgba(var(--tblr-body-color-rgb), 0.32);
      }

      ::-webkit-scrollbar-corner {
        background: transparent;
      }

      [data-container-layout="fluid"] [class^="container-"],
      [data-container-layout="fluid"] [class*=" container-"] {
        max-width: 100%;
      }

      /**
    Navbar
    */
      .navbar {
        align-items: stretch;
        min-height: 3.5rem;
        --navbar-bg-color: transparent;
        --navbar-color: rgba(30, 41, 59, 0.7);
        --navbar-brand-color: #1e293b;
        --link-active-color: #1e293b;
        --link-disabled-color: rgba(30, 41, 59, 0.3);
        background: transparent;
        color: rgba(30, 41, 59, 0.7);
      }

      .navbar-collapse .navbar {
        flex-grow: 1;
      }

      .navbar.collapsing {
        min-height: 0;
      }

      .navbar::-webkit-scrollbar {
        width: 6px;
        height: 6px;
        -webkit-transition: background 0.3s;
        transition: background 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar::-webkit-scrollbar {
          -webkit-transition: none;
          transition: none;
        }
      }

      .navbar::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: rgba(var(--tblr-body-color-rgb), 0.16);
      }

      .navbar::-webkit-scrollbar-track {
        background: rgba(var(--tblr-body-color-rgb), 0.06);
      }

      .navbar:hover::-webkit-scrollbar-thumb {
        background: rgba(var(--tblr-body-color-rgb), 0.32);
      }

      .navbar::-webkit-scrollbar-corner {
        background: transparent;
      }

      .navbar .text-muted {
        color: rgba(30, 41, 59, 0.7) !important;
      }

      .navbar .navbar-brand {
        color: #1e293b;
      }

      .navbar .navbar-brand:hover,
      .navbar .navbar-brand:focus {
        color: #1e293b;
        opacity: 0.8;
      }

      .navbar .navbar-nav .nav-link {
        color: rgba(30, 41, 59, 0.7);
      }

      .navbar .navbar-nav .nav-link:hover,
      .navbar .navbar-nav .nav-link:focus {
        color: #256cc8;
      }

      .navbar .navbar-nav .nav-link.disabled {
        color: rgba(30, 41, 59, 0.3);
      }

      .navbar .navbar-nav .show>.nav-link,
      .navbar .navbar-nav .active>.nav-link,
      .navbar .navbar-nav .nav-link.show,
      .navbar .navbar-nav .nav-link.active {
        color: #256cc8;
      }

      .navbar .navbar-toggler {
        color: #1e293b;
        border-color: transparent;
      }

      .navbar .navbar-text {
        color: rgba(30, 41, 59, 0.7);
      }

      .navbar .navbar-text a,
      .navbar .navbar-text a:hover,
      .navbar .navbar-text a:focus {
        color: rgba(30, 41, 59, 0.7);
      }

      @media not print {
        .theme-dark .navbar {
          --navbar-bg-color: #1e293b;
          --navbar-color: rgba(255, 255, 255, 0.7);
          --navbar-brand-color: #ffffff;
          --link-active-color: #ffffff;
          --link-disabled-color: rgba(255, 255, 255, 0.3);
          background: #1e293b;
          color: rgba(255, 255, 255, 0.7);
        }

        .theme-dark .navbar::-webkit-scrollbar {
          width: 6px;
          height: 6px;
          -webkit-transition: background 0.3s;
          transition: background 0.3s;
        }

        .theme-dark .navbar::-webkit-scrollbar-thumb {
          border-radius: 5px;
          background: rgba(var(--tblr-body-color-rgb), 0.16);
        }

        .theme-dark .navbar::-webkit-scrollbar-track {
          background: rgba(var(--tblr-body-color-rgb), 0.06);
        }

        .theme-dark .navbar:hover::-webkit-scrollbar-thumb {
          background: rgba(var(--tblr-body-color-rgb), 0.32);
        }

        .theme-dark .navbar::-webkit-scrollbar-corner {
          background: transparent;
        }

        .theme-dark .navbar .text-muted {
          color: rgba(255, 255, 255, 0.7) !important;
        }

        .theme-dark .navbar .navbar-brand {
          color: #ffffff;
        }

        .theme-dark .navbar .navbar-brand:hover,
        .theme-dark .navbar .navbar-brand:focus {
          color: #ffffff;
          opacity: 0.8;
        }

        .theme-dark .navbar .navbar-nav .nav-link {
          color: rgba(255, 255, 255, 0.7);
        }

        .theme-dark .navbar .navbar-nav .nav-link:hover,
        .theme-dark .navbar .navbar-nav .nav-link:focus {
          color: #ffffff;
        }

        .theme-dark .navbar .navbar-nav .nav-link.disabled {
          color: rgba(255, 255, 255, 0.3);
        }

        .theme-dark .navbar .navbar-nav .show>.nav-link,
        .theme-dark .navbar .navbar-nav .active>.nav-link,
        .theme-dark .navbar .navbar-nav .nav-link.show,
        .theme-dark .navbar .navbar-nav .nav-link.active {
          color: #ffffff;
        }

        .theme-dark .navbar .navbar-toggler {
          color: #ffffff;
          border-color: transparent;
        }

        .theme-dark .navbar .navbar-text {
          color: rgba(255, 255, 255, 0.7);
        }

        .theme-dark .navbar .navbar-text a,
        .theme-dark .navbar .navbar-text a:hover,
        .theme-dark .navbar .navbar-text a:focus {
          color: rgba(255, 255, 255, 0.7);
        }

        .theme-dark .navbar::-webkit-scrollbar {
          width: 6px;
          height: 6px;
          -webkit-transition: background 0.3s;
          transition: background 0.3s;
        }

        .theme-dark .navbar::-webkit-scrollbar-thumb {
          border-radius: 5px;
          background: rgba(var(--tblr-body-color-rgb), 0.16);
        }

        .theme-dark .navbar::-webkit-scrollbar-track {
          background: rgba(var(--tblr-body-color-rgb), 0.06);
        }

        .theme-dark .navbar:hover::-webkit-scrollbar-thumb {
          background: rgba(var(--tblr-body-color-rgb), 0.32);
        }

        .theme-dark .navbar::-webkit-scrollbar-corner {
          background: transparent;
        }

        .theme-dark .navbar .input-icon-addon {
          color: rgba(248, 250, 252, 0.64);
        }

        .theme-dark .navbar .form-control {
          border-color: transparent;
          background-color: rgba(0, 0, 0, 0.1);
        }

        .theme-dark .navbar .form-control::-webkit-input-placeholder {
          color: rgba(248, 250, 252, 0.64);
        }

        .theme-dark .navbar .form-control::-moz-placeholder {
          color: rgba(248, 250, 252, 0.64);
        }

        .theme-dark .navbar .form-control:-ms-input-placeholder {
          color: rgba(248, 250, 252, 0.64);
        }

        .theme-dark .navbar .form-control::-ms-input-placeholder {
          color: rgba(248, 250, 252, 0.64);
        }

        .theme-dark .navbar .form-control::placeholder {
          color: rgba(248, 250, 252, 0.64);
        }
      }

      @media print {
        .navbar {
          display: none;
        }
      }

      .navbar .dropdown-menu {
        position: absolute;
        z-index: 1030;
      }

      .navbar .navbar-nav {
        min-height: 3rem;
      }

      .navbar .navbar-nav .nav-link {
        position: relative;
        min-width: 2rem;
        min-height: 2rem;
        justify-content: center;
        border-radius: 4px;
      }

      .navbar .navbar-nav .nav-link .badge {
        position: absolute;
        top: 0.375rem;
        right: 0.375rem;
        transform: translate(50%, -50%);
      }

      .navbar-nav {
        margin: 0;
        padding: 0;
      }

      @media (max-width: 575.98px) {
        .navbar-expand-sm .navbar-collapse {
          flex-direction: column;
        }

        .navbar-expand-sm .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-expand-sm .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-expand-sm .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-expand-sm .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-expand-sm .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 576px) {
        .navbar-expand-sm .navbar-collapse {
          width: auto;
          flex: 1 1 auto;
        }

        .navbar-expand-sm.navbar-dark .nav-item.active .nav-link,
        .navbar-expand-sm .navbar-dark .nav-item.active .nav-link {
          background-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-expand-sm.navbar-light .nav-item.active,
        .navbar-expand-sm .navbar-light .nav-item.active {
          position: relative;
        }

        .navbar-expand-sm.navbar-light .nav-item.active:after,
        .navbar-expand-sm .navbar-light .nav-item.active:after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          bottom: -0.25rem;
          border: 0 solid #206bc4;
          border-bottom-width: 2px;
        }

        .navbar-expand-sm.navbar-light.navbar-vertical,
        .navbar-expand-sm .navbar-light.navbar-vertical {
          box-shadow: inset -1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-sm.navbar-light.navbar-vertical.navbar-right,
        .navbar-expand-sm .navbar-light.navbar-vertical.navbar-right {
          box-shadow: inset 1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-sm.navbar-vertical~.navbar,
        .navbar-expand-sm.navbar-vertical~.page-wrapper {
          margin-left: 15rem;
        }

        .navbar-expand-sm.navbar-vertical.navbar-right~.navbar,
        .navbar-expand-sm.navbar-vertical.navbar-right~.page-wrapper {
          margin-left: 0;
          margin-right: 15rem;
        }
      }

      @media (max-width: 767.98px) {
        .navbar-expand-md .navbar-collapse {
          flex-direction: column;
        }

        .navbar-expand-md .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-expand-md .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-expand-md .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-expand-md .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-expand-md .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-expand-md .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-expand-md .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 768px) {
        .navbar-expand-md .navbar-collapse {
          width: auto;
          flex: 1 1 auto;
        }

        .navbar-expand-md.navbar-dark .nav-item.active .nav-link,
        .navbar-expand-md .navbar-dark .nav-item.active .nav-link {
          background-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-expand-md.navbar-light .nav-item.active,
        .navbar-expand-md .navbar-light .nav-item.active {
          position: relative;
        }

        .navbar-expand-md.navbar-light .nav-item.active:after,
        .navbar-expand-md .navbar-light .nav-item.active:after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          bottom: -0.25rem;
          border: 0 solid #206bc4;
          border-bottom-width: 2px;
        }

        .navbar-expand-md.navbar-light.navbar-vertical,
        .navbar-expand-md .navbar-light.navbar-vertical {
          box-shadow: inset -1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-md.navbar-light.navbar-vertical.navbar-right,
        .navbar-expand-md .navbar-light.navbar-vertical.navbar-right {
          box-shadow: inset 1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-md.navbar-vertical~.navbar,
        .navbar-expand-md.navbar-vertical~.page-wrapper {
          margin-left: 15rem;
        }

        .navbar-expand-md.navbar-vertical.navbar-right~.navbar,
        .navbar-expand-md.navbar-vertical.navbar-right~.page-wrapper {
          margin-left: 0;
          margin-right: 15rem;
        }
      }

      @media (max-width: 991.98px) {
        .navbar-expand-lg .navbar-collapse {
          flex-direction: column;
        }

        .navbar-expand-lg .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-expand-lg .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-expand-lg .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-expand-lg .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 992px) {
        .navbar-expand-lg .navbar-collapse {
          width: auto;
          flex: 1 1 auto;
        }

        .navbar-expand-lg.navbar-dark .nav-item.active .nav-link,
        .navbar-expand-lg .navbar-dark .nav-item.active .nav-link {
          background-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-expand-lg.navbar-light .nav-item.active,
        .navbar-expand-lg .navbar-light .nav-item.active {
          position: relative;
        }

        .navbar-expand-lg.navbar-light .nav-item.active:after,
        .navbar-expand-lg .navbar-light .nav-item.active:after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          bottom: -0.25rem;
          border: 0 solid #206bc4;
          border-bottom-width: 2px;
        }

        .navbar-expand-lg.navbar-light.navbar-vertical,
        .navbar-expand-lg .navbar-light.navbar-vertical {
          box-shadow: inset -1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-lg.navbar-light.navbar-vertical.navbar-right,
        .navbar-expand-lg .navbar-light.navbar-vertical.navbar-right {
          box-shadow: inset 1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-lg.navbar-vertical~.navbar,
        .navbar-expand-lg.navbar-vertical~.page-wrapper {
          margin-left: 15rem;
        }

        .navbar-expand-lg.navbar-vertical.navbar-right~.navbar,
        .navbar-expand-lg.navbar-vertical.navbar-right~.page-wrapper {
          margin-left: 0;
          margin-right: 15rem;
        }
      }

      @media (max-width: 1199.98px) {
        .navbar-expand-xl .navbar-collapse {
          flex-direction: column;
        }

        .navbar-expand-xl .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-expand-xl .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-expand-xl .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-expand-xl .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-expand-xl .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 1200px) {
        .navbar-expand-xl .navbar-collapse {
          width: auto;
          flex: 1 1 auto;
        }

        .navbar-expand-xl.navbar-dark .nav-item.active .nav-link,
        .navbar-expand-xl .navbar-dark .nav-item.active .nav-link {
          background-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-expand-xl.navbar-light .nav-item.active,
        .navbar-expand-xl .navbar-light .nav-item.active {
          position: relative;
        }

        .navbar-expand-xl.navbar-light .nav-item.active:after,
        .navbar-expand-xl .navbar-light .nav-item.active:after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          bottom: -0.25rem;
          border: 0 solid #206bc4;
          border-bottom-width: 2px;
        }

        .navbar-expand-xl.navbar-light.navbar-vertical,
        .navbar-expand-xl .navbar-light.navbar-vertical {
          box-shadow: inset -1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-xl.navbar-light.navbar-vertical.navbar-right,
        .navbar-expand-xl .navbar-light.navbar-vertical.navbar-right {
          box-shadow: inset 1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-xl.navbar-vertical~.navbar,
        .navbar-expand-xl.navbar-vertical~.page-wrapper {
          margin-left: 15rem;
        }

        .navbar-expand-xl.navbar-vertical.navbar-right~.navbar,
        .navbar-expand-xl.navbar-vertical.navbar-right~.page-wrapper {
          margin-left: 0;
          margin-right: 15rem;
        }
      }

      @media (max-width: 1399.98px) {
        .navbar-expand-xxl .navbar-collapse {
          flex-direction: column;
        }

        .navbar-expand-xxl .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-expand-xxl .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-expand-xxl .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-expand-xxl .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-expand-xxl .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 1400px) {
        .navbar-expand-xxl .navbar-collapse {
          width: auto;
          flex: 1 1 auto;
        }

        .navbar-expand-xxl.navbar-dark .nav-item.active .nav-link,
        .navbar-expand-xxl .navbar-dark .nav-item.active .nav-link {
          background-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-expand-xxl.navbar-light .nav-item.active,
        .navbar-expand-xxl .navbar-light .nav-item.active {
          position: relative;
        }

        .navbar-expand-xxl.navbar-light .nav-item.active:after,
        .navbar-expand-xxl .navbar-light .nav-item.active:after {
          content: "";
          position: absolute;
          left: 0;
          right: 0;
          bottom: -0.25rem;
          border: 0 solid #206bc4;
          border-bottom-width: 2px;
        }

        .navbar-expand-xxl.navbar-light.navbar-vertical,
        .navbar-expand-xxl .navbar-light.navbar-vertical {
          box-shadow: inset -1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-xxl.navbar-light.navbar-vertical.navbar-right,
        .navbar-expand-xxl .navbar-light.navbar-vertical.navbar-right {
          box-shadow: inset 1px 0 0 0 rgba(98, 105, 118, 0.16);
        }

        .navbar-expand-xxl.navbar-vertical~.navbar,
        .navbar-expand-xxl.navbar-vertical~.page-wrapper {
          margin-left: 15rem;
        }

        .navbar-expand-xxl.navbar-vertical.navbar-right~.navbar,
        .navbar-expand-xxl.navbar-vertical.navbar-right~.page-wrapper {
          margin-left: 0;
          margin-right: 15rem;
        }
      }

      .navbar-expand .navbar-collapse {
        flex-direction: column;
      }

      .navbar-expand .navbar-collapse [class^="container"] {
        flex-direction: column;
        align-items: stretch;
      }

      .navbar-expand .navbar-collapse .navbar-nav {
        margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
      }

      .navbar-expand .navbar-collapse .navbar-nav .nav-link {
        padding: 0.5rem 1.5rem;
        justify-content: flex-start;
      }

      .navbar-expand .navbar-collapse .dropdown-menu-columns {
        flex-direction: column;
      }

      .navbar-expand .navbar-collapse .dropdown-menu {
        padding: 0;
        background: transparent;
        position: static;
        color: inherit;
        box-shadow: none;
        border: none;
        min-width: 0;
        margin: 0;
      }

      .navbar-expand .navbar-collapse .dropdown-menu .dropdown-item {
        min-width: 0;
        display: flex;
        width: auto;
        padding-left: 3.25rem;
      }

      .navbar-expand .navbar-collapse .dropdown-menu .dropdown-item.active,
      .navbar-expand .navbar-collapse .dropdown-menu .dropdown-item:active {
        color: inherit;
        box-shadow: inset 2px 0 0 0 #206bc4;
      }

      .navbar-expand .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
        padding-left: 4.75rem;
      }

      .navbar-expand .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
        padding-left: 6.25rem;
      }

      .navbar-expand .navbar-collapse .dropdown-toggle:after {
        margin-left: auto;
      }

      .navbar-expand .navbar-collapse .nav-item.active:after {
        border-bottom-width: 0;
        border-left-width: 2px;
        right: auto;
        top: 0;
        bottom: 0;
      }

      .navbar-expand .navbar-collapse {
        width: auto;
        flex: 1 1 auto;
      }

      .navbar-expand.navbar-dark .nav-item.active .nav-link,
      .navbar-expand .navbar-dark .nav-item.active .nav-link {
        background-color: rgba(0, 0, 0, 0.1);
      }

      .navbar-expand.navbar-light .nav-item.active,
      .navbar-expand .navbar-light .nav-item.active {
        position: relative;
      }

      .navbar-expand.navbar-light .nav-item.active:after,
      .navbar-expand .navbar-light .nav-item.active:after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: -0.25rem;
        border: 0 solid #206bc4;
        border-bottom-width: 2px;
      }

      .navbar-expand.navbar-light.navbar-vertical,
      .navbar-expand .navbar-light.navbar-vertical {
        box-shadow: inset -1px 0 0 0 rgba(98, 105, 118, 0.16);
      }

      .navbar-expand.navbar-light.navbar-vertical.navbar-right,
      .navbar-expand .navbar-light.navbar-vertical.navbar-right {
        box-shadow: inset 1px 0 0 0 rgba(98, 105, 118, 0.16);
      }

      .navbar-expand.navbar-vertical~.navbar,
      .navbar-expand.navbar-vertical~.page-wrapper {
        margin-left: 15rem;
      }

      .navbar-expand.navbar-vertical.navbar-right~.navbar,
      .navbar-expand.navbar-vertical.navbar-right~.page-wrapper {
        margin-left: 0;
        margin-right: 15rem;
      }

      /**
    Navbar brand
    */
      .navbar-brand {
        display: inline-flex;
        align-items: center;
        font-weight: 600;
        margin: 0;
      }

      .navbar-brand-image {
        display: block;
        height: 40px;
        width: auto;
      }

      /**
    Navbar toggler
    */
      .navbar-toggler {
        border: 0;
        width: 2rem;
        height: 2rem;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .navbar-toggler-icon {
        height: 2px;
        width: 1.25em;
        background: currentColor;
        border-radius: 10px;
        transition: top 0.2s 0.2s, bottom 0.2s 0.2s, transform 0.2s, opacity 0s 0.2s;
        position: relative;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar-toggler-icon {
          transition: none;
        }
      }

      .navbar-toggler-icon:before,
      .navbar-toggler-icon:after {
        content: "";
        display: block;
        height: inherit;
        width: inherit;
        border-radius: inherit;
        background: inherit;
        position: absolute;
        left: 0;
        transition: inherit;
      }

      @media (prefers-reduced-motion: reduce) {

        .navbar-toggler-icon:before,
        .navbar-toggler-icon:after {
          transition: none;
        }
      }

      .navbar-toggler-icon:before {
        top: -0.45em;
      }

      .navbar-toggler-icon:after {
        bottom: -0.45em;
      }

      .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        transform: rotate(45deg);
        transition: top 0.3s, bottom 0.3s, transform 0.3s 0.3s, opacity 0s 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
          transition: none;
        }
      }

      .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
        top: 0;
        transform: rotate(-90deg);
      }

      .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
        bottom: 0;
        opacity: 0;
      }

      /**
    Navbar light
    */
      .navbar-light {
        box-shadow: inset 0 -1px 0 0 rgba(98, 105, 118, 0.16);
        background-color: #ffffff;
      }

      /**
    Navbar dark
    */
      .navbar-dark {
        --navbar-bg-color: #1e293b;
        --navbar-color: rgba(255, 255, 255, 0.7);
        --navbar-brand-color: #ffffff;
        --link-active-color: #ffffff;
        --link-disabled-color: rgba(255, 255, 255, 0.3);
        background: #1e293b;
        color: rgba(255, 255, 255, 0.7);
      }

      .navbar-dark::-webkit-scrollbar {
        width: 6px;
        height: 6px;
        -webkit-transition: background 0.3s;
        transition: background 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar-dark::-webkit-scrollbar {
          -webkit-transition: none;
          transition: none;
        }
      }

      .navbar-dark::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: rgba(var(--tblr-body-color-rgb), 0.16);
      }

      .navbar-dark::-webkit-scrollbar-track {
        background: rgba(var(--tblr-body-color-rgb), 0.06);
      }

      .navbar-dark:hover::-webkit-scrollbar-thumb {
        background: rgba(var(--tblr-body-color-rgb), 0.32);
      }

      .navbar-dark::-webkit-scrollbar-corner {
        background: transparent;
      }

      .navbar-dark .text-muted {
        color: rgba(255, 255, 255, 0.7) !important;
      }

      .navbar-dark .navbar-brand {
        color: #ffffff;
      }

      .navbar-dark .navbar-brand:hover,
      .navbar-dark .navbar-brand:focus {
        color: #ffffff;
        opacity: 0.8;
      }

      .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.7);
      }

      .navbar-dark .navbar-nav .nav-link:hover,
      .navbar-dark .navbar-nav .nav-link:focus {
        color: #ffffff;
      }

      .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.3);
      }

      .navbar-dark .navbar-nav .show>.nav-link,
      .navbar-dark .navbar-nav .active>.nav-link,
      .navbar-dark .navbar-nav .nav-link.show,
      .navbar-dark .navbar-nav .nav-link.active {
        color: #ffffff;
      }

      .navbar-dark .navbar-toggler {
        color: #ffffff;
        border-color: transparent;
      }

      .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.7);
      }

      .navbar-dark .navbar-text a,
      .navbar-dark .navbar-text a:hover,
      .navbar-dark .navbar-text a:focus {
        color: rgba(255, 255, 255, 0.7);
      }

      .navbar-dark::-webkit-scrollbar {
        width: 6px;
        height: 6px;
        -webkit-transition: background 0.3s;
        transition: background 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar-dark::-webkit-scrollbar {
          -webkit-transition: none;
          transition: none;
        }
      }

      .navbar-dark::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: rgba(var(--tblr-body-color-rgb), 0.16);
      }

      .navbar-dark::-webkit-scrollbar-track {
        background: rgba(var(--tblr-body-color-rgb), 0.06);
      }

      .navbar-dark:hover::-webkit-scrollbar-thumb {
        background: rgba(var(--tblr-body-color-rgb), 0.32);
      }

      .navbar-dark::-webkit-scrollbar-corner {
        background: transparent;
      }

      .navbar-dark .input-icon-addon {
        color: rgba(248, 250, 252, 0.64);
      }

      .navbar-dark .form-control {
        border-color: transparent;
        background-color: rgba(0, 0, 0, 0.1);
      }

      .navbar-dark .form-control::-webkit-input-placeholder {
        color: rgba(248, 250, 252, 0.64);
      }

      .navbar-dark .form-control::-moz-placeholder {
        color: rgba(248, 250, 252, 0.64);
      }

      .navbar-dark .form-control:-ms-input-placeholder {
        color: rgba(248, 250, 252, 0.64);
      }

      .navbar-dark .form-control::-ms-input-placeholder {
        color: rgba(248, 250, 252, 0.64);
      }

      .navbar-dark .form-control::placeholder {
        color: rgba(248, 250, 252, 0.64);
      }

      /**
    Navbar nav
    */
      .navbar-nav {
        align-items: stretch;
      }

      .navbar-nav .nav-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      /**
    Navbar side
    */
      .navbar-side {
        margin: 0;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
      }

      /**
    Navbar vertical
    */
      @media (min-width: 576px) {
        .navbar-vertical.navbar-expand-sm {
          width: 15rem;
          position: fixed;
          top: 0;
          left: 0;
          bottom: 0;
          z-index: 1030;
          align-items: flex-start;
          transition: transform 0.3s;
          overflow-x: auto;
        }
      }

      @media (min-width: 576px) and (prefers-reduced-motion: reduce) {
        .navbar-vertical.navbar-expand-sm {
          transition: none;
        }
      }

      @media (min-width: 576px) {
        .navbar-vertical.navbar-expand-sm.navbar-right {
          left: auto;
          right: 0;
        }

        .navbar-vertical.navbar-expand-sm .navbar-brand {
          padding: 0.75rem 0;
          justify-content: center;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse {
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-sm .navbar-nav {
          flex-direction: column;
          flex-grow: 1;
          min-height: auto;
        }

        .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link {
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
        }

        .navbar-vertical.navbar-expand-sm>[class^="container"] {
          flex-direction: column;
          align-items: stretch;
          min-height: 100%;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-sm~.page {
          padding-left: 15rem;
        }

        .navbar-vertical.navbar-expand-sm~.page [class^="container"] {
          padding-left: 1.5rem;
          padding-right: 1.5rem;
        }

        .navbar-vertical.navbar-expand-sm.navbar-right~.page {
          padding-left: 0;
          padding-right: 15rem;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-vertical.navbar-expand-sm .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 768px) {
        .navbar-vertical.navbar-expand-md {
          width: 15rem;
          position: fixed;
          top: 0;
          left: 0;
          bottom: 0;
          z-index: 1030;
          align-items: flex-start;
          transition: transform 0.3s;
          overflow-x: auto;
        }
      }

      @media (min-width: 768px) and (prefers-reduced-motion: reduce) {
        .navbar-vertical.navbar-expand-md {
          transition: none;
        }
      }

      @media (min-width: 768px) {
        .navbar-vertical.navbar-expand-md.navbar-right {
          left: auto;
          right: 0;
        }

        .navbar-vertical.navbar-expand-md .navbar-brand {
          padding: 0.75rem 0;
          justify-content: center;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse {
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-md .navbar-nav {
          flex-direction: column;
          flex-grow: 1;
          min-height: auto;
        }

        .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
        }

        .navbar-vertical.navbar-expand-md>[class^="container"] {
          flex-direction: column;
          align-items: stretch;
          min-height: 100%;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-md~.page {
          padding-left: 15rem;
        }

        .navbar-vertical.navbar-expand-md~.page [class^="container"] {
          padding-left: 1.5rem;
          padding-right: 1.5rem;
        }

        .navbar-vertical.navbar-expand-md.navbar-right~.page {
          padding-left: 0;
          padding-right: 15rem;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-vertical.navbar-expand-md .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 992px) {
        .navbar-vertical.navbar-expand-lg {
          width: 15rem;
          position: fixed;
          top: 0;
          left: 0;
          bottom: 0;
          z-index: 1030;
          align-items: flex-start;
          transition: transform 0.3s;
          overflow-x: auto;
        }
      }

      @media (min-width: 992px) and (prefers-reduced-motion: reduce) {
        .navbar-vertical.navbar-expand-lg {
          transition: none;
        }
      }

      @media (min-width: 992px) {
        .navbar-vertical.navbar-expand-lg.navbar-right {
          left: auto;
          right: 0;
        }

        .navbar-vertical.navbar-expand-lg .navbar-brand {
          padding: 0.75rem 0;
          justify-content: center;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse {
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-lg .navbar-nav {
          flex-direction: column;
          flex-grow: 1;
          min-height: auto;
        }

        .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link {
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
        }

        .navbar-vertical.navbar-expand-lg>[class^="container"] {
          flex-direction: column;
          align-items: stretch;
          min-height: 100%;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-lg~.page {
          padding-left: 15rem;
        }

        .navbar-vertical.navbar-expand-lg~.page [class^="container"] {
          padding-left: 1.5rem;
          padding-right: 1.5rem;
        }

        .navbar-vertical.navbar-expand-lg.navbar-right~.page {
          padding-left: 0;
          padding-right: 15rem;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-vertical.navbar-expand-lg .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 1200px) {
        .navbar-vertical.navbar-expand-xl {
          width: 15rem;
          position: fixed;
          top: 0;
          left: 0;
          bottom: 0;
          z-index: 1030;
          align-items: flex-start;
          transition: transform 0.3s;
          overflow-x: auto;
        }
      }

      @media (min-width: 1200px) and (prefers-reduced-motion: reduce) {
        .navbar-vertical.navbar-expand-xl {
          transition: none;
        }
      }

      @media (min-width: 1200px) {
        .navbar-vertical.navbar-expand-xl.navbar-right {
          left: auto;
          right: 0;
        }

        .navbar-vertical.navbar-expand-xl .navbar-brand {
          padding: 0.75rem 0;
          justify-content: center;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse {
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-xl .navbar-nav {
          flex-direction: column;
          flex-grow: 1;
          min-height: auto;
        }

        .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link {
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
        }

        .navbar-vertical.navbar-expand-xl>[class^="container"] {
          flex-direction: column;
          align-items: stretch;
          min-height: 100%;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-xl~.page {
          padding-left: 15rem;
        }

        .navbar-vertical.navbar-expand-xl~.page [class^="container"] {
          padding-left: 1.5rem;
          padding-right: 1.5rem;
        }

        .navbar-vertical.navbar-expand-xl.navbar-right~.page {
          padding-left: 0;
          padding-right: 15rem;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-vertical.navbar-expand-xl .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      @media (min-width: 1400px) {
        .navbar-vertical.navbar-expand-xxl {
          width: 15rem;
          position: fixed;
          top: 0;
          left: 0;
          bottom: 0;
          z-index: 1030;
          align-items: flex-start;
          transition: transform 0.3s;
          overflow-x: auto;
        }
      }

      @media (min-width: 1400px) and (prefers-reduced-motion: reduce) {
        .navbar-vertical.navbar-expand-xxl {
          transition: none;
        }
      }

      @media (min-width: 1400px) {
        .navbar-vertical.navbar-expand-xxl.navbar-right {
          left: auto;
          right: 0;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-brand {
          padding: 0.75rem 0;
          justify-content: center;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse {
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-nav {
          flex-direction: column;
          flex-grow: 1;
          min-height: auto;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link {
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
        }

        .navbar-vertical.navbar-expand-xxl>[class^="container"] {
          flex-direction: column;
          align-items: stretch;
          min-height: 100%;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-xxl~.page {
          padding-left: 15rem;
        }

        .navbar-vertical.navbar-expand-xxl~.page [class^="container"] {
          padding-left: 1.5rem;
          padding-right: 1.5rem;
        }

        .navbar-vertical.navbar-expand-xxl.navbar-right~.page {
          padding-left: 0;
          padding-right: 15rem;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse [class^="container"] {
          flex-direction: column;
          align-items: stretch;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .navbar-nav {
          margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
          margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .navbar-nav .nav-link {
          padding: 0.5rem 1.5rem;
          justify-content: flex-start;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu-columns {
          flex-direction: column;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu {
          padding: 0;
          background: transparent;
          position: static;
          color: inherit;
          box-shadow: none;
          border: none;
          min-width: 0;
          margin: 0;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item {
          min-width: 0;
          display: flex;
          width: auto;
          padding-left: 3.25rem;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item.active,
        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item:active {
          color: inherit;
          box-shadow: inset 2px 0 0 0 #206bc4;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 4.75rem;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
          padding-left: 6.25rem;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .dropdown-toggle:after {
          margin-left: auto;
        }

        .navbar-vertical.navbar-expand-xxl .navbar-collapse .nav-item.active:after {
          border-bottom-width: 0;
          border-left-width: 2px;
          right: auto;
          top: 0;
          bottom: 0;
        }
      }

      .navbar-vertical.navbar-expand {
        width: 15rem;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1030;
        align-items: flex-start;
        transition: transform 0.3s;
        overflow-x: auto;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar-vertical.navbar-expand {
          transition: none;
        }
      }

      .navbar-vertical.navbar-expand.navbar-right {
        left: auto;
        right: 0;
      }

      .navbar-vertical.navbar-expand .navbar-brand {
        padding: 0.75rem 0;
        justify-content: center;
      }

      .navbar-vertical.navbar-expand .navbar-collapse {
        align-items: stretch;
      }

      .navbar-vertical.navbar-expand .navbar-nav {
        flex-direction: column;
        flex-grow: 1;
        min-height: auto;
      }

      .navbar-vertical.navbar-expand .navbar-nav .nav-link {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }

      .navbar-vertical.navbar-expand>[class^="container"] {
        flex-direction: column;
        align-items: stretch;
        min-height: 100%;
        justify-content: flex-start;
      }

      .navbar-vertical.navbar-expand~.page {
        padding-left: 15rem;
      }

      .navbar-vertical.navbar-expand~.page [class^="container"] {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }

      .navbar-vertical.navbar-expand.navbar-right~.page {
        padding-left: 0;
        padding-right: 15rem;
      }

      .navbar-vertical.navbar-expand .navbar-collapse {
        flex-direction: column;
      }

      .navbar-vertical.navbar-expand .navbar-collapse [class^="container"] {
        flex-direction: column;
        align-items: stretch;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .navbar-nav {
        margin-left: calc(-1 * var(--tblr-gutter-x, 1.5rem));
        margin-right: calc(-1 * var(--tblr-gutter-x, 1.5rem));
      }

      .navbar-vertical.navbar-expand .navbar-collapse .navbar-nav .nav-link {
        padding: 0.5rem 1.5rem;
        justify-content: flex-start;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu-columns {
        flex-direction: column;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu {
        padding: 0;
        background: transparent;
        position: static;
        color: inherit;
        box-shadow: none;
        border: none;
        min-width: 0;
        margin: 0;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu .dropdown-item {
        min-width: 0;
        display: flex;
        width: auto;
        padding-left: 3.25rem;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu .dropdown-item.active,
      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu .dropdown-item:active {
        color: inherit;
        box-shadow: inset 2px 0 0 0 #206bc4;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-item {
        padding-left: 4.75rem;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-menu .dropdown-menu .dropdown-menu .dropdown-item {
        padding-left: 6.25rem;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .dropdown-toggle:after {
        margin-left: auto;
      }

      .navbar-vertical.navbar-expand .navbar-collapse .nav-item.active:after {
        border-bottom-width: 0;
        border-left-width: 2px;
        right: auto;
        top: 0;
        bottom: 0;
      }

      .navbar-overlap:after {
        content: "";
        height: 9rem;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: inherit;
        z-index: -1;
        box-shadow: inherit;
      }

      .page {
        display: flex;
        flex-direction: column;
        position: relative;
        min-height: 100vh;
      }

      .page-center {
        justify-content: center;
      }

      .page-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
      }

      @media print {
        .page-wrapper {
          margin: 0 !important;
        }
      }

      .page-wrapper-full .page-body:first-child {
        margin: 0;
        border-top: 0;
      }

      .page-body {
        margin-top: 0.3rem;
        margin-bottom: 0.3rem;
      }

      .page-body-card {
        background: #ffffff;
        border-top: 1px solid rgba(98, 105, 118, 0.16);
        padding: 1.25rem 0;
        margin-bottom: 0;
        flex: 1;
      }

      .page-body~.page-body-card {
        margin-top: 0;
      }

      .page-cover {
        background: no-repeat center/cover;
        min-height: 9rem;
      }

      @media (min-width: 768px) {
        .page-cover {
          min-height: 12rem;
        }
      }

      @media (min-width: 992px) {
        .page-cover {
          min-height: 15rem;
        }
      }

      .page-cover-overlay {
        position: relative;
      }

      .page-cover-overlay:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: linear-gradient(180deg,
            rgba(0, 0, 0, 0) 0%,
            rgba(0, 0, 0, 0.6) 100%);
      }

      .page-header {
        display: flex;
        flex-wrap: wrap;
        min-height: 2.25rem;
        flex-direction: column;
        justify-content: center;
      }

      .page-wrapper .page-header {
        margin: 0.5rem 0.5rem 0;
      }

      .page-header-border {
        border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        padding-bottom: 1.25rem;
      }

      .page-pretitle {
        font-size: 0.725rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.6;
        color: #626976;
      }

      .description {
        font-size: 0.750rem;
        font-weight: 400;
        line-height: 1.6;
        color: #626976;
      }

      .text-footer {
        font-size: 0.85rem;
        font-weight: 400;
        letter-spacing: 0.01em;
        line-height: 1.6;
        color: #999999;
      }

      .page-title {
        margin: 0;
        font-size: 1.7rem;
        line-height: 1.4;
        font-weight: 600;
        color: inherit;
        display: flex;
        align-items: center;
      }

      .page-title svg {
        width: 1.5rem;
        height: 1.5rem;
        margin-right: 0.25rem;
      }

      .page-title-lg {
        font-size: 1.5rem;
        line-height: 1.3333333;
      }

      .page-subtitle {
        margin-top: 0.25rem;
        color: #626976;
      }

      .page-tabs {
        margin-top: 0.5rem;
        position: relative;
      }

      .page-header-tabs .nav-bordered {
        border: 0;
      }

      .page-header-tabs+.page-body-card {
        margin-top: 0;
      }

      .footer {
        border-top: 1px solid #e6e7e9;
        background-color: #ffffff;
        padding: 0.5rem 0.2rem;
        color: #626976;
        margin-top: auto;
      }

      .footer-transparent {
        background-color: transparent;
        border-top: 0;
      }

      /*!
    * Tabler (v0.9.0): _dark.scss
    * Copyright 2018-2021 The Tabler Authors
    * Copyright 2018-2021 codecalm
    * Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
    */
      body:not(.theme-dark) .hide-theme-light {
        display: none !important;
      }

      @media not print {
        .theme-dark {
          --tblr-body-color: #f8fafc;
          --tblr-body-color-rgb: 248, 250, 252;
          --tblr-body-bg: #1b2434;
          --tblr-body-bg-rgb: 26.5617978, 36.3011236, 52.2382022;
          --tblr-card-bg: #1e293b;
          --tblr-card-bg-rgb: 30, 41, 59;
          --tblr-border-color: #2c3c56;
          --tblr-border-color-light: #253249;
          color: #f8fafc;
          background-color: #1b2434;
        }

        .theme-dark .hide-theme-dark {
          display: none !important;
        }

        .theme-dark .text-body {
          color: #f8fafc !important;
        }

        .theme-dark .card,
        .theme-dark .card-footer,
        .theme-dark .card-stacked::after,
        .theme-dark .footer:not(.footer-transparent),
        .theme-dark .modal-content,
        .theme-dark .modal-header,
        .theme-dark .dropdown-menu,
        .theme-dark .alert:not(.alert-important) {
          background-color: #1e293b;
          color: inherit;
        }

        .theme-dark .card {
          border-color: transparent;
        }

        .theme-dark .card-tabs .nav-tabs .nav-link {
          background-color: #1b2434;
          color: inherit;
        }

        .theme-dark pre {
          background-color: #1b2434;
          border-color: #2c3c56;
        }

        .theme-dark .card-tabs .nav-tabs .nav-link.active {
          background-color: #1e293b;
          color: inherit;
        }

        .theme-dark .btn-white,
        .theme-dark .form-file-button {
          background-image: none;
        }

        .theme-dark .form-check-input:not(:checked),
        .theme-dark .form-select,
        .theme-dark .form-file-text,
        .theme-dark .form-control,
        .theme-dark .form-selectgroup-label,
        .theme-dark .form-selectgroup-check,
        .theme-dark .form-imagecheck-figure:before {
          background-color: #1b2434;
          color: #f8fafc;
          border-color: #2c3c56;
        }

        .theme-dark .form-control-plaintext {
          color: #f8fafc;
        }

        .theme-dark .input-group-flat .input-group-text {
          background-color: #1b2434;
        }

        .theme-dark .input-group-text {
          border-color: #2c3c56;
        }

        .theme-dark .highlight {
          background-color: #1b2434;
        }

        .theme-dark .avatar {
          --tblr-avatar-bg: #212e42;
        }

        .theme-dark .avatar-list-stacked .avatar {
          box-shadow: 0 0 0 2px #1e293b;
        }

        .theme-dark .markdown,
        .theme-dark .markdown>*,
        .theme-dark .accordion-button {
          color: inherit;
        }

        .theme-dark .btn-close,
        .theme-dark .accordion-button:after {
          filter: invert(1) grayscale(100%) brightness(200%);
        }

        .theme-dark .apexcharts-text {
          fill: #f8fafc;
        }

        .theme-dark .apexcharts-gridline {
          stroke: var(--tblr-border-color);
        }

        .theme-dark .apexcharts-legend-text {
          color: inherit !important;
        }

        .theme-dark .apexcharts-tooltip {
          background: #1e293b !important;
          border: 1px solid #2c3c56 !important;
          box-shadow: 2px 2px 6px -4px #1b2434 !important;
        }

        .theme-dark .apexcharts-tooltip .apexcharts-tooltip-title {
          background: #1e293b !important;
          border-bottom: 1px solid #2c3c56 !important;
        }

        .theme-dark .navbar-brand-autodark {
          filter: brightness(0) invert(1);
        }

        .theme-dark .table thead th,
        .theme-dark .markdown>table thead th,
        .theme-dark .input-group-text {
          background: transparent;
        }

        .theme-dark .list-group-item {
          color: #f8fafc;
          border-color: rgba(98, 105, 118, 0.16);
        }

        .theme-dark .list-group-header {
          background: #1b2434;
        }

        .theme-dark .apexcharts-radialbar-area {
          stroke: #2c3c56;
        }
      }

      .accordion-button:focus:not(:focus-visible) {
        outline: none;
        box-shadow: none;
      }

      .accordion-button:after {
        opacity: 0.7;
      }

      .accordion-button:not(.collapsed) {
        font-weight: 600;
        border-bottom-color: transparent;
        box-shadow: none;
      }

      .accordion-button:not(.collapsed):after {
        opacity: 1;
      }

      .alert {
        --tblr-alert-color: #626976;
        background: #ffffff;
        border: 1px solid rgba(98, 105, 118, 0.16);
        border-left: 0.25rem solid var(--tblr-alert-color);
        box-shadow: rgba(30, 41, 59, 0.04) 0 2px 4px 0;
      }

      .alert> :last-child {
        margin-bottom: 0;
      }

      .alert-important {
        border-color: transparent;
        background: var(--tblr-alert-color);
        color: #fff;
      }

      .alert-important .alert-icon,
      .alert-important .alert-link {
        color: inherit;
      }

      .alert-important .alert-link:hover {
        color: inherit;
      }

      .alert-link,
      .alert-link:hover {
        color: var(--tblr-alert-color);
      }

      .alert-primary {
        --tblr-alert-color: #206bc4;
      }

      .alert-secondary {
        --tblr-alert-color: #626976;
      }

      .alert-success {
        --tblr-alert-color: #2fb344;
      }

      .alert-info {
        --tblr-alert-color: #4299e1;
      }

      .alert-warning {
        --tblr-alert-color: #f76707;
      }

      .alert-danger {
        --tblr-alert-color: #ff3939;
      }

      .alert-light {
        --tblr-alert-color: #f8fafc;
      }

      .alert-dark {
        --tblr-alert-color: #1e293b;
      }

      .alert-muted {
        --tblr-alert-color: #626976;
      }

      .alert-icon {
        color: var(--tblr-alert-color);
        width: 1.5rem !important;
        height: 1.5rem !important;
        margin: -0.125rem 1rem -0.125rem 0;
      }

      .alert-title {
        font-size: 0.875rem;
        line-height: 1.4285714;
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: var(--tblr-alert-color);
      }

      .avatar {
        --tblr-avatar-size: 2.5rem;
        --tblr-avatar-bg: var(--tblr-border-color-light);
        position: relative;
        width: var(--tblr-avatar-size);
        height: var(--tblr-avatar-size);
        font-size: calc(var(--tblr-avatar-size) / 2.8571429);
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #626976;
        text-align: center;
        text-transform: uppercase;
        vertical-align: bottom;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background: var(--tblr-avatar-bg) no-repeat center/cover;
        border-radius: 4px;
      }

      .avatar svg {
        width: calc(var(--tblr-avatar-size) / 1.6666667);
        height: calc(var(--tblr-avatar-size) / 1.6666667);
      }

      .avatar .badge {
        position: absolute;
        right: 0;
        bottom: 0;
        border-radius: 100rem;
        box-shadow: 0 0 0 2px #ffffff;
      }

      a.avatar {
        cursor: pointer;
      }

      .avatar-rounded {
        border-radius: 100rem;
      }

      .avatar-xs {
        --tblr-avatar-size: 1.25rem;
      }

      .avatar-xs .badge:empty {
        width: 0.3125rem;
        height: 0.3125rem;
      }

      .avatar-sm {
        --tblr-avatar-size: 2rem;
      }

      .avatar-sm .badge:empty {
        width: 0.5rem;
        height: 0.5rem;
      }

      .avatar-md {
        --tblr-avatar-size: 3.75rem;
      }

      .avatar-md .badge:empty {
        width: 0.9375rem;
        height: 0.9375rem;
      }

      .avatar-lg {
        --tblr-avatar-size: 5rem;
      }

      .avatar-lg .badge:empty {
        width: 1.25rem;
        height: 1.25rem;
      }

      .avatar-xl {
        --tblr-avatar-size: 7rem;
      }

      .avatar-xl .badge:empty {
        width: 1.75rem;
        height: 1.75rem;
      }

      .avatar-2xl {
        --tblr-avatar-size: 11rem;
      }

      .avatar-2xl .badge:empty {
        width: 2.75rem;
        height: 2.75rem;
      }

      .avatar-list {
        display: inline-flex;
        padding: 0;
        margin: 0 0 -0.5rem;
        flex-wrap: wrap;
      }

      .avatar-list .avatar {
        margin-bottom: 0.5rem;
      }

      .avatar-list .avatar:not(:last-child) {
        margin-right: 0.5rem;
      }

      .avatar-list a.avatar:hover {
        z-index: 1;
      }

      .avatar-list-stacked .avatar {
        margin-right: -0.5rem !important;
        box-shadow: 0 0 0 2px #ffffff;
      }

      .card-footer .avatar-list-stacked .avatar {
        box-shadow: 0 0 0 2px #ffffff;
      }

      .avatar-upload {
        width: 4rem;
        height: 4rem;
        border: 1px dashed #e6e7e9;
        background: #ffffff;
        flex-direction: column;
        transition: color 0.3s, background-color 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .avatar-upload {
          transition: none;
        }
      }

      .avatar-upload svg {
        width: 1.5rem;
        height: 1.5rem;
        stroke-width: 1;
      }

      .avatar-upload:hover {
        border-color: #206bc4;
        color: #206bc4;
        text-decoration: none;
      }

      .avatar-upload-text {
        font-size: 0.625rem;
        line-height: 1;
        margin-top: 0.25rem;
      }

      .page-cover~* .page-avatar {
        margin-top: calc(calc(-1 * calc(var(--tblr-avatar-size) * 0.5)) - 1.25rem);
        box-shadow: 0 0 0 0.25rem #f8fafc;
      }

      .badge {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        background: #64748b;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding: calc(0.25rem - 1px) 0.25rem;
        height: 1.25rem;
        border: 1px solid transparent;
        min-width: 1.25rem;
        font-weight: 400;
        font-size: 0.685rem;
        letter-spacing: 0.02em;
      }

      a.badge {
        color: #ffffff;
      }

      .badge:empty {
        display: inline-block;
        width: 0.5rem;
        height: 0.5rem;
        min-width: 0;
        min-height: auto;
        padding: 0;
        border-radius: 100rem;
      }

      .badge .icon {
        width: 1em;
        height: 1em;
        font-size: 1rem;
        margin: 0 0.25rem 0 0;
      }

      .badge-outline {
        background-color: transparent;
        border: 1px solid currentColor;
      }

      .badge-pill {
        border-radius: 100rem;
      }

      .breadcrumb {
        padding: 0;
        margin: 0;
        background: transparent;
      }

      .breadcrumb a {
        color: #626976;
      }

      .breadcrumb a:hover {
        text-decoration: underline;
      }

      .breadcrumb-item.active a {
        color: inherit;
        pointer-events: none;
      }

      .breadcrumb-dots .breadcrumb-item+.breadcrumb-item:before {
        content: "·";
      }

      .breadcrumb-arrows .breadcrumb-item+.breadcrumb-item:before {
        content: "›";
      }

      .breadcrumb-bullets .breadcrumb-item+.breadcrumb-item:before {
        content: "•";
      }

      .btn {
        --tblr-btn-color-text-rgb: var(--tblr-body-color-rgb);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-color: var(--tblr-border-color);
        white-space: nowrap;
        background-color: var(--tblr-btn-color, var(--tblr-card-bg));
        color: var(--tblr-btn-color-text);
      }

      .btn:hover {
        color: var(--tblr-btn-color-text);
        border-color: rgba(var(--tblr-btn-color-text-rgb), 0.15);
      }

      .btn:focus:not([disabled]):not(.disabled) {
        border-color: var(--tblr-btn-color, #206bc4);
      }

      .btn:disabled,
      .btn.disabled {
        cursor: not-allowed;
      }

      .btn .icon {
        width: 1.25rem;
        height: 1.25rem;
        min-width: 1.25rem;
        margin: 0 0.25rem 0 -0.25rem;
        vertical-align: bottom;
        color: inherit;
      }

      .btn .avatar {
        width: 1.25rem;
        height: 1.25rem;
        vertical-align: text-top;
        margin: 0 0.5rem 0 -0.25rem;
      }

      .btn .icon-right {
        margin: 0 -0.25rem 0 0.5rem;
      }

      .btn .badge {
        top: auto;
      }

      .btn-primary,
      .btn-secondary,
      .btn-success,
      .btn-info,
      .btn-warning,
      .btn-danger,
      .btn-light,
      .btn-dark,
      .btn-muted,
      .btn-blue,
      .btn-azure,
      .btn-indigo,
      .btn-purple,
      .btn-pink,
      .btn-red,
      .btn-reha,
      .btn-orange,
      .btn-yellow,
      .btn-lime,
      .btn-green,
      .btn-teal,
      .btn-cyan,
      .btn-facebook,
      .btn-twitter,
      .btn-linkedin,
      .btn-google,
      .btn-youtube,
      .btn-vimeo,
      .btn-dribbble,
      .btn-github,
      .btn-instagram,
      .btn-pinterest,
      .btn-vk,
      .btn-rss,
      .btn-flickr,
      .btn-bitbucket,
      .btn-tabler {
        border-color: rgba(98, 105, 118, 0.24);
      }

      .btn-primary:hover,
      .btn-secondary:hover,
      .btn-success:hover,
      .btn-info:hover,
      .btn-warning:hover,
      .btn-danger:hover,
      .btn-light:hover,
      .btn-dark:hover,
      .btn-muted:hover,
      .btn-blue:hover,
      .btn-azure:hover,
      .btn-indigo:hover,
      .btn-purple:hover,
      .btn-pink:hover,
      .btn-red:hover,
      .btn-reha:hover,
      .btn-orange:hover,
      .btn-yellow:hover,
      .btn-lime:hover,
      .btn-green:hover,
      .btn-teal:hover,
      .btn-cyan:hover,
      .btn-facebook:hover,
      .btn-twitter:hover,
      .btn-linkedin:hover,
      .btn-google:hover,
      .btn-youtube:hover,
      .btn-vimeo:hover,
      .btn-dribbble:hover,
      .btn-github:hover,
      .btn-instagram:hover,
      .btn-pinterest:hover,
      .btn-vk:hover,
      .btn-rss:hover,
      .btn-flickr:hover,
      .btn-bitbucket:hover,
      .btn-tabler:hover {
        color: var(--tblr-btn-color-text);
        background: var(--tblr-btn-color-interactive);
        border-color: var(--tblr-btn-color);
      }

      .btn-outline-primary,
      .btn-outline-secondary,
      .btn-outline-success,
      .btn-outline-info,
      .btn-outline-warning,
      .btn-outline-danger,
      .btn-outline-light,
      .btn-outline-dark,
      .btn-outline-muted,
      .btn-outline-blue,
      .btn-outline-azure,
      .btn-outline-indigo,
      .btn-outline-purple,
      .btn-outline-pink,
      .btn-outline-red,
      .btn-outline-reha,
      .btn-outline-orange,
      .btn-outline-yellow,
      .btn-outline-lime,
      .btn-outline-green,
      .btn-outline-teal,
      .btn-outline-cyan,
      .btn-outline-facebook,
      .btn-outline-twitter,
      .btn-outline-linkedin,
      .btn-outline-google,
      .btn-outline-youtube,
      .btn-outline-vimeo,
      .btn-outline-dribbble,
      .btn-outline-github,
      .btn-outline-instagram,
      .btn-outline-pinterest,
      .btn-outline-vk,
      .btn-outline-rss,
      .btn-outline-flickr,
      .btn-outline-bitbucket,
      .btn-outline-tabler {
        background-color: transparent;
        color: var(--tblr-btn-color);
        border-color: var(--tblr-btn-color);
      }

      .btn-outline-primary:hover,
      .btn-outline-secondary:hover,
      .btn-outline-success:hover,
      .btn-outline-info:hover,
      .btn-outline-warning:hover,
      .btn-outline-danger:hover,
      .btn-outline-light:hover,
      .btn-outline-dark:hover,
      .btn-outline-muted:hover,
      .btn-outline-blue:hover,
      .btn-outline-azure:hover,
      .btn-outline-indigo:hover,
      .btn-outline-purple:hover,
      .btn-outline-pink:hover,
      .btn-outline-red:hover,
      .btn-outline-reha:hover,
      .btn-outline-orange:hover,
      .btn-outline-yellow:hover,
      .btn-outline-lime:hover,
      .btn-outline-green:hover,
      .btn-outline-teal:hover,
      .btn-outline-cyan:hover,
      .btn-outline-facebook:hover,
      .btn-outline-twitter:hover,
      .btn-outline-linkedin:hover,
      .btn-outline-google:hover,
      .btn-outline-youtube:hover,
      .btn-outline-vimeo:hover,
      .btn-outline-dribbble:hover,
      .btn-outline-github:hover,
      .btn-outline-instagram:hover,
      .btn-outline-pinterest:hover,
      .btn-outline-vk:hover,
      .btn-outline-rss:hover,
      .btn-outline-flickr:hover,
      .btn-outline-bitbucket:hover,
      .btn-outline-tabler:hover {
        background-color: var(--tblr-btn-color);
        color: var(--tblr-btn-color-text);
        border-color: var(--tblr-btn-color);
      }

      .btn-ghost-primary,
      .btn-ghost-secondary,
      .btn-ghost-success,
      .btn-ghost-info,
      .btn-ghost-warning,
      .btn-ghost-danger,
      .btn-ghost-light,
      .btn-ghost-dark,
      .btn-ghost-muted,
      .btn-ghost-blue,
      .btn-ghost-azure,
      .btn-ghost-indigo,
      .btn-ghost-purple,
      .btn-ghost-pink,
      .btn-ghost-red,
      .btn-ghost-reha,
      .btn-ghost-orange,
      .btn-ghost-yellow,
      .btn-ghost-lime,
      .btn-ghost-green,
      .btn-ghost-teal,
      .btn-ghost-cyan,
      .btn-ghost-facebook,
      .btn-ghost-twitter,
      .btn-ghost-linkedin,
      .btn-ghost-google,
      .btn-ghost-youtube,
      .btn-ghost-vimeo,
      .btn-ghost-dribbble,
      .btn-ghost-github,
      .btn-ghost-instagram,
      .btn-ghost-pinterest,
      .btn-ghost-vk,
      .btn-ghost-rss,
      .btn-ghost-flickr,
      .btn-ghost-bitbucket,
      .btn-ghost-tabler {
        background: transparent;
        color: var(--tblr-btn-color);
        border-color: transparent;
      }

      .btn-ghost-primary:hover,
      .btn-ghost-secondary:hover,
      .btn-ghost-success:hover,
      .btn-ghost-info:hover,
      .btn-ghost-warning:hover,
      .btn-ghost-danger:hover,
      .btn-ghost-light:hover,
      .btn-ghost-dark:hover,
      .btn-ghost-muted:hover,
      .btn-ghost-blue:hover,
      .btn-ghost-azure:hover,
      .btn-ghost-indigo:hover,
      .btn-ghost-purple:hover,
      .btn-ghost-pink:hover,
      .btn-ghost-red:hover,
      .btn-ghost-reha:hover,
      .btn-ghost-orange:hover,
      .btn-ghost-yellow:hover,
      .btn-ghost-lime:hover,
      .btn-ghost-green:hover,
      .btn-ghost-teal:hover,
      .btn-ghost-cyan:hover,
      .btn-ghost-facebook:hover,
      .btn-ghost-twitter:hover,
      .btn-ghost-linkedin:hover,
      .btn-ghost-google:hover,
      .btn-ghost-youtube:hover,
      .btn-ghost-vimeo:hover,
      .btn-ghost-dribbble:hover,
      .btn-ghost-github:hover,
      .btn-ghost-instagram:hover,
      .btn-ghost-pinterest:hover,
      .btn-ghost-vk:hover,
      .btn-ghost-rss:hover,
      .btn-ghost-flickr:hover,
      .btn-ghost-bitbucket:hover,
      .btn-ghost-tabler:hover {
        background-color: var(--tblr-btn-color);
        color: var(--tblr-btn-color-text);
        border-color: var(--tblr-btn-color);
      }

      .btn-link {
        color: #206bc4;
        background-color: transparent;
        border-color: transparent;
      }

      .btn-link .icon {
        color: inherit;
      }

      .btn-link:hover {
        color: #1a569d;
        border-color: transparent;
      }

      .btn-lg svg.icon,
      .btn-group-lg>.btn svg.icon {
        stroke-width: 2;
      }

      .btn-pill {
        padding-right: 1.5em;
        padding-left: 1.5em;
        border-radius: 10rem;
      }

      .btn-pill[class*="btn-icon"] {
        padding: 0.375rem 15px;
      }

      .btn-icon {
        min-width: calc(2.125rem + 2px);
      }

      .btn-icon.btn-sm,
      .btn-group-sm>.btn-icon.btn {
        min-width: calc(1.3214286rem + 2px);
      }

      .btn-icon .icon {
        margin: 0 -1em;
      }

      .btn-square {
        border-radius: 0;
      }

      .btn-list {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: -0.5rem !important;
        margin-right: -0.5rem;
      }

      .btn-list>* {
        margin: 0 0.5rem 0.5rem 0 !important;
      }

      .btn-floating {
        position: fixed;
        z-index: 1030;
        bottom: 1.5rem;
        right: 1.5rem;
        border-radius: 100rem;
      }

      .btn-loading {
        position: relative;
        color: transparent !important;
        text-shadow: none !important;
        pointer-events: none;
      }

      .btn-loading:after {
        content: "";
        display: inline-block;
        vertical-align: text-bottom;
        border: 1px solid currentColor;
        border-right-color: transparent;
        border-radius: 100rem;
        color: #ffffff;
        position: absolute;
        width: 1rem;
        height: 1rem;
        left: calc(50% - 0.5rem);
        top: calc(50% - 0.5rem);
        -webkit-animation: spinner-border 0.75s linear infinite;
        animation: spinner-border 0.75s linear infinite;
      }

      .btn-primary,
      .btn-outline-primary,
      .btn-ghost-primary {
        --tblr-btn-color: #206bc4;
        --tblr-btn-color-interactive: #1d60b0;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-secondary,
      .btn-outline-secondary,
      .btn-ghost-secondary {
        --tblr-btn-color: #626976;
        --tblr-btn-color-interactive: #585f6a;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-success,
      .btn-outline-success,
      .btn-ghost-success {
        --tblr-btn-color: #2fb344;
        --tblr-btn-color-interactive: #2aa13d;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-info,
      .btn-outline-info,
      .btn-ghost-info {
        --tblr-btn-color: #4299e1;
        --tblr-btn-color-interactive: #3b8acb;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-warning,
      .btn-outline-warning,
      .btn-ghost-warning {
        --tblr-btn-color: #f76707;
        --tblr-btn-color-interactive: #de5d06;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-danger,
      .btn-outline-danger,
      .btn-ghost-danger {
        --tblr-btn-color: #ff3939;
        --tblr-btn-color-interactive: #c13333;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-light,
      .btn-outline-light,
      .btn-ghost-light {
        --tblr-btn-color: #f8fafc;
        --tblr-btn-color-interactive: #dfe1e3;
        --tblr-btn-color-text: #1e293b;
      }

      .btn-dark,
      .btn-outline-dark,
      .btn-ghost-dark {
        --tblr-btn-color: #1e293b;
        --tblr-btn-color-interactive: #1b2535;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-muted,
      .btn-outline-muted,
      .btn-ghost-muted {
        --tblr-btn-color: #626976;
        --tblr-btn-color-interactive: #585f6a;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-blue,
      .btn-outline-blue,
      .btn-ghost-blue {
        --tblr-btn-color: #206bc4;
        --tblr-btn-color-interactive: #1d60b0;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-azure,
      .btn-outline-azure,
      .btn-ghost-azure {
        --tblr-btn-color: #4299e1;
        --tblr-btn-color-interactive: #3b8acb;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-indigo,
      .btn-outline-indigo,
      .btn-ghost-indigo {
        --tblr-btn-color: #4263eb;
        --tblr-btn-color-interactive: #3b59d4;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-purple,
      .btn-outline-purple,
      .btn-ghost-purple {
        --tblr-btn-color: #ae3ec9;
        --tblr-btn-color-interactive: #9d38b5;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-pink,
      .btn-outline-pink,
      .btn-ghost-pink {
        --tblr-btn-color: #d6336c;
        --tblr-btn-color-interactive: #c12e61;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-red,
      .btn-outline-red,
      .btn-ghost-red {
        --tblr-btn-color: #ff3939;
        --tblr-btn-color-interactive: #c13333;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-reha,
      .btn-outline-reha,
      .btn-ghost-reha {
        --tblr-btn-color: #00ff00;
        --tblr-btn-color-interactive: #4fcd06;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-orange,
      .btn-outline-orange,
      .btn-ghost-orange {
        --tblr-btn-color: #f76707;
        --tblr-btn-color-interactive: #de5d06;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-yellow,
      .btn-outline-yellow,
      .btn-ghost-yellow {
        --tblr-btn-color: #f59f00;
        --tblr-btn-color-interactive: #dd8f00;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-lime,
      .btn-outline-lime,
      .btn-ghost-lime {
        --tblr-btn-color: #74b816;
        --tblr-btn-color-interactive: #68a614;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-green,
      .btn-outline-green,
      .btn-ghost-green {
        --tblr-btn-color: #018016;
        --tblr-btn-color-interactive: #2aa13d;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-teal,
      .btn-outline-teal,
      .btn-ghost-teal {
        --tblr-btn-color: #0ca678;
        --tblr-btn-color-interactive: #0b956c;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-cyan,
      .btn-outline-cyan,
      .btn-ghost-cyan {
        --tblr-btn-color: #17a2b8;
        --tblr-btn-color-interactive: #1592a6;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-facebook,
      .btn-outline-facebook,
      .btn-ghost-facebook {
        --tblr-btn-color: #3b5998;
        --tblr-btn-color-interactive: #355089;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-twitter,
      .btn-outline-twitter,
      .btn-ghost-twitter {
        --tblr-btn-color: #1da1f2;
        --tblr-btn-color-interactive: #1a91da;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-linkedin,
      .btn-outline-linkedin,
      .btn-ghost-linkedin {
        --tblr-btn-color: #0a66c2;
        --tblr-btn-color-interactive: #095caf;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-google,
      .btn-outline-google,
      .btn-ghost-google {
        --tblr-btn-color: #dc4e41;
        --tblr-btn-color-interactive: #c6463b;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-youtube,
      .btn-outline-youtube,
      .btn-ghost-youtube {
        --tblr-btn-color: #ff0000;
        --tblr-btn-color-interactive: #e60000;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-vimeo,
      .btn-outline-vimeo,
      .btn-ghost-vimeo {
        --tblr-btn-color: #1ab7ea;
        --tblr-btn-color-interactive: #17a5d3;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-dribbble,
      .btn-outline-dribbble,
      .btn-ghost-dribbble {
        --tblr-btn-color: #ea4c89;
        --tblr-btn-color-interactive: #d3447b;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-github,
      .btn-outline-github,
      .btn-ghost-github {
        --tblr-btn-color: #181717;
        --tblr-btn-color-interactive: #161515;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-instagram,
      .btn-outline-instagram,
      .btn-ghost-instagram {
        --tblr-btn-color: #e4405f;
        --tblr-btn-color-interactive: #cd3a56;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-pinterest,
      .btn-outline-pinterest,
      .btn-ghost-pinterest {
        --tblr-btn-color: #bd081c;
        --tblr-btn-color-interactive: #aa0719;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-vk,
      .btn-outline-vk,
      .btn-ghost-vk {
        --tblr-btn-color: #6383a8;
        --tblr-btn-color-interactive: #597697;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-rss,
      .btn-outline-rss,
      .btn-ghost-rss {
        --tblr-btn-color: #ffa500;
        --tblr-btn-color-interactive: #e69500;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-flickr,
      .btn-outline-flickr,
      .btn-ghost-flickr {
        --tblr-btn-color: #0063dc;
        --tblr-btn-color-interactive: #0059c6;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-bitbucket,
      .btn-outline-bitbucket,
      .btn-ghost-bitbucket {
        --tblr-btn-color: #0052cc;
        --tblr-btn-color-interactive: #004ab8;
        --tblr-btn-color-text: #f8fafc;
      }

      .btn-tabler,
      .btn-outline-tabler,
      .btn-ghost-tabler {
        --tblr-btn-color: #206bc4;
        --tblr-btn-color-interactive: #1d60b0;
        --tblr-btn-color-text: #f8fafc;
      }

      .calendar {
        display: block;
        font-size: 0.765625rem;
        border: 1px solid #e6e7e9;
        border-radius: 4px;
      }

      .calendar-nav {
        display: flex;
        align-items: center;
      }

      .calendar-title {
        flex: 1;
        text-align: center;
      }

      .calendar-body,
      .calendar-header {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        padding: 0.5rem 0;
      }

      .calendar-header {
        color: #626976;
      }

      .calendar-date {
        flex: 0 0 14.2857143%;
        max-width: 14.2857143%;
        padding: 0.2rem;
        text-align: center;
        border: 0;
      }

      .calendar-date.prev-month,
      .calendar-date.next-month {
        opacity: 0.25;
      }

      .calendar-date .date-item {
        position: relative;
        display: inline-block;
        width: 1.4rem;
        height: 1.4rem;
        line-height: 1.4rem;
        color: #66758c;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        background: 0 0;
        border: 1px solid transparent;
        border-radius: 100rem;
        outline: 0;
        transition: background 0.3s, border 0.3s, box-shadow 0.32s, color 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .calendar-date .date-item {
          transition: none;
        }
      }

      .calendar-date .date-item:hover {
        color: #206bc4;
        text-decoration: none;
        background: #fefeff;
        border-color: #e6e7e9;
      }

      .calendar-date .date-today {
        color: #206bc4;
        border-color: #e6e7e9;
      }

      .calendar-range {
        position: relative;
      }

      .calendar-range:before {
        position: absolute;
        top: 50%;
        right: 0;
        left: 0;
        height: 1.4rem;
        content: "";
        background: rgba(32, 107, 196, 0.1);
        transform: translateY(-50%);
      }

      .calendar-range.range-start .date-item,
      .calendar-range.range-end .date-item {
        color: #ffffff;
        background: #206bc4;
        border-color: #206bc4;
      }

      .calendar-range.range-start:before {
        left: 50%;
      }

      .calendar-range.range-end:before {
        right: 50%;
      }

      .border-0 .card,
      .border-0 .nav-link {
        border: 0 !important;
      }

      .border-0 .card-stacked::after {
        border: 1px solid rgba(98, 105, 118, 0.07) !important;
      }

      .card {
        box-shadow: rgba(30, 41, 59, 0.04) 0 2px 4px 0;
        border: 1px solid rgba(98, 105, 118, 0.16);
        background: var(--tblr-card-bg, #ffffff);
      }

      @media print {
        .card {
          border: none;
          box-shadow: none;
        }
      }

      a.card {
        color: inherit;
        transition: box-shadow 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        a.card {
          transition: none;
        }
      }

      a.card:hover {
        text-decoration: none;
        box-shadow: rgba(30, 41, 59, 0.16) 0 2px 16px 0;
      }

      .card-img,
      .card-img-start {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
      }

      .card-img,
      .card-img-end {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
      }

      .card-img-overlay {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }

      .card-img-overlay-dark {
        background-image: linear-gradient(180deg,
            rgba(0, 0, 0, 0) 0%,
            rgba(0, 0, 0, 0.6) 100%);
      }

      .card-inactive {
        pointer-events: none;
        box-shadow: none;
      }

      .card-inactive .card-body {
        opacity: 0.64;
      }

      .card-active {
        position: relative;
        background-color: rgba(32, 107, 196, 0.03);
        z-index: 1;
      }

      .card-active:before {
        position: absolute;
        top: -1px;
        right: -1px;
        bottom: -1px;
        left: -1px;
        content: "";
        border: 1px solid #206bc4;
        border-radius: inherit;
      }

      .card-link {
        color: inherit;
      }

      .card-link:hover {
        color: inherit;
        text-decoration: none;
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.08);
      }

      .card-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 1rem;
        text-align: center;
        transition: background 0.3s;
        border-top: 1px solid var(--tblr-border-color);
        flex: 1;
        color: inherit;
        font-weight: 500;
      }

      @media (prefers-reduced-motion: reduce) {
        .card-btn {
          transition: none;
        }
      }

      .card-btn:hover {
        text-decoration: none;
        background: rgba(32, 107, 196, 0.06);
      }

      .card-btn+.card-btn {
        border-left: 1px solid var(--tblr-border-color);
      }

      .card-stacked {
        position: relative;
      }

      .card-stacked:after {
        position: absolute;
        top: -5px;
        right: 5px;
        left: 5px;
        height: 5px;
        content: "";
        background: #ffffff;
        border: 1px solid rgba(98, 105, 118, 0.16);
        border-radius: 4px 4px 0 0;
      }

      .card-cover {
        position: relative;
        padding: 1rem 1rem;
        background: #666666 no-repeat center/cover;
      }

      .card-cover:before {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        content: "";
        background: rgba(30, 41, 59, 0.48);
      }

      .card-cover:first-child,
      .card-cover:first-child:before {
        border-radius: 4px 4px 0 0;
      }

      .card-cover-blurred:before {
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
      }

      .card-actions {
        margin-left: auto;
        font-size: 0.75rem;
      }

      .card-actions a {
        text-decoration: none;
      }

      .card-header {
        color: inherit;
        display: flex;
        align-items: center;
        background: transparent;
      }

      .card-header-tabs {
        flex: 1;
        margin: -1rem -1rem;
      }

      .card-header-pills {
        flex: 1;
      }

      /*
    Card footer
    */
      .card-footer {
        margin-top: auto;
      }

      .card-footer-gray {
        border-top: 0;
        background: #f8fafc;
      }

      .card-progress {
        height: 0.25rem;
      }

      .card-progress:last-child {
        border-radius: 0 0 2px 2px;
      }

      .card-progress:first-child {
        border-radius: 2px 2px 0 0;
      }

      .card-meta {
        color: #626976;
      }

      .card-title {
        display: block;
        margin: 0 0 1rem;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5rem;
      }

      a.card-title:hover {
        color: inherit;
      }

      .card-header .card-title {
        margin: 0.125rem 0;
      }

      .card-subtitle {
        margin-top: -1rem;
        margin-bottom: 1.25rem;
        color: #626976;
      }

      .card-header .card-subtitle {
        margin: -0.125rem 0 0;
      }

      .card-body> :last-child {
        margin-bottom: 0;
      }

      .card-sm>.card-body {
        padding: 0.75rem;
      }

      @media (min-width: 768px) {
        .card-md>.card-body {
          padding: 2rem;
        }
      }

      @media (min-width: 768px) {
        .card-lg>.card-body {
          padding: 2rem;
        }
      }

      @media (min-width: 992px) {
        .card-lg>.card-body {
          padding: 4rem;
        }
      }

      @media print {
        .card-body {
          padding: 0;
        }
      }

      .card-body+.card-body {
        border-top: 1px solid #e6e7e9;
      }

      .card-body-scrollable {
        overflow: auto;
      }

      /**
    Card optinos
    */
      .card-options {
        top: 1.5rem;
        right: 0.75rem;
        display: flex;
        margin-left: auto;
      }

      .card-options-link {
        display: inline-block;
        min-width: 1rem;
        margin-left: 0.25rem;
        color: #626976;
      }

      .card-dropdown {
        line-height: 1;
        color: #626976;
      }

      .card-dropdown .icon {
        width: 1.5rem;
        height: 1.5rem;
        font-size: 1.5rem;
        stroke-width: 1;
      }

      /**
    Card status
    */
      .card-status-top {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 2px;
        border-radius: 4px 4px 0 0;
      }

      .card-status-start {
        position: absolute;
        right: auto;
        bottom: 0;
        width: 2px;
        height: 100%;
        border-radius: 4px 0 0 4px;
      }

      .card-status-bottom {
        position: absolute;
        top: initial;
        bottom: 0;
        width: 100%;
        height: 2px;
        border-radius: 0 0 4px 4px;
      }

      /**
    Card table
    */
      .card-table {
        margin-bottom: 0 !important;
      }

      .card-table tr td:first-child,
      .card-table tr th:first-child {
        padding-left: 1rem;
      }

      .card-table tr td:last-child,
      .card-table tr th:last-child {
        padding-right: 1rem;
      }

      .card-table thead tr:first-child td,
      .card-table thead tr:first-child th {
        border-top: 0;
      }

      .card-table tbody tr:last-child td,
      .card-table tbody tr:last-child th {
        border-bottom: 0;
      }

      .card-body+.card-table {
        border-top: 1px solid #e6e7e9;
      }

      /*
    Card code
    */
      .card-code {
        padding: 0;
      }

      .card-code .highlight {
        margin: 0;
        border: 0;
      }

      .card-code pre {
        margin: 0 !important;
        border: 0 !important;
      }

      /*
    Card chart
    */
      .card-chart {
        position: relative;
        z-index: 1;
        height: 3.5rem;
      }

      /**
    Card avatar
    */
      .card-avatar {
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 0 0 0.25rem #ffffff;
        margin-top: calc(-1 * calc(var(--tblr-avatar-size) * 0.5));
      }

      /*
    Card list group
    */
      .card-body+.card-list-group {
        border-top: 1px solid #e6e7e9;
      }

      .card-list-group .list-group-item {
        padding-right: 1rem;
        padding-left: 1rem;
        border-right: 0;
        border-left: 0;
        border-radius: 0;
      }

      .card-list-group .list-group-item:last-child {
        border-bottom: 0;
      }

      .card-list-group .list-group-item:first-child {
        border-top: 0;
      }

      /**
    Card tabs
    */
      .card-tabs .nav-tabs {
        position: relative;
        z-index: 1000;
        border-bottom: 0;
      }

      .card-tabs .nav-tabs .nav-link {
        background: #ffffff;
        border: 1px solid rgba(98, 105, 118, 0.16);
        border-bottom: 0;
      }

      .card-tabs .nav-tabs .nav-link.active,
      .card-tabs .nav-tabs .nav-link:active,
      .card-tabs .nav-tabs .nav-link:hover {
        border-color: rgba(98, 105, 118, 0.16);
      }

      .card-tabs .nav-tabs .nav-link.active {
        background: #ffffff;
      }

      .card-tabs .nav-tabs .nav-item:not(:first-child) .nav-link {
        border-top-left-radius: 0;
      }

      .card-tabs .nav-tabs .nav-item:not(:last-child) .nav-link {
        border-top-right-radius: 0;
      }

      .card-tabs .nav-tabs .nav-item+.nav-item {
        margin-left: -1px;
      }

      .card-tabs .nav-tabs-bottom {
        margin-bottom: 0;
      }

      .card-tabs .nav-tabs-bottom .nav-item {
        margin-top: -1px;
        margin-bottom: 0;
      }

      .card-tabs .nav-tabs-bottom .nav-item .nav-link {
        border-top-width: 0;
        border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .card-tabs .card {
        margin: 0;
        border-top-left-radius: 0;
      }

      .btn-close {
        cursor: pointer;
      }

      .btn-close:focus {
        outline: none;
      }

      .dropdown-menu {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin: 0 !important;
      }

      .dropdown-menu.card {
        padding: 0;
        min-width: 25rem;
        display: none;
      }

      .dropdown-menu.card.show {
        display: flex;
      }

      .dropdown-item {
        min-width: 11rem;
        display: flex;
        align-items: center;
        line-height: 1.4285714;
      }

      .dropdown-item-icon {
        width: 1.25rem !important;
        height: 1.25rem !important;
        margin-right: 0.5rem;
        color: #626976;
        opacity: 0.7;
        text-align: center;
      }

      .dropdown-item-icon-delete {
        width: 1.25rem !important;
        height: 1.25rem !important;
        margin-right: 0.5rem;
        color: #d41727;
        opacity: 0.7;
        text-align: center;
      }

      .dropdown-item-icon-edit {
        width: 1.25rem !important;
        height: 1.25rem !important;
        margin-right: 0.5rem;
        color: #3250a8;
        opacity: 0.7;
        text-align: center;
      }

      .dropdown-item-icon-remove {
        width: 1.25rem !important;
        height: 1.25rem !important;
        margin-right: 0.5rem;
        color: #b5731d;
        opacity: 0.7;
        text-align: center;
      }

      .dropdown-item-indicator {
        margin-right: 0.5rem;
        margin-left: -0.25rem;
        height: 1.25rem;
        display: inline-flex;
        line-height: 1;
        vertical-align: bottom;
        align-items: center;
      }

      .dropdown-header {
        font-size: 0.625rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.6;
        color: #626976;
        padding-bottom: 0.25rem;
        pointer-events: none;
      }

      .dropdown-menu-scrollable {
        height: auto;
        max-height: 13rem;
        overflow-x: hidden;
      }

      .dropdown-menu-column {
        min-width: 11rem;
      }

      .dropdown-menu-column .dropdown-item {
        min-width: 0;
      }

      .dropdown-menu-columns {
        display: flex;
      }

      .dropdown-menu-arrow:before {
        content: "";
        position: absolute;
        top: -0.25rem;
        left: 0.75rem;
        display: block;
        background: inherit;
        width: 14px;
        height: 14px;
        transform: rotate(45deg);
        transform-origin: center;
        border: 1px solid;
        border-color: inherit;
        z-index: -1;
        clip: rect(0px, 9px, 9px, 0px);
      }

      .dropdown-menu-arrow.dropdown-menu-end:before {
        right: 0.67rem;
        left: auto;
      }

      .dropend>.dropdown-menu {
        margin-top: calc(-0.25rem - 1px);
        margin-left: -0.25rem;
      }

      .dropend .dropdown-toggle:after {
        margin-left: auto;
      }

      .dropdown-menu-card {
        padding: 0;
      }

      .dropdown-menu-card>.card {
        margin: 0;
        border: 0;
        box-shadow: none;
      }

      .empty {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        padding: 1rem;
        text-align: center;
      }

      @media (min-width: 768px) {
        .empty {
          padding: 3rem;
        }
      }

      .empty-icon {
        margin: 0 0 1rem;
        width: 3rem;
        height: 3rem;
        line-height: 1;
        color: #626976;
      }

      .empty-icon svg {
        width: 100%;
        height: 100%;
      }

      .empty-img {
        margin: 0 0 2rem;
        line-height: 1;
      }

      .empty-img img {
        height: 8rem;
        width: auto;
      }

      .empty-header {
        margin: 0 0 1rem;
        font-size: 4rem;
        font-weight: 300;
        line-height: 1;
        color: #626976;
      }

      .empty-title {
        font-size: 1.25rem;
        line-height: 1.4;
        font-weight: 600;
      }

      .empty-title,
      .empty-subtitle {
        margin: 0 0 0.5rem;
      }

      .empty-action {
        margin-top: 1.5rem;
      }

      .empty-bordered {
        border: 1px solid #e6e7e9;
        border-radius: 4px;
      }

      .row>* {
        min-width: 0;
      }

      .col-separator {
        border-left: 1px solid #e6e7e9;
      }

      @media (max-width: 991.98px) {

        .container,
        .container-fluid,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
          --tblr-gutter-x: 1rem;
        }
      }

      .container-tight {
        width: 100%;
        padding-right: var(--tblr-gutter-x, 1.5rem);
        padding-left: var(--tblr-gutter-x, 1.5rem);
        margin-right: auto;
        margin-left: auto;
        max-width: 30rem;
      }

      .container-narrow {
        width: 100%;
        padding-right: var(--tblr-gutter-x, 1.5rem);
        padding-left: var(--tblr-gutter-x, 1.5rem);
        margin-right: auto;
        margin-left: auto;
        max-width: 45rem;
      }

      .row-0 {
        margin-right: 0;
        margin-left: 0;
      }

      .row-0>.col,
      .row-0>[class*="col-"] {
        padding-right: 0;
        padding-left: 0;
      }

      .row-0 .card {
        margin-bottom: 0;
      }

      .row-sm {
        margin-right: -0.375rem;
        margin-left: -0.375rem;
      }

      .row-sm>.col,
      .row-sm>[class*="col-"] {
        padding-right: 0.375rem;
        padding-left: 0.375rem;
      }

      .row-sm .card {
        margin-bottom: 0.75rem;
      }

      .row-md {
        margin-right: -1.5rem;
        margin-left: -1.5rem;
      }

      .row-md>.col,
      .row-md>[class*="col-"] {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
      }

      .row-md .card {
        margin-bottom: 3rem;
      }

      .row-lg {
        margin-right: -3rem;
        margin-left: -3rem;
      }

      .row-lg>.col,
      .row-lg>[class*="col-"] {
        padding-right: 3rem;
        padding-left: 3rem;
      }

      .row-lg .card {
        margin-bottom: 6rem;
      }

      .row-deck>.col,
      .row-deck>[class*="col-"] {
        display: flex;
        align-items: stretch;
      }

      .row-deck>.col .card,
      .row-deck>[class*="col-"] .card {
        flex: 1 1 auto;
      }

      .row-cards {
        --tblr-gutter-x: 1rem;
        --tblr-gutter-y: 1rem;
      }

      .row-cards .row-cards {
        flex: 1;
      }

      @media (max-width: 991.98px) {
        .row-cards {
          --tblr-gutter-x: 0.5rem;
          --tblr-gutter-y: 0.5rem;
        }
      }

      .space-y> :not(template)~ :not(template) {
        margin-top: 1rem !important;
      }

      .space-x> :not(template)~ :not(template) {
        margin-left: 1rem !important;
      }

      .space-y-0> :not(template)~ :not(template) {
        margin-top: 0 !important;
      }

      .space-x-0> :not(template)~ :not(template) {
        margin-left: 0 !important;
      }

      .space-y-1> :not(template)~ :not(template) {
        margin-top: 0.25rem !important;
      }

      .space-x-1> :not(template)~ :not(template) {
        margin-left: 0.25rem !important;
      }

      .space-y-2> :not(template)~ :not(template) {
        margin-top: 0.5rem !important;
      }

      .space-x-2> :not(template)~ :not(template) {
        margin-left: 0.5rem !important;
      }

      .space-y-3> :not(template)~ :not(template) {
        margin-top: 1rem !important;
      }

      .space-x-3> :not(template)~ :not(template) {
        margin-left: 1rem !important;
      }

      .space-y-4> :not(template)~ :not(template) {
        margin-top: 2rem !important;
      }

      .space-x-4> :not(template)~ :not(template) {
        margin-left: 2rem !important;
      }

      .space-y-5> :not(template)~ :not(template) {
        margin-top: 4rem !important;
      }

      .space-x-5> :not(template)~ :not(template) {
        margin-left: 4rem !important;
      }

      .divide-y> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y> :not(template):not(:first-child) {
        padding-top: 1rem !important;
      }

      .divide-y> :not(template):not(:last-child) {
        padding-bottom: 1rem !important;
      }

      .divide-x> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x> :not(template):not(:first-child) {
        padding-left: 1rem !important;
      }

      .divide-x> :not(template):not(:last-child) {
        padding-right: 1rem !important;
      }

      .divide-y-0> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y-0> :not(template):not(:first-child) {
        padding-top: 0 !important;
      }

      .divide-y-0> :not(template):not(:last-child) {
        padding-bottom: 0 !important;
      }

      .divide-x-0> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x-0> :not(template):not(:first-child) {
        padding-left: 0 !important;
      }

      .divide-x-0> :not(template):not(:last-child) {
        padding-right: 0 !important;
      }

      .divide-y-1> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y-1> :not(template):not(:first-child) {
        padding-top: 0.25rem !important;
      }

      .divide-y-1> :not(template):not(:last-child) {
        padding-bottom: 0.25rem !important;
      }

      .divide-x-1> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x-1> :not(template):not(:first-child) {
        padding-left: 0.25rem !important;
      }

      .divide-x-1> :not(template):not(:last-child) {
        padding-right: 0.25rem !important;
      }

      .divide-y-2> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y-2> :not(template):not(:first-child) {
        padding-top: 0.5rem !important;
      }

      .divide-y-2> :not(template):not(:last-child) {
        padding-bottom: 0.5rem !important;
      }

      .divide-x-2> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x-2> :not(template):not(:first-child) {
        padding-left: 0.5rem !important;
      }

      .divide-x-2> :not(template):not(:last-child) {
        padding-right: 0.5rem !important;
      }

      .divide-y-3> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y-3> :not(template):not(:first-child) {
        padding-top: 1rem !important;
      }

      .divide-y-3> :not(template):not(:last-child) {
        padding-bottom: 1rem !important;
      }

      .divide-x-3> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x-3> :not(template):not(:first-child) {
        padding-left: 1rem !important;
      }

      .divide-x-3> :not(template):not(:last-child) {
        padding-right: 1rem !important;
      }

      .divide-y-4> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y-4> :not(template):not(:first-child) {
        padding-top: 2rem !important;
      }

      .divide-y-4> :not(template):not(:last-child) {
        padding-bottom: 2rem !important;
      }

      .divide-x-4> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x-4> :not(template):not(:first-child) {
        padding-left: 2rem !important;
      }

      .divide-x-4> :not(template):not(:last-child) {
        padding-right: 2rem !important;
      }

      .divide-y-5> :not(template)~ :not(template) {
        border-top: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-y-5> :not(template):not(:first-child) {
        padding-top: 4rem !important;
      }

      .divide-y-5> :not(template):not(:last-child) {
        padding-bottom: 4rem !important;
      }

      .divide-x-5> :not(template)~ :not(template) {
        border-left: 1px solid rgba(98, 105, 118, 0.16) !important;
      }

      .divide-x-5> :not(template):not(:first-child) {
        padding-left: 4rem !important;
      }

      .divide-x-5> :not(template):not(:last-child) {
        padding-right: 4rem !important;
      }

      .icon {
        width: 1.25rem;
        height: 1.25rem;
        font-size: 1.25rem;
        vertical-align: bottom;
        stroke-width: 1.5;
      }

      .icon:hover {
        text-decoration: none;
      }

      .icon-inline {
        width: 1em;
        height: 1em;
        font-size: 1.1428571em;
        vertical-align: -0.2em;
      }

      .icon-filled {
        fill: currentColor;
      }

      .icon-md {
        width: 2.5rem;
        height: 2.5rem;
        stroke-width: 1;
      }

      .icon-lg {
        width: 3.5rem;
        height: 3.5rem;
        stroke-width: 1;
      }

      .img-responsive {
        background: no-repeat center/cover;
        padding-top: 75%;
      }

      .img-responsive-1x1 {
        padding-top: 100%;
      }

      .img-responsive-4x3 {
        padding-top: calc(3 / 4 * 100%);
      }

      .img-responsive-3x4 {
        padding-top: calc(4 / 3 * 100%);
      }

      .img-responsive-16x9 {
        padding-top: calc(9 / 16 * 100%);
      }

      .img-responsive-9x16 {
        padding-top: calc(16 / 9 * 100%);
      }

      .img-responsive-21x9 {
        padding-top: calc(9 / 21 * 100%);
      }

      .img-responsive-9x21 {
        padding-top: calc(21 / 9 * 100%);
      }

      textarea[cols] {
        height: auto;
      }

      /**
    Form label
    */
      .form-label {
        display: block;
        font-weight: 500;
      }

      .form-label.required:after {
        content: "*";
        margin-left: 0.25rem;
        color: #ff3939;
      }

      .form-label-description {
        float: right;
        font-weight: 400;
        color: #626976;
      }

      /**
    Form hint
    */
      .form-hint {
        display: block;
        color: #626976;
      }

      .form-hint:last-child {
        margin-bottom: 0;
      }

      .form-hint+.form-control {
        margin-top: 0.25rem;
      }

      .form-label+.form-hint {
        margin-top: -0.25rem;
      }

      .input-group+.form-hint,
      .form-control+.form-hint,
      .form-select+.form-hint {
        margin-top: 0.5rem;
      }

      /**
    Form control
    */
      .form-control:-webkit-autofill {
        box-shadow: 0 0 0 1000px var(--tblr-body-bg) inset;
        color: var(--tblr-body-color);
      }

      .form-control:disabled,
      .form-control.disabled {
        color: #626976;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .form-control[size] {
        width: auto;
      }

      .form-control[type="number"]::-webkit-inner-spin-button {
        opacity: 1;
        cursor: pointer;
        height: calc(calc(1.4285714em + 0.875rem + 2px) - 1px);
        margin: 0 -0.75rem 0 0;
      }

      .form-control[type="number"]::-moz-inner-spin-button {
        opacity: 1;
        cursor: pointer;
        height: calc(calc(1.4285714em + 0.875rem + 2px) - 1px);
        margin: 0 -0.75rem 0 0;
      }

      .form-control-light {
        background-color: #f1f5f9;
        border-color: transparent;
      }

      .form-control-dark {
        background-color: rgba(0, 0, 0, 0.1);
        color: #ffffff;
        border-color: transparent;
      }

      .form-control-dark:focus {
        background-color: rgba(0, 0, 0, 0.1);
        box-shadow: none;
        border-color: rgba(255, 255, 255, 0.24);
      }

      .form-control-dark::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
      }

      .form-control-dark::-moz-placeholder {
        color: rgba(255, 255, 255, 0.6);
      }

      .form-control-dark:-ms-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
      }

      .form-control-dark::-ms-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
      }

      .form-control-dark::placeholder {
        color: rgba(255, 255, 255, 0.6);
      }

      .form-control-rounded {
        border-radius: 10rem;
      }

      .form-control-flush {
        padding: 0;
        background: none !important;
        border-color: transparent !important;
        resize: none;
        box-shadow: none !important;
        line-height: inherit;
      }

      .form-footer {
        margin-top: 2rem;
      }

      .form-fieldset {
        padding: 1rem;
        margin-bottom: 1rem;
        background: var(--tblr-border-color-light);
        border: 1px solid var(--tblr-border-color);
        border-radius: 4px;
      }

      /**
    Form help
    */
      .form-help {
        display: inline-flex;
        font-weight: 600;
        align-items: center;
        justify-content: center;
        width: 1.125rem;
        height: 1.125rem;
        font-size: 0.75rem;
        color: #626976;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background: #f1f5f9;
        border-radius: 100rem;
        transition: background-color 0.3s, color 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-help {
          transition: none;
        }
      }

      .form-help:hover,
      .form-help[aria-describedby] {
        color: #ffffff;
        background: #206bc4;
      }

      /**
    Input group
    */
      .input-group-link {
        font-size: 0.75rem;
      }

      .input-group-flat:focus-within {
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
        border-radius: 4px;
      }

      .input-group-flat:focus-within .form-control,
      .input-group-flat:focus-within .input-group-text {
        border-color: #90b5e2 !important;
      }

      .input-group-flat .form-control:focus {
        border-color: #d9dbde;
        box-shadow: none;
      }

      .input-group-flat .form-control:not(:last-child) {
        border-right: 0;
      }

      .input-group-flat .form-control:not(:first-child) {
        border-left: 0;
      }

      .input-group-flat .input-group-text {
        background: transparent;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {
        .input-group-flat .input-group-text {
          transition: none;
        }
      }

      .input-group-flat .input-group-text:first-child {
        padding-right: 0;
      }

      .input-group-flat .input-group-text:last-child {
        padding-left: 0;
      }

      /**
    Upload files
    */
      .form-file-button {
        margin-left: 0;
        border-left: 0;
      }

      /**
    Icon input
    */
      .input-icon {
        position: relative;
      }

      .input-icon .form-control:not(:last-child),
      .input-icon .form-select:not(:last-child) {
        padding-right: 2.5rem;
      }

      .input-icon .form-control:not(:first-child),
      .input-icon .form-select:not(:last-child) {
        padding-left: 2.5rem;
      }

      .input-icon-addon {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 2.5rem;
        color: #626976;
        pointer-events: none;
        font-size: 1.2em;
      }

      .input-icon-addon:last-child {
        right: 0;
        left: auto;
      }

      /*
    Color Input
    */
      .form-colorinput {
        position: relative;
        display: inline-block;
        margin: 0;
        line-height: 1;
        cursor: pointer;
      }

      .form-colorinput-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
      }

      .form-colorinput-color {
        display: block;
        width: 1.5rem;
        height: 1.5rem;
        color: #ffffff;
        border: 1px solid rgba(98, 105, 118, 0.16);
        border-radius: 3px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      }

      .form-colorinput-color:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: "";
        background: no-repeat center center/1rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8.5l2.5 2.5l5.5 -5.5'/%3e%3c/svg%3e");
        opacity: 0;
        transition: opacity 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-colorinput-color:before {
          transition: none;
        }
      }

      .form-colorinput-input:checked~.form-colorinput-color:before {
        opacity: 1;
      }

      .form-colorinput-input:focus~.form-colorinput-color {
        border-color: #206bc4;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-colorinput-light .form-colorinput-color:before {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'%3e%3cpath fill='none' stroke='%231e293b' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8.5l2.5 2.5l5.5 -5.5'/%3e%3c/svg%3e");
      }

      /**
    Image check
    */
      .form-imagecheck {
        position: relative;
        margin: 0;
        cursor: pointer;
      }

      .form-imagecheck-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
      }

      .form-imagecheck-figure {
        position: relative;
        display: block;
        margin: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid var(--tblr-border-color);
        border-radius: 3px;
      }

      .form-imagecheck-input:focus~.form-imagecheck-figure {
        border-color: #206bc4;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      .form-imagecheck-input:checked~.form-imagecheck-figure {
        border-color: #206bc4;
      }

      .form-imagecheck-figure:before {
        position: absolute;
        top: 0.25rem;
        left: 0.25rem;
        z-index: 1;
        display: block;
        width: 1rem;
        height: 1rem;
        color: #ffffff;
        pointer-events: none;
        content: "";
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background: #ffffff;
        border: 1px solid #e6e7e9;
        border-radius: 3px;
        transition: opacity 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-imagecheck-figure:before {
          transition: none;
        }
      }

      .form-imagecheck-input:checked~.form-imagecheck-figure:before {
        background-color: #206bc4;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8.5l2.5 2.5l5.5 -5.5'/%3e%3c/svg%3e");
        background-repeat: repeat;
        background-position: center;
        background-size: 1rem;
        border-color: rgba(98, 105, 118, 0.24);
      }

      .form-imagecheck-image {
        max-width: 100%;
        display: block;
        opacity: 0.64;
        transition: opacity 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-imagecheck-image {
          transition: none;
        }
      }

      .form-imagecheck-image:first-child {
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
      }

      .form-imagecheck-image:last-child {
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px;
      }

      .form-imagecheck:hover .form-imagecheck-image,
      .form-imagecheck-input:focus~.form-imagecheck-figure .form-imagecheck-image,
      .form-imagecheck-input:checked~.form-imagecheck-figure .form-imagecheck-image {
        opacity: 1;
      }

      .form-imagecheck-caption {
        padding: 0.25rem;
        font-size: 0.765625rem;
        color: #626976;
        text-align: center;
        transition: color 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-imagecheck-caption {
          transition: none;
        }
      }

      .form-imagecheck:hover .form-imagecheck-caption,
      .form-imagecheck-input:focus~.form-imagecheck-figure .form-imagecheck-caption,
      .form-imagecheck-input:checked~.form-imagecheck-figure .form-imagecheck-caption {
        color: #1e293b;
      }

      /*
    Select group
    */
      .form-selectgroup {
        display: inline-flex;
        margin: 0 -0.5rem -0.5rem 0;
        flex-wrap: wrap;
      }

      .form-selectgroup .form-selectgroup-item {
        margin: 0 0.5rem 0.5rem 0;
      }

      .form-selectgroup-vertical {
        flex-direction: column;
      }

      .form-selectgroup-item {
        display: block;
        position: relative;
      }

      .form-selectgroup-input {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        opacity: 0;
      }

      .form-selectgroup-label {
        position: relative;
        display: block;
        min-width: calc(1.4285714em + 0.875rem + 2px);
        margin: 0;
        padding: 0.4375rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.4285714;
        color: #626976;
        background: #ffffff;
        text-align: center;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid #d9dbde;
        border-radius: 3px;
        transition: border-color 0.3s, background 0.3s, color 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-selectgroup-label {
          transition: none;
        }
      }

      .form-selectgroup-label .icon:only-child {
        margin: 0 -0.25rem;
      }

      .form-selectgroup-label:hover {
        color: #1e293b;
      }

      .form-selectgroup-check {
        display: inline-block;
        width: 1rem;
        height: 1rem;
        border: 1px solid rgba(98, 105, 118, 0.24);
        vertical-align: middle;
      }

      .form-selectgroup-input[type="checkbox"]+.form-selectgroup-label .form-selectgroup-check {
        border-radius: 4px;
      }

      .form-selectgroup-input[type="radio"]+.form-selectgroup-label .form-selectgroup-check {
        border-radius: 50%;
      }

      .form-selectgroup-input:checked+.form-selectgroup-label .form-selectgroup-check {
        background-color: #206bc4;
        background-repeat: repeat;
        background-position: center;
        background-size: 1rem;
        border-color: rgba(98, 105, 118, 0.24);
      }

      .form-selectgroup-input[type="checkbox"]:checked+.form-selectgroup-label .form-selectgroup-check {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8.5l2.5 2.5l5.5 -5.5'/%3e%3c/svg%3e");
      }

      .form-selectgroup-input[type="radio"]:checked+.form-selectgroup-label .form-selectgroup-check {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3ccircle r='3' fill='%23ffffff' cx='8' cy='8' /%3e%3c/svg%3e");
      }

      .form-selectgroup-check-floated {
        position: absolute;
        top: 0.4375rem;
        right: 0.4375rem;
      }

      .form-selectgroup-input:checked+.form-selectgroup-label {
        z-index: 1;
        color: #206bc4;
        background: rgba(32, 107, 196, 0.04);
        border-color: #206bc4;
      }

      .form-selectgroup-input:focus+.form-selectgroup-label {
        z-index: 2;
        color: #206bc4;
        border-color: #206bc4;
        box-shadow: 0 0 0 0.25rem rgba(32, 107, 196, 0.25);
      }

      /**
    Alternate version of form select group
    */
      .form-selectgroup-boxes .form-selectgroup-label {
        text-align: left;
        padding: 1rem 1rem;
        color: inherit;
      }

      .form-selectgroup-boxes .form-selectgroup-input:checked+.form-selectgroup-label {
        color: inherit;
      }

      .form-selectgroup-boxes .form-selectgroup-input:checked+.form-selectgroup-label .form-selectgroup-title {
        color: #206bc4;
      }

      .form-selectgroup-boxes .form-selectgroup-input:checked+.form-selectgroup-label .form-selectgroup-label-content {
        opacity: 1;
      }

      /**
    Select group
    */
      .form-selectgroup-pills {
        flex-wrap: wrap;
        align-items: flex-start;
      }

      .form-selectgroup-pills .form-selectgroup-item {
        flex-grow: 0;
      }

      .form-selectgroup-pills .form-selectgroup-label {
        border-radius: 50px;
      }

      /**
    Bootstrap color input
    */
      .form-control-color::-webkit-color-swatch {
        border: none;
      }

      /**
    Remove the cancel buttons in Chrome and Safari on macOS.
    */
      [type="search"]::-webkit-search-cancel-button {
        -webkit-appearance: none;
      }

      /*
    Form check
    */
      .form-check {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .form-check.form-check-highlight .form-check-input:not(:checked)~.form-check-label {
        opacity: 0.7;
      }

      .form-check-input {
        background-size: 1rem;
        margin-top: 0.125rem;
      }

      .form-switch .form-check-input {
        transition: background-color 0.3s, background-position 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .form-switch .form-check-input {
          transition: none;
        }
      }

      .form-check-label {
        display: block;
      }

      .form-check-label.required:after {
        content: "*";
        margin-left: 0.25rem;
        color: #ff3939;
      }

      .form-check-description {
        display: block;
        color: #626976;
        font-size: 0.75rem;
        margin-top: 0.25rem;
      }

      .form-check-single {
        margin: 0;
      }

      .form-check-single .form-check-input {
        margin: 0;
      }

      /*
    Form switch
    */
      .form-switch .form-check-input {
        height: 1.125rem;
        margin-top: 0.0625rem;
      }

      .form-switch-lg .form-check-input {
        height: 1.5rem;
        width: 2.75rem;
        background-size: 1.5rem;
      }

      .form-control.is-valid-lite,
      .form-select.is-valid-lite,
      .form-control.is-invalid-lite,
      .form-select.is-invalid-lite {
        border-color: var(--tblr-border-color);
      }

      .legend {
        display: inline-block;
        background: var(--tblr-border-color-light);
        width: 0.75em;
        height: 0.75em;
        border-radius: 4px;
      }

      .list-group {
        margin-left: 0;
        margin-right: 0;
      }

      .list-group-header {
        background: #f8fafc;
        padding: 0.5rem 1rem;
        font-size: 0.75rem;
        font-weight: 500;
        line-height: 1;
        text-transform: uppercase;
        color: #626976;
        border-bottom: 1px solid var(--tblr-border-color);
      }

      .list-group-flush>.list-group-header:last-child {
        border-bottom-width: 0;
      }

      .list-bordered .list-item {
        border-top: 1px solid #e6e7e9;
        margin-top: -1px;
      }

      .list-bordered .list-item:first-child {
        border-top: none;
      }

      .list-group-hoverable .list-group-item-actions {
        opacity: 0;
        transition: opacity 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .list-group-hoverable .list-group-item-actions {
          transition: none;
        }
      }

      .list-group-hoverable .list-group-item:hover .list-group-item-actions,
      .list-group-hoverable .list-group-item-actions.show {
        opacity: 1;
      }

      .list-timeline {
        position: relative;
        padding: 0;
        margin: 0;
        list-style: none;
      }

      .list-timeline>li {
        position: relative;
        margin-bottom: 1.5rem;
      }

      .list-timeline>li:last-child {
        margin-bottom: 0;
      }

      .list-timeline-time {
        float: right;
        margin-left: 1rem;
        color: #626976;
      }

      .list-timeline-icon {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        color: #ffffff;
        text-align: center;
        background: #626976;
        border-radius: 100rem;
      }

      .list-timeline-icon .icon {
        width: 1rem;
        height: 1rem;
        font-size: 1rem;
      }

      .list-timeline-title {
        margin: 0;
        font-weight: 600;
      }

      .list-timeline-content {
        margin-left: 3.5rem;
      }

      @media screen and (min-width: 768px) {
        .list-timeline:not(.list-timeline-simple):before {
          position: absolute;
          top: 0;
          bottom: 0;
          left: calc(7.5rem + 2px);
          z-index: 1;
          display: block;
          width: 4px;
          content: "";
          background-color: #f8fafc;
        }

        .list-timeline:not(.list-timeline-simple)>li {
          z-index: 2;
          min-height: 40px;
        }

        .list-timeline:not(.list-timeline-simple) .list-timeline-time {
          position: absolute;
          top: 0.5rem;
          left: 0;
          width: 5.5rem;
          margin: 0;
          text-align: right;
        }

        .list-timeline:not(.list-timeline-simple) .list-timeline-icon {
          top: 0;
          left: 6.5rem;
        }

        .list-timeline:not(.list-timeline-simple) .list-timeline-content {
          padding: 0.625rem 0 0 10rem;
          margin: 0;
        }
      }

      .list-group-transparent {
        margin: 0 -1rem;
      }

      .list-group-transparent .list-group-item {
        background: none;
        border: 0;
        border-radius: 3px;
      }

      .list-group-transparent .list-group-item .icon {
        color: #626976;
      }

      .list-group-transparent .list-group-item.active {
        font-weight: 600;
        color: inherit;
        background: rgba(32, 107, 196, 0.06);
      }

      .list-group-transparent .list-group-item.active .icon {
        color: inherit;
      }

      .list-separated-item {
        padding: 1rem 0;
      }

      .list-separated-item:first-child {
        padding-top: 0;
      }

      .list-separated-item:last-child {
        padding-bottom: 0;
      }

      .list-separated-item+.list-separated-item {
        border-top: 1px solid #e6e7e9;
      }

      /**
    Inline list
    */
      .list-inline-item:not(:last-child) {
        margin-right: auto;
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
      }

      .list-inline-dots .list-inline-item+.list-inline-item:before {
        content: " · ";
        -webkit-margin-end: 0.5rem;
        margin-inline-end: 0.5rem;
      }

      @-webkit-keyframes loader {
        from {
          transform: rotate(0deg);
        }

        to {
          transform: rotate(360deg);
        }
      }

      @keyframes loader {
        from {
          transform: rotate(0deg);
        }

        to {
          transform: rotate(360deg);
        }
      }

      .loader {
        position: relative;
        display: block;
        width: 2.5rem;
        height: 2.5rem;
        color: #206bc4;
        vertical-align: middle;
      }

      .loader:after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: "";
        border: 1px solid;
        border-color: transparent;
        border-top-color: currentColor;
        border-left-color: currentColor;
        border-radius: 100rem;
        -webkit-animation: loader 0.6s linear;
        animation: loader 0.6s linear;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
      }

      /**
    Dimmer
    */
      .dimmer {
        position: relative;
      }

      .dimmer .loader {
        position: absolute;
        top: 50%;
        right: 0;
        left: 0;
        display: none;
        margin: 0 auto;
        transform: translateY(-50%);
      }

      .dimmer.active .loader {
        display: block;
      }

      .dimmer.active .dimmer-content {
        pointer-events: none;
        opacity: 0.1;
      }

      @-webkit-keyframes animated-dots {
        0% {
          transform: translateX(-100%);
        }
      }

      @keyframes animated-dots {
        0% {
          transform: translateX(-100%);
        }
      }

      .animated-dots {
        display: inline-block;
        overflow: hidden;
        vertical-align: bottom;
      }

      .animated-dots:after {
        display: inline-block;
        content: "...";
        -webkit-animation: animated-dots 1.2s steps(4, jump-none) infinite;
        animation: animated-dots 1.2s steps(4, jump-none) infinite;
      }

      .modal-content .btn-close {
        position: absolute;
        top: 0;
        right: 0;
        width: 3.5rem;
        height: 3.5rem;
        margin: 0;
        padding: 0;
        z-index: 10;
      }

      .modal-body::-webkit-scrollbar {
        width: 6px;
        height: 6px;
        -webkit-transition: background 0.3s;
        transition: background 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .modal-body::-webkit-scrollbar {
          -webkit-transition: none;
          transition: none;
        }
      }

      .modal-body::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: rgba(var(--tblr-body-color-rgb), 0.16);
      }

      .modal-body::-webkit-scrollbar-track {
        background: rgba(var(--tblr-body-color-rgb), 0.06);
      }

      .modal-body:hover::-webkit-scrollbar-thumb {
        background: rgba(var(--tblr-body-color-rgb), 0.32);
      }

      .modal-body::-webkit-scrollbar-corner {
        background: transparent;
      }

      .modal-body .modal-title {
        margin-bottom: 1rem;
      }

      .modal-body+.modal-body {
        border-top: 1px solid var(--tblr-border-color);
      }

      .modal-status {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: #626976;
        border-radius: 4px 4px 0 0;
      }

      .modal-header {
        align-items: center;
        min-height: 3.5rem;
        background: #ffffff;
        padding: 0 0.5rem 0 1.5rem;
      }

      .modal-title {
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.4285714;
      }

      .modal-footer {
        padding-top: 0;
        padding-bottom: 0.75rem;
      }

      .modal-blur {
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
      }

      .modal-full-width {
        max-width: none;
        margin: 0.5rem 0.5rem;
      }

      .nav {
        margin: 0;
      }

      .nav-vertical,
      .nav-vertical .nav {
        flex-direction: column;
        flex-wrap: nowrap;
      }

      .nav-vertical .nav {
        margin-left: 1.25rem;
        border-left: 1px solid var(--tblr-border-color);
        padding-left: 0.5rem;
      }

      .nav-vertical .nav-link.active,
      .nav-vertical .nav-item.show .nav-link {
        font-weight: 600;
      }

      .nav-vertical.nav-pills {
        margin: 0 -0.75rem;
      }

      .nav-bordered {
        border-bottom: 1px solid #e6e7e9;
      }

      .nav-bordered .nav-item+.nav-item {
        margin-left: 1.25rem;
      }

      .nav-bordered .nav-link {
        padding-left: 0;
        padding-right: 0;
        margin: 0 0 -1px;
        border: 0;
        border-bottom: 2px solid transparent;
      }

      .nav-bordered .nav-link.active,
      .nav-bordered .nav-item.show .nav-link {
        color: #206bc4;
        border-color: #206bc4;
      }

      .nav-tabs-alt .nav-link {
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
      }

      .nav-link {
        display: flex;
        transition: color 0.3s;
        align-items: center;
      }

      @media (prefers-reduced-motion: reduce) {
        .nav-link {
          transition: none;
        }
      }

      .nav-link-toggle {
        margin-left: auto;
        padding: 0 0.25rem;
        transition: transform 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {
        .nav-link-toggle {
          transition: none;
        }
      }

      .nav-link-toggle:after {
        content: "";
        display: inline-block;
        vertical-align: 0.306em;
        width: 0.36em;
        height: 0.36em;
        border-bottom: 1px solid;
        border-left: 1px solid;
        margin-right: 0.1em;
        margin-left: 0.4em;
        transform: rotate(-45deg);
      }

      .nav-link-toggle:after {
        margin: 0;
      }

      .nav-link[aria-expanded="true"] .nav-link-toggle {
        transform: rotate(180deg);
      }

      .nav-link-icon {
        width: 1.5rem;
        height: 1.25rem;
        margin-right: 0.25rem;
        opacity: 0.7;
      }

      .nav-link-icon svg {
        display: block;
        height: 100%;
      }

      .stars {
        display: inline-flex;
        color: #94a3b8;
        font-size: 0.75rem;
      }

      .stars .star:not(:first-child) {
        margin-left: 0.25rem;
      }

      .pagination {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .page-link {
        min-width: 1.75rem;
        border-radius: 4px;
      }

      .page-link:hover {
        background: transparent;
      }

      .page-item {
        text-align: center;
      }

      .page-item.page-prev,
      .page-item.page-next {
        flex: 0 0 50%;
        text-align: left;
      }

      .page-item.page-next {
        margin-left: auto;
        text-align: right;
      }

      .page-item-subtitle {
        margin-bottom: 2px;
        font-size: 12px;
        color: #626976;
        text-transform: uppercase;
      }

      .page-item.disabled .page-item-subtitle {
        color: rgba(98, 105, 118, 0.5);
      }

      .page-item-title {
        font-size: 1rem;
        font-weight: 400;
        color: #1e293b;
      }

      .page-link:hover .page-item-title {
        color: #206bc4;
      }

      .page-item.disabled .page-item-title {
        color: rgba(98, 105, 118, 0.5);
      }

      @-webkit-keyframes progress-indeterminate {
        0% {
          right: 100%;
          left: -35%;
        }

        100%,
        60% {
          right: -90%;
          left: 100%;
        }
      }

      @keyframes progress-indeterminate {
        0% {
          right: 100%;
          left: -35%;
        }

        100%,
        60% {
          right: -90%;
          left: 100%;
        }
      }

      .progress {
        position: relative;
        width: 100%;
        line-height: 0.5rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: var(--tblr-border-color-light);
      }

      .progress::-webkit-progress-bar {
        background: #f1f5f9;
      }

      .progress::-webkit-progress-value {
        background-color: #206bc4;
      }

      .progress::-moz-progress-bar {
        background-color: #206bc4;
      }

      .progress::-ms-fill {
        background-color: #206bc4;
        border: none;
      }

      .progress-sm {
        height: 0.25rem;
      }

      .progress-bar {
        height: 100%;
      }

      .progress-bar-indeterminate:after,
      .progress-bar-indeterminate:before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        content: "";
        background-color: inherit;
        will-change: left, right;
      }

      .progress-bar-indeterminate:before {
        -webkit-animation: progress-indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
        animation: progress-indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
      }

      .progress-separated .progress-bar {
        border-right: 2px solid var(--tblr-card-bg, #ffffff);
      }

      .ribbon {
        position: absolute;
        top: 0.75rem;
        right: -0.25rem;
        z-index: 1;
        padding: 0.25rem 0.75rem;
        font-size: 0.825rem;
        font-weight: 600;
        line-height: 1.5rem;
        color: #ffffff;
        text-align: center;
        text-transform: uppercase;
        background: #206bc4;
        border-color: #206bc4;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 1rem;
        min-width: 2rem;
      }

      .ribbon:before {
        position: absolute;
        right: 0;
        bottom: 100%;
        width: 0;
        height: 0;
        content: "";
        filter: brightness(70%);
        border: 0.125rem solid;
        border-color: inherit;
        border-top-color: transparent;
        border-right-color: transparent;
      }

      .ribbon.bg-blue {
        border-color: #206bc4;
      }

      .ribbon.bg-blue-lt {
        border-color: #3478c9 !important;
      }

      .ribbon.bg-azure {
        border-color: #4299e1;
      }

      .ribbon.bg-azure-lt {
        border-color: #53a2e4 !important;
      }

      .ribbon.bg-indigo {
        border-color: #4263eb;
      }

      .ribbon.bg-indigo-lt {
        border-color: #5371ed !important;
      }

      .ribbon.bg-purple {
        border-color: #ae3ec9;
      }

      .ribbon.bg-purple-lt {
        border-color: #b54fce !important;
      }

      .ribbon.bg-pink {
        border-color: #d6336c;
      }

      .ribbon.bg-pink-lt {
        border-color: #da4579 !important;
      }

      .ribbon.bg-red {
        border-color: #ff3939;
      }

      .ribbon.bg-red-lt {
        border-color: #da4b4b !important;
      }

      .ribbon.bg-reha {
        border-color: #12dd35;
      }

      .ribbon.bg-reha-lt {
        border-color: #4fcd06 !important;
      }


      .ribbon.bg-orange {
        border-color: #f76707;
      }

      .ribbon.bg-orange-lt {
        border-color: #f8751d !important;
      }

      .ribbon.bg-yellow {
        border-color: #f59f00;
      }

      .ribbon.bg-yellow-lt {
        border-color: #f6a817 !important;
      }

      .ribbon.bg-lime {
        border-color: #74b816;
      }

      .ribbon.bg-lime-lt {
        border-color: #81be2b !important;
      }

      .ribbon.bg-green {
        border-color: #018016;
      }

      .ribbon.bg-green-lt {
        border-color: #42ba55 !important;
      }

      .ribbon.bg-teal {
        border-color: #0ca678;
      }

      .ribbon.bg-teal-lt {
        border-color: #22ae84 !important;
      }

      .ribbon.bg-cyan {
        border-color: #17a2b8;
      }

      .ribbon.bg-cyan-lt {
        border-color: #2caabe !important;
      }

      .ribbon .icon {
        width: 1.25rem;
        height: 1.25rem;
        font-size: 1.25rem;
      }

      .ribbon-top {
        top: -0.25rem;
        right: 0.75rem;
        width: 2rem;
        padding: 0.5rem 0;
      }

      .ribbon-top:before {
        top: 0;
        right: 100%;
        bottom: auto;
        border-color: inherit;
        border-top-color: transparent;
        border-left-color: transparent;
      }

      .ribbon-top.ribbon-start {
        right: auto;
        left: 0.75rem;
      }

      .ribbon-top.ribbon-start:before {
        top: 0;
        right: 100%;
        left: auto;
      }

      .ribbon-start {
        right: auto;
        left: -0.25rem;
      }

      .ribbon-start:before {
        top: auto;
        bottom: 100%;
        left: 0;
        border-color: inherit;
        border-top-color: transparent;
        border-left-color: transparent;
      }

      .ribbon-bottom {
        top: auto;
        bottom: 0.75rem;
      }

      .ribbon-bookmark {
        padding-left: 0.25rem;
      }

      .ribbon-bookmark:after {
        position: absolute;
        top: 0;
        right: 100%;
        display: block;
        width: 0;
        height: 0;
        content: "";
        border: 1rem solid;
        border-color: inherit;
        border-right-width: 0;
        border-left-color: transparent;
        border-left-width: 0.5rem;
      }

      .ribbon-bookmark.ribbon-left {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .ribbon-bookmark.ribbon-left:after {
        right: auto;
        left: 100%;
        border-right-color: transparent;
        border-right-width: 0.5rem;
        border-left-width: 0;
      }

      .ribbon-bookmark.ribbon-top {
        padding-right: 0;
        padding-bottom: 0.25rem;
        padding-left: 0;
      }

      .ribbon-bookmark.ribbon-top:after {
        top: 100%;
        right: 0;
        left: 0;
        border-color: inherit;
        border-width: 1rem;
        border-top-width: 0;
        border-bottom-color: transparent;
        border-bottom-width: 0.5rem;
      }

      /**
    Markdown
    */
      .markdown {
        line-height: 1.7142857;
      }

      .markdown> :first-child {
        margin-top: 0;
      }

      .markdown> :last-child,
      .markdown> :last-child .highlight {
        margin-bottom: 0;
      }

      @media (min-width: 768px) {

        .markdown>hr,
        .markdown>.hr {
          margin-top: 3em;
          margin-bottom: 3em;
        }
      }

      .markdown>h1,
      .markdown>.h1,
      .markdown>h2,
      .markdown>.h2,
      .markdown>h3,
      .markdown>.h3,
      .markdown>h4,
      .markdown>.h4,
      .markdown>h5,
      .markdown>.h5,
      .markdown>h6,
      .markdown>.h6 {
        font-weight: 600;
      }

      .markdown>blockquote {
        font-size: 1rem;
        margin: 1.5rem 0;
        padding: 0.5rem 1.5rem;
      }

      .markdown>img {
        border-radius: 4px;
      }

      @-webkit-keyframes skeleton-load {
        from {
          background-position: 0 0;
        }

        to {
          background-position: 100vw 0;
        }
      }

      @keyframes skeleton-load {
        from {
          background-position: 0 0;
        }

        to {
          background-position: 100vw 0;
        }
      }

      .skeleton-avatar,
      .skeleton-line:after,
      .skeleton-heading:after,
      .skeleton-image {
        background-image: linear-gradient(to right,
            #f4f6f8 0,
            #e2e5e9 40%,
            #f4f6f8 80%);
        background-size: 50vw 100%;
        background-attachment: fixed;
        -webkit-animation: skeleton-load 2s linear infinite;
        animation: skeleton-load 2s linear infinite;
      }

      .skeleton-avatar {
        display: inline-block;
        vertical-align: bottom;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 100rem;
      }

      .skeleton-avatar-xs {
        width: 1.25rem;
        height: 1.25rem;
      }

      .skeleton-avatar-sm {
        width: 2rem;
        height: 2rem;
      }

      .skeleton-avatar-md {
        width: 3.75rem;
        height: 3.75rem;
      }

      .skeleton-avatar-lg {
        width: 5rem;
        height: 5rem;
      }

      .skeleton-avatar-xl {
        width: 7rem;
        height: 7rem;
      }

      .skeleton-avatar-2xl {
        width: 11rem;
        height: 11rem;
      }

      .skeleton-line,
      .skeleton-heading {
        padding: 0.375rem 0;
        display: block;
        line-height: 0;
        height: 1.25rem;
      }

      .skeleton-line:after,
      .skeleton-heading:after {
        content: "";
        display: inline-block;
        height: 100%;
        border-radius: 4px;
        width: 100%;
      }

      .skeleton-line:nth-child(5n + 2):after,
      .skeleton-heading:nth-child(5n + 2):after {
        width: 80%;
      }

      .skeleton-line:nth-child(5n + 3):after,
      .skeleton-heading:nth-child(5n + 3):after {
        width: 90%;
      }

      .skeleton-line:nth-child(5n + 4):after,
      .skeleton-heading:nth-child(5n + 4):after {
        width: 95%;
      }

      .skeleton-line:nth-child(5n + 5):after,
      .skeleton-heading:nth-child(5n + 5):after {
        width: 85%;
      }

      .skeleton-line-full:after {
        width: 100% !important;
      }

      .skeleton-heading {
        height: 1.5rem;
        margin-bottom: 0.5rem;
      }

      .skeleton-heading:after {
        width: 70%;
      }

      .skeleton-image:after {
        content: "";
        padding-top: 56.25%;
        display: block;
      }

      .card-img-top .skeleton-image,
      .card-img-bottom .skeleton-image,
      .card-img-left .skeleton-image,
      .card-img-right .skeleton-image {
        border-radius: inherit;
      }

      .steps {
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
        padding: 0;
        margin: 2rem 0;
        list-style: none;
      }

      .steps .step-item {
        padding-top: calc(0.5rem + 4px);
      }

      .steps .step-item:after {
        top: calc(0.25rem + 2px);
        height: 2px;
      }

      .steps .step-item:before {
        width: 0.5rem;
        height: 0.5rem;
      }

      .steps .step-item:after,
      .steps .step-item:before {
        color: #ffffff;
        background: #206bc4;
      }

      .steps .step-item.active:before {
        color: inherit;
        border-color: #206bc4;
      }

      .steps-blue .step-item:after,
      .steps-blue .step-item:before {
        color: #ffffff;
        background: #206bc4;
      }

      .steps-blue .step-item.active:before {
        color: inherit;
        border-color: #206bc4;
      }

      .steps-azure .step-item:after,
      .steps-azure .step-item:before {
        color: #ffffff;
        background: #4299e1;
      }

      .steps-azure .step-item.active:before {
        color: inherit;
        border-color: #4299e1;
      }

      .steps-indigo .step-item:after,
      .steps-indigo .step-item:before {
        color: #ffffff;
        background: #4263eb;
      }

      .steps-indigo .step-item.active:before {
        color: inherit;
        border-color: #4263eb;
      }

      .steps-purple .step-item:after,
      .steps-purple .step-item:before {
        color: #ffffff;
        background: #ae3ec9;
      }

      .steps-purple .step-item.active:before {
        color: inherit;
        border-color: #ae3ec9;
      }

      .steps-pink .step-item:after,
      .steps-pink .step-item:before {
        color: #ffffff;
        background: #d6336c;
      }

      .steps-pink .step-item.active:before {
        color: inherit;
        border-color: #d6336c;
      }

      .steps-red .step-item:after,
      .steps-red .step-item:before {
        color: #ffffff;
        background: #ff3939;
      }

      .steps-red .step-item.active:before {
        color: inherit;
        border-color: #ff3939;
      }

      .steps-reha .step-item:after,
      .steps-reha .step-item:before {
        color: #ffffff;
        background: #4fcd06;
      }

      .steps-reha .step-item.active:before {
        color: inherit;
        border-color: #4fcd06;
      }

      .steps-orange .step-item:after,
      .steps-orange .step-item:before {
        color: #ffffff;
        background: #f76707;
      }

      .steps-orange .step-item.active:before {
        color: inherit;
        border-color: #f76707;
      }

      .steps-yellow .step-item:after,
      .steps-yellow .step-item:before {
        color: #ffffff;
        background: #f59f00;
      }

      .steps-yellow .step-item.active:before {
        color: inherit;
        border-color: #f59f00;
      }

      .steps-lime .step-item:after,
      .steps-lime .step-item:before {
        color: #ffffff;
        background: #74b816;
      }

      .steps-lime .step-item.active:before {
        color: inherit;
        border-color: #74b816;
      }

      .steps-green .step-item:after,
      .steps-green .step-item:before {
        color: #ffffff;
        background: #018016;
      }

      .steps-green .step-item.active:before {
        color: inherit;
        border-color: #018016;
      }

      .steps-teal .step-item:after,
      .steps-teal .step-item:before {
        color: #ffffff;
        background: #0ca678;
      }

      .steps-teal .step-item.active:before {
        color: inherit;
        border-color: #0ca678;
      }

      .steps-cyan .step-item:after,
      .steps-cyan .step-item:before {
        color: #ffffff;
        background: #17a2b8;
      }

      .steps-cyan .step-item.active:before {
        color: inherit;
        border-color: #17a2b8;
      }

      .step-item {
        position: relative;
        flex: 1 1 0;
        min-height: 1rem;
        margin-top: 0;
        color: inherit;
        text-align: center;
        cursor: default;
      }

      a.step-item {
        cursor: pointer;
      }

      a.step-item:hover {
        color: inherit;
      }

      .step-item:not(:first-child):after {
        position: absolute;
        left: -50%;
        width: 100%;
        content: "";
        transform: translateY(-50%);
      }

      .step-item:before {
        position: absolute;
        top: 0;
        left: 50%;
        z-index: 1;
        box-sizing: content-box;
        display: block;
        content: "";
        border: 2px solid #ffffff;
        border-radius: 100rem;
        transform: translateX(-50%);
      }

      .step-item.active {
        font-weight: 600;
      }

      .step-item.active:before {
        background: #ffffff;
      }

      .step-item.active~.step-item {
        color: #626976;
      }

      .step-item.active~.step-item:after,
      .step-item.active~.step-item:before {
        background: #f3f5f5;
      }

      .step-item.active~.step-item:before {
        color: #626976 !important;
      }

      .steps-counter {
        counter-reset: steps;
      }

      .steps-counter .step-item {
        padding-top: calc(1.5rem + 4px);
      }

      .steps-counter .step-item:after {
        top: calc(0.75rem + 2px);
        height: 2px;
      }

      .steps-counter .step-item:before {
        width: 1.5rem;
        height: 1.5rem;
      }

      .steps-counter .step-item {
        counter-increment: steps;
      }

      .steps-counter .step-item:before {
        font-size: 0.75rem;
        line-height: 1.5rem;
        content: counter(steps);
      }

      .steps-counter .step-item.active~.step-item:before {
        background: #ffffff;
      }

      .switch-icon {
        display: inline-block;
        line-height: 1;
        border: 0;
        padding: 0;
        background: transparent;
        width: 1.25rem;
        height: 1.25rem;
        position: relative;
        cursor: pointer;
      }

      .switch-icon.disabled {
        pointer-events: none;
        opacity: 0.65;
      }

      .switch-icon:focus {
        outline: none;
      }

      .switch-icon svg {
        display: block;
        width: 100%;
        height: 100%;
      }

      .switch-icon .switch-icon-a,
      .switch-icon .switch-icon-b {
        display: block;
        width: 100%;
        height: 100%;
      }

      .switch-icon .switch-icon-a {
        opacity: 1;
      }

      .switch-icon .switch-icon-b {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
      }

      .switch-icon.active .switch-icon-a {
        opacity: 0;
      }

      .switch-icon.active .switch-icon-b {
        opacity: 1;
      }

      .switch-icon-fade .switch-icon-a,
      .switch-icon-fade .switch-icon-b {
        transition: opacity 0.5s;
      }

      @media (prefers-reduced-motion: reduce) {

        .switch-icon-fade .switch-icon-a,
        .switch-icon-fade .switch-icon-b {
          transition: none;
        }
      }

      .switch-icon-scale .switch-icon-a,
      .switch-icon-scale .switch-icon-b {
        transition: opacity 0.5s, transform 0s 0.5s;
      }

      @media (prefers-reduced-motion: reduce) {

        .switch-icon-scale .switch-icon-a,
        .switch-icon-scale .switch-icon-b {
          transition: none;
        }
      }

      .switch-icon-scale .switch-icon-b {
        transform: scale(1.5);
      }

      .switch-icon-scale.active .switch-icon-a,
      .switch-icon-scale.active .switch-icon-b {
        transition: opacity 0s, transform 0.5s;
      }

      @media (prefers-reduced-motion: reduce) {

        .switch-icon-scale.active .switch-icon-a,
        .switch-icon-scale.active .switch-icon-b {
          transition: none;
        }
      }

      .switch-icon-scale.active .switch-icon-b {
        transform: scale(1);
      }

      .switch-icon-flip {
        perspective: 10em;
      }

      .switch-icon-flip .switch-icon-a,
      .switch-icon-flip .switch-icon-b {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        transition: opacity 0s 0.2s, transform 0.4s ease-in-out;
      }

      @media (prefers-reduced-motion: reduce) {

        .switch-icon-flip .switch-icon-a,
        .switch-icon-flip .switch-icon-b {
          transition: none;
        }
      }

      .switch-icon-flip .switch-icon-a {
        opacity: 1;
        transform: rotateY(0deg);
      }

      .switch-icon-flip .switch-icon-b {
        opacity: 1;
        transform: rotateY(-180deg);
      }

      .switch-icon-flip.active .switch-icon-a {
        opacity: 1;
        transform: rotateY(180deg);
      }

      .switch-icon-flip.active .switch-icon-b {
        opacity: 1;
        transform: rotateY(0deg);
      }

      .switch-icon-slide-up,
      .switch-icon-slide-left,
      .switch-icon-slide-right,
      .switch-icon-slide-down {
        overflow: hidden;
      }

      .switch-icon-slide-up .switch-icon-a,
      .switch-icon-slide-up .switch-icon-b,
      .switch-icon-slide-left .switch-icon-a,
      .switch-icon-slide-left .switch-icon-b,
      .switch-icon-slide-right .switch-icon-a,
      .switch-icon-slide-right .switch-icon-b,
      .switch-icon-slide-down .switch-icon-a,
      .switch-icon-slide-down .switch-icon-b {
        transition: opacity 0.3s, transform 0.3s;
      }

      @media (prefers-reduced-motion: reduce) {

        .switch-icon-slide-up .switch-icon-a,
        .switch-icon-slide-up .switch-icon-b,
        .switch-icon-slide-left .switch-icon-a,
        .switch-icon-slide-left .switch-icon-b,
        .switch-icon-slide-right .switch-icon-a,
        .switch-icon-slide-right .switch-icon-b,
        .switch-icon-slide-down .switch-icon-a,
        .switch-icon-slide-down .switch-icon-b {
          transition: none;
        }
      }

      .switch-icon-slide-up .switch-icon-a,
      .switch-icon-slide-left .switch-icon-a,
      .switch-icon-slide-right .switch-icon-a,
      .switch-icon-slide-down .switch-icon-a {
        transform: translateY(0);
      }

      .switch-icon-slide-up .switch-icon-b,
      .switch-icon-slide-left .switch-icon-b,
      .switch-icon-slide-right .switch-icon-b,
      .switch-icon-slide-down .switch-icon-b {
        transform: translateY(100%);
      }

      .switch-icon-slide-up.active .switch-icon-a,
      .switch-icon-slide-left.active .switch-icon-a,
      .switch-icon-slide-right.active .switch-icon-a,
      .switch-icon-slide-down.active .switch-icon-a {
        transform: translateY(-100%);
      }

      .switch-icon-slide-up.active .switch-icon-b,
      .switch-icon-slide-left.active .switch-icon-b,
      .switch-icon-slide-right.active .switch-icon-b,
      .switch-icon-slide-down.active .switch-icon-b {
        transform: translateY(0);
      }

      .switch-icon-slide-left .switch-icon-a {
        transform: translateX(0);
      }

      .switch-icon-slide-left .switch-icon-b {
        transform: translateX(100%);
      }

      .switch-icon-slide-left.active .switch-icon-a {
        transform: translateX(-100%);
      }

      .switch-icon-slide-left.active .switch-icon-b {
        transform: translateX(0);
      }

      .switch-icon-slide-right .switch-icon-a {
        transform: translateX(0);
      }

      .switch-icon-slide-right .switch-icon-b {
        transform: translateX(-100%);
      }

      .switch-icon-slide-right.active .switch-icon-a {
        transform: translateX(100%);
      }

      .switch-icon-slide-right.active .switch-icon-b {
        transform: translateX(0);
      }

      .switch-icon-slide-down .switch-icon-a {
        transform: translateY(0);
      }

      .switch-icon-slide-down .switch-icon-b {
        transform: translateY(-100%);
      }

      .switch-icon-slide-down.active .switch-icon-a {
        transform: translateY(100%);
      }

      .switch-icon-slide-down.active .switch-icon-b {
        transform: translateY(0);
      }

      div.dataTables_processing>div:last-child {
        display: none;
      }

      .table thead th,
      .markdown>table thead th {
        /* color: #626976; */
        /* background: var(--tblr-border-color-light); */
        font-size: 0.825rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.5;
        /*! color: #626976; */
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }

      @media print {

        .table thead th,
        .markdown>table thead th {
          background: transparent;
        }
      }

      .table> :not(:first-child),
      .markdown>table> :not(:first-child) {
        border-top-width: 1px;
      }

      .table-responsive .table,
      .table-responsive .markdown>table {
        margin-bottom: 0;
      }

      .table-transparent thead th {
        background: transparent;
      }

      .table-nowrap> :not(caption)>*>* {
        white-space: nowrap;
      }

      .table-vcenter> :not(caption)>*>* {
        vertical-align: middle;
      }

      .table-center> :not(caption)>*>* {
        text-align: center;
      }

      .td-truncate {
        max-width: 1px;
        width: 100%;
      }

      .table-mobile {
        display: block;
      }

      .table-mobile thead {
        display: none;
      }

      .table-mobile tbody,
      .table-mobile tr {
        display: flex;
        flex-direction: column;
      }

      .table-mobile td {
        display: block;
        padding: 0.5rem 0.5rem !important;
        border: none;
        color: #1e293b !important;
      }

      .table-mobile td[data-label]:before {
        font-size: 0.625rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.6;
        color: #626976;
        content: attr(data-label);
        display: block;
      }

      .table-mobile tr {
        border-bottom: 1px solid rgba(98, 105, 118, 0.16);
      }

      .table-mobile .btn {
        display: block;
      }

      @media (max-width: 575.98px) {
        .table-mobile-sm {
          display: block;
        }

        .table-mobile-sm thead {
          display: none;
        }

        .table-mobile-sm tbody,
        .table-mobile-sm tr {
          display: flex;
          flex-direction: column;
        }

        .table-mobile-sm td {
          display: block;
          padding: 0.5rem 0.5rem !important;
          border: none;
          color: #1e293b !important;
        }

        .table-mobile-sm td[data-label]:before {
          font-size: 0.625rem;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.04em;
          line-height: 1.6;
          color: #626976;
          content: attr(data-label);
          display: block;
        }

        .table-mobile-sm tr {
          border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        }

        .table-mobile-sm .btn {
          display: block;
        }
      }

      @media (max-width: 767.98px) {
        .table-mobile-md {
          display: block;
        }

        .table-mobile-md thead {
          display: none;
        }

        .table-mobile-md tbody,
        .table-mobile-md tr {
          display: flex;
          flex-direction: column;
        }

        .table-mobile-md td {
          display: block;
          padding: 0.5rem 0.5rem !important;
          border: none;
          color: #1e293b !important;
        }

        .table-mobile-md td[data-label]:before {
          font-size: 0.625rem;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.04em;
          line-height: 1.6;
          color: #626976;
          content: attr(data-label);
          display: block;
        }

        .table-mobile-md tr {
          border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        }

        .table-mobile-md .btn {
          display: block;
        }
      }

      @media (max-width: 991.98px) {
        .table-mobile-lg {
          display: block;
        }

        .table-mobile-lg thead {
          display: none;
        }

        .table-mobile-lg tbody,
        .table-mobile-lg tr {
          display: flex;
          flex-direction: column;
        }

        .table-mobile-lg td {
          display: block;
          padding: 0.5rem 0.5rem !important;
          border: none;
          color: #1e293b !important;
        }

        .table-mobile-lg td[data-label]:before {
          font-size: 0.625rem;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.04em;
          line-height: 1.6;
          color: #626976;
          content: attr(data-label);
          display: block;
        }

        .table-mobile-lg tr {
          border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        }

        .table-mobile-lg .btn {
          display: block;
        }
      }

      @media (max-width: 1199.98px) {
        .table-mobile-xl {
          display: block;
        }

        .table-mobile-xl thead {
          display: none;
        }

        .table-mobile-xl tbody,
        .table-mobile-xl tr {
          display: flex;
          flex-direction: column;
        }

        .table-mobile-xl td {
          display: block;
          padding: 0.5rem 0.5rem !important;
          border: none;
          color: #1e293b !important;
        }

        .table-mobile-xl td[data-label]:before {
          font-size: 0.625rem;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.04em;
          line-height: 1.6;
          color: #626976;
          content: attr(data-label);
          display: block;
        }

        .table-mobile-xl tr {
          border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        }

        .table-mobile-xl .btn {
          display: block;
        }
      }

      @media (max-width: 1399.98px) {
        .table-mobile-xxl {
          display: block;
        }

        .table-mobile-xxl thead {
          display: none;
        }

        .table-mobile-xxl tbody,
        .table-mobile-xxl tr {
          display: flex;
          flex-direction: column;
        }

        .table-mobile-xxl td {
          display: block;
          padding: 0.5rem 0.5rem !important;
          border: none;
          color: #1e293b !important;
        }

        .table-mobile-xxl td[data-label]:before {
          font-size: 0.625rem;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.04em;
          line-height: 1.6;
          color: #626976;
          content: attr(data-label);
          display: block;
        }

        .table-mobile-xxl tr {
          border-bottom: 1px solid rgba(98, 105, 118, 0.16);
        }

        .table-mobile-xxl .btn {
          display: block;
        }
      }

      .toast-header {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .toast button[data-bs-dismiss="toast"] {
        outline: none;
      }

      .toolbar {
        display: flex;
        flex-wrap: nowrap;
        flex-shrink: 0;
        margin: 0 -0.5rem;
      }

      .toolbar>* {
        margin: 0 0.5rem;
      }

      /**
    Horizontal rules
    */
      /**
    Hr text
    */
      .hr-text {
        display: flex;
        align-items: center;
        margin: 1rem 0 1rem 0;
        font-size: 0.725rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.6;
        color: #bdb6b6;
        height: 1px;
      }

      .hr-text:after,
      .hr-text:before {
        flex: 1 1 auto;
        height: 1px;
        background-color: currentColor;
        opacity: 0.16;
      }

      .hr-text:before {
        content: "";
        margin-right: 0.5rem;
      }

      .hr-text:after {
        content: "";
        margin-left: 0.5rem;
      }

      .hr-text>*:first-child {
        padding-right: 0.5rem;
        padding-left: 0;
        color: #626976;
      }

      .hr-text.hr-text-left:before {
        content: none;
      }

      .hr-text.hr-text-left>*:first-child {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
      }

      .hr-text.hr-text-right:before {
        content: "";
      }

      .hr-text.hr-text-right:after {
        content: none;
      }

      .hr-text.hr-text-right>*:first-child {
        padding-right: 0;
        padding-left: 0.5rem;
      }

      .card>.hr-text {
        margin: 0;
      }

      .hr-text-spaceless {
        margin: -0.5rem 0;
      }

      .lead {
        line-height: 1.4;
      }

      a {
        -webkit-text-decoration-skip: ink;
        text-decoration-skip-ink: auto;
      }

      h1 a,
      .h1 a,
      h2 a,
      .h2 a,
      h3 a,
      .h3 a,
      h4 a,
      .h4 a,
      h5 a,
      .h5 a,
      h6 a,
      .h6 a,
      .h1 a,
      .h2 a,
      .h3 a,
      .h4 a,
      .h5 a,
      .h6 a {
        color: inherit;
      }

      h1 a:hover,
      .h1 a:hover,
      h2 a:hover,
      .h2 a:hover,
      h3 a:hover,
      .h3 a:hover,
      h4 a:hover,
      .h4 a:hover,
      h5 a:hover,
      .h5 a:hover,
      h6 a:hover,
      .h6 a:hover,
      .h1 a:hover,
      .h2 a:hover,
      .h3 a:hover,
      .h4 a:hover,
      .h5 a:hover,
      .h6 a:hover {
        color: inherit;
      }

      h1,
      .h1 {
        line-height: 1.3333333;
      }

      h2,
      .h2 {
        line-height: 1.4;
      }

      h3,
      .h3 {
        line-height: 1.5;
      }

      h4,
      .h4 {
        line-height: 1.4285714;
      }

      h5,
      .h5 {
        line-height: 1.3333333;
      }

      h6,
      .h6 {
        line-height: 1.6;
      }

      strong,
      .strong,
      b {
        font-weight: 600;
      }

      blockquote {
        padding-left: 1rem;
        border-left: 2px solid #e6e7e9;
      }

      blockquote p {
        margin-bottom: 1rem;
      }

      blockquote cite {
        display: block;
        text-align: right;
      }

      blockquote cite:before {
        content: "— ";
      }

      ul,
      ol {
        padding-left: 1.5rem;
      }

      hr,
      .hr {
        margin: 2rem 0;
      }

      dl dd:last-child {
        margin-bottom: 0;
      }

      code {
        padding: 2px 4px;
        background: rgba(32, 107, 196, 0.03);
        border: 1px solid rgba(32, 107, 196, 0.064);
        border-radius: 4px;
        font-weight: 400;
      }

      pre {
        padding: 1rem;
        overflow: auto;
        font-size: 85.7142857%;
        -webkit-hyphens: none;
        -ms-hyphens: none;
        hyphens: none;
        line-height: 1.25rem;
        -moz-tab-size: 3;
        -o-tab-size: 3;
        tab-size: 3;
        border-radius: 4px;
        white-space: pre-wrap;
        background: #fcfdfe;
        border: 1px solid rgba(98, 105, 118, 0.16);
        -webkit-font-smoothing: auto;
      }

      pre code {
        padding: 0;
        background: none;
        border: none;
        border-radius: 0;
      }

      img {
        max-width: 100%;
      }

      .list-unstyled {
        margin-left: 0;
      }

      /**
    Selection
    */
      ::-moz-selection {
        color: #ffffff;
        background-color: #307fdd;
      }

      ::selection {
        color: #ffffff;
        background-color: #307fdd;
      }

      /**
    Links
    */
      [class^="link-"].disabled,
      [class*=" link-"].disabled {
        color: #475569;
        pointer-events: none;
      }

      /**
    Subheader
    */
      .subheader {
        font-size: 0.625rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.04em;
        line-height: 1.6;
        color: #626976;
      }

      .chart {
        display: block;
        min-height: 10rem;
      }

      .chart text {
        font-family: inherit;
      }

      .chart-sm {
        height: 2.5rem;
      }

      .chart-lg {
        height: 15rem;
      }

      .chart-square {
        height: 5.75rem;
      }

      /**
    Chart sparkline
    */
      .chart-sparkline {
        position: relative;
        width: 4rem;
        height: 2.5rem;
        line-height: 1;
        min-height: 0 !important;
      }

      .chart-sparkline-sm {
        height: 1.5rem;
      }

      .chart-sparkline-square {
        width: 2.5rem;
      }

      .chart-sparkline-wide {
        width: 6rem;
      }

      .chart-sparkline-label {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.625rem;
      }

      .chart-sparkline-label .icon {
        width: 1rem;
        height: 1rem;
        font-size: 1rem;
      }

      .offcanvas {
        background: var(--tblr-card-bg);
      }

      .offcanvas-header {
        border-bottom: 1px solid rgba(98, 105, 118, 0.16);
      }

      .offcanvas-footer {
        padding: 1.5rem 1.5rem;
      }

      .offcanvas-title {
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5rem;
      }

      .offcanvas-narrow {
        width: 20rem;
      }

      .bg-white-overlay {
        color: #ffffff;
        background-color: rgba(248, 250, 252, 0.24);
      }

      .bg-dark-overlay {
        color: #ffffff;
        background-color: rgba(30, 41, 59, 0.24);
      }

      .bg-cover {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }

      .bg-primary-lt {
        color: #206bc4 !important;
        background: rgba(32, 107, 196, 0.1) !important;
      }

      .bg-secondary-lt {
        color: #626976 !important;
        background: rgba(98, 105, 118, 0.1) !important;
      }

      .bg-success-lt {
        color: #018016 !important;
        background: rgba(47, 179, 68, 0.1) !important;
      }

      .bg-info-lt {
        color: #4299e1 !important;
        background: rgba(66, 153, 225, 0.1) !important;
      }

      .bg-warning-lt {
        color: #f76707 !important;
        background: rgba(247, 103, 7, 0.1) !important;
      }

      .bg-danger-lt {
        color: #ff3939 !important;
        background: rgba(214, 57, 57, 0.1) !important;
      }

      .bg-light-lt {
        color: #f8fafc !important;
        background: rgba(248, 250, 252, 0.1) !important;
      }

      .bg-dark-lt {
        color: #1e293b !important;
        background: rgba(30, 41, 59, 0.1) !important;
      }

      .bg-muted-lt {
        color: #626976 !important;
        background: rgba(98, 105, 118, 0.1) !important;
      }

      .bg-blue {
        background: #206bc4;
      }

      .text-blue {
        color: #206bc4 !important;
      }

      .bg-blue-lt {
        color: #206bc4 !important;
        background: rgba(32, 107, 196, 0.1) !important;
      }

      .bg-azure {
        background: #4299e1;
      }

      .text-azure {
        color: #4299e1 !important;
      }

      .bg-azure-lt {
        color: #4299e1 !important;
        background: rgba(66, 153, 225, 0.1) !important;
      }

      .bg-indigo {
        background: #4263eb;
      }

      .text-indigo {
        color: #4263eb !important;
      }

      .bg-indigo-lt {
        color: #4263eb !important;
        background: rgba(66, 99, 235, 0.1) !important;
      }

      .bg-purple {
        background: #ae3ec9;
      }

      .text-purple {
        color: #ae3ec9 !important;
      }

      .bg-purple-lt {
        color: #ae3ec9 !important;
        background: rgba(174, 62, 201, 0.1) !important;
      }

      .bg-pink {
        background: #d6336c;
      }

      .text-pink {
        color: #d6336c !important;
      }

      .bg-pink-lt {
        color: #d6336c !important;
        background: rgba(214, 51, 108, 0.1) !important;
      }

      .bg-red {
        background: #ff3939;
      }

      .text-red {
        color: #ff3939 !important;
      }

      .bg-red-lt {
        color: #ff3939 !important;
        background: rgba(255, 57, 57, 0.1) !important;
      }

      .bg-reha {
        background: #00aa00;
      }

      .text-reha {
        color: #00aa00 !important;
      }

      .bg-reha-lt {
        color: #00aa00 !important;
        background: rgba(47, 214, 47, 0.1) !important;
      }

      .bg-orange {
        background: #f76707;
      }

      .text-orange {
        color: #f76707 !important;
      }

      .bg-orange-lt {
        color: #f76707 !important;
        background: rgba(247, 103, 7, 0.1) !important;
      }

      .bg-yellow {
        background: #f59f00;
      }

      .text-yellow {
        color: #f59f00 !important;
      }

      .bg-yellow-lt {
        color: #f59f00 !important;
        background: rgba(245, 159, 0, 0.1) !important;
      }

      .bg-lime {
        background: #74b816;
      }

      .text-lime {
        color: #74b816 !important;
      }

      .bg-lime-lt {
        color: #74b816 !important;
        background: rgba(116, 184, 22, 0.1) !important;
      }

      .bg-green {
        background: #018016;
      }

      .text-green {
        color: #018016 !important;
      }

      .bg-green-lt {
        color: #018016 !important;
        background: rgba(47, 179, 68, 0.1) !important;
      }

      .bg-teal {
        background: #0ca678;
      }

      .text-teal {
        color: #0ca678 !important;
      }

      .bg-teal-lt {
        color: #0ca678 !important;
        background: rgba(12, 166, 120, 0.1) !important;
      }

      .bg-cyan {
        background: #17a2b8;
      }

      .text-cyan {
        color: #17a2b8 !important;
      }

      .bg-cyan-lt {
        color: #17a2b8 !important;
        background: rgba(23, 162, 184, 0.1) !important;
      }

      .bg-facebook {
        color: #ffffff !important;
        background: #3b5998 !important;
      }

      .text-facebook {
        color: #3b5998 !important;
      }

      .bg-facebook-lt {
        color: #3b5998 !important;
        background: rgba(59, 89, 152, 0.1) !important;
      }

      .bg-twitter {
        color: #ffffff !important;
        background: #1da1f2 !important;
      }

      .text-twitter {
        color: #1da1f2 !important;
      }

      .bg-twitter-lt {
        color: #1da1f2 !important;
        background: rgba(29, 161, 242, 0.1) !important;
      }

      .bg-linkedin {
        color: #ffffff !important;
        background: #0a66c2 !important;
      }

      .text-linkedin {
        color: #0a66c2 !important;
      }

      .bg-linkedin-lt {
        color: #0a66c2 !important;
        background: rgba(10, 102, 194, 0.1) !important;
      }

      .bg-google {
        color: #ffffff !important;
        background: #dc4e41 !important;
      }

      .text-google {
        color: #dc4e41 !important;
      }

      .bg-google-lt {
        color: #dc4e41 !important;
        background: rgba(220, 78, 65, 0.1) !important;
      }

      .bg-youtube {
        color: #ffffff !important;
        background: #ff0000 !important;
      }

      .text-youtube {
        color: #ff0000 !important;
      }

      .bg-youtube-lt {
        color: #ff0000 !important;
        background: rgba(255, 0, 0, 0.1) !important;
      }

      .bg-vimeo {
        color: #ffffff !important;
        background: #1ab7ea !important;
      }

      .text-vimeo {
        color: #1ab7ea !important;
      }

      .bg-vimeo-lt {
        color: #1ab7ea !important;
        background: rgba(26, 183, 234, 0.1) !important;
      }

      .bg-dribbble {
        color: #ffffff !important;
        background: #ea4c89 !important;
      }

      .text-dribbble {
        color: #ea4c89 !important;
      }

      .bg-dribbble-lt {
        color: #ea4c89 !important;
        background: rgba(234, 76, 137, 0.1) !important;
      }

      .bg-github {
        color: #ffffff !important;
        background: #181717 !important;
      }

      .text-github {
        color: #181717 !important;
      }

      .bg-github-lt {
        color: #181717 !important;
        background: rgba(24, 23, 23, 0.1) !important;
      }

      .bg-instagram {
        color: #ffffff !important;
        background: #e4405f !important;
      }

      .text-instagram {
        color: #e4405f !important;
      }

      .bg-instagram-lt {
        color: #e4405f !important;
        background: rgba(228, 64, 95, 0.1) !important;
      }

      .bg-pinterest {
        color: #ffffff !important;
        background: #bd081c !important;
      }

      .text-pinterest {
        color: #bd081c !important;
      }

      .bg-pinterest-lt {
        color: #bd081c !important;
        background: rgba(189, 8, 28, 0.1) !important;
      }

      .bg-vk {
        color: #ffffff !important;
        background: #6383a8 !important;
      }

      .text-vk {
        color: #6383a8 !important;
      }

      .bg-vk-lt {
        color: #6383a8 !important;
        background: rgba(99, 131, 168, 0.1) !important;
      }

      .bg-rss {
        color: #ffffff !important;
        background: #ffa500 !important;
      }

      .text-rss {
        color: #ffa500 !important;
      }

      .bg-rss-lt {
        color: #ffa500 !important;
        background: rgba(255, 165, 0, 0.1) !important;
      }

      .bg-flickr {
        color: #ffffff !important;
        background: #0063dc !important;
      }

      .text-flickr {
        color: #0063dc !important;
      }

      .bg-flickr-lt {
        color: #0063dc !important;
        background: rgba(0, 99, 220, 0.1) !important;
      }

      .bg-bitbucket {
        color: #ffffff !important;
        background: #0052cc !important;
      }

      .text-bitbucket {
        color: #0052cc !important;
      }

      .bg-bitbucket-lt {
        color: #0052cc !important;
        background: rgba(0, 82, 204, 0.1) !important;
      }

      .bg-tabler {
        color: #ffffff !important;
        background: #206bc4 !important;
      }

      .text-tabler {
        color: #206bc4 !important;
      }

      .bg-tabler-lt {
        color: #206bc4 !important;
        background: rgba(32, 107, 196, 0.1) !important;
      }

      /*
    Scrollable
    */
      .scrollable {
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
      }

      .scrollable.hover {
        overflow-y: hidden;
      }

      .scrollable.hover>* {
        margin-top: -1px;
      }

      .scrollable.hover:hover,
      .scrollable.hover:focus,
      .scrollable.hover:active {
        overflow: visible;
        overflow-y: auto;
      }

      .touch .scrollable {
        overflow-y: auto !important;
      }

      .scroll-x,
      .scroll-y {
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
      }

      .scroll-y {
        overflow-y: auto;
      }

      .scroll-x {
        overflow-x: auto;
      }

      .no-scroll {
        overflow: hidden;
      }

      .w-0 {
        width: 0 !important;
      }

      .h-0 {
        height: 0 !important;
      }

      .w-1 {
        width: 0.25rem !important;
      }

      .h-1 {
        height: 0.25rem !important;
      }

      .w-2 {
        width: 0.5rem !important;
      }

      .h-2 {
        height: 0.5rem !important;
      }

      .w-3 {
        width: 1rem !important;
      }

      .h-3 {
        height: 1rem !important;
      }

      .w-4 {
        width: 2rem !important;
      }

      .h-4 {
        height: 2rem !important;
      }

      .w-5 {
        width: 4rem !important;
      }

      .h-5 {
        height: 4rem !important;
      }

      .w-auto {
        width: auto !important;
      }

      .h-auto {
        height: auto !important;
      }

      .w-px {
        width: 1px !important;
      }

      .h-px {
        height: 1px !important;
      }

      .w-full {
        width: 100% !important;
      }

      .h-full {
        height: 100% !important;
      }

      .opacity-0 {
        opacity: 0 !important;
      }

      .opacity-5 {
        opacity: 0.05 !important;
      }

      .opacity-10 {
        opacity: 0.1 !important;
      }

      .opacity-15 {
        opacity: 0.15 !important;
      }

      .opacity-20 {
        opacity: 0.2 !important;
      }

      .opacity-25 {
        opacity: 0.25 !important;
      }

      .opacity-30 {
        opacity: 0.3 !important;
      }

      .opacity-35 {
        opacity: 0.35 !important;
      }

      .opacity-40 {
        opacity: 0.4 !important;
      }

      .opacity-45 {
        opacity: 0.45 !important;
      }

      .opacity-50 {
        opacity: 0.5 !important;
      }

      .opacity-55 {
        opacity: 0.55 !important;
      }

      .opacity-60 {
        opacity: 0.6 !important;
      }

      .opacity-65 {
        opacity: 0.65 !important;
      }

      .opacity-70 {
        opacity: 0.7 !important;
      }

      .opacity-75 {
        opacity: 0.75 !important;
      }

      .opacity-80 {
        opacity: 0.8 !important;
      }

      .opacity-85 {
        opacity: 0.85 !important;
      }

      .opacity-90 {
        opacity: 0.9 !important;
      }

      .opacity-95 {
        opacity: 0.95 !important;
      }

      .opacity-100 {
        opacity: 1 !important;
      }

      .hover-shadow-sm:hover {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
      }

      .hover-shadow:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
      }

      .hover-shadow-lg:hover {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
      }

      .hover-shadow-none:hover {
        box-shadow: none !important;
      }

      /**
    Antialiasing
    */
      .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      .subpixel-antialiased {
        -webkit-font-smoothing: auto;
        -moz-osx-font-smoothing: auto;
      }
    </style>

  </head>

  <body>

    <div class="card-body">
      @foreach ($data as $item )
      <div class="accordion-item">
        <div class="show" id="collapse-{{ $item->position }}" data-bs-parent="#accordion-standard" style="">
          <div class="accordion-body pt-0">
            <div class="list-group list-group-flush list-group-hoverable pt-1">
              <div class="list-group-item">
                <div class="row align-items-center">
                  <div class="avatar bg-{{ $item->category->color }}-lt col-auto" data-bs-toggle="tooltip" data-bs-placement="top"
                       data-bs-original-title="#{{ $item->id }}">
                    <div class="text-uppercase">
                      {!! $item->category->svg_icon !!}
                    </div>
                  </div>
                  <div class="col-auto">
                    <a href="{{ route('soubory.download', $item->id) }}" target="_blank">
                      <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout standard">
                        <img src="{{ asset('img/files/pdf.png') }}" alt="PDF soubor">
                      </span>
                    </a>
                  </div>
                  <div class="col text-truncate">
                    <a class="text-primary d-block text-decoration-none" href="{{ route('soubory.download', $item->id) }}" target="_blank">
                      <h3 style="margin-bottom: 0;">{{ $item->name }}</h3>
                    </a>
                    <div class="d-block description text-muted text-truncate">{{ $item->description }}</div>
                  </div>
                  <div class="col-auto">
                    @if (Carbon\Carbon::parse($item->created_at)->addDays(1) >= Carbon\Carbon::today())
                    <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                    @endif
                    @if (Carbon\Carbon::parse($item->updated_at)->addDays(7) >= Carbon\Carbon::now())
                    <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno !</span>
                    @endif
                    <span class="text-muted description">{{ Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</span>
                    <svg class="icon icon-tabler icon-tabler-certificate text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="15" cy="15" r="3"></circle>
                      <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                      <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                      <line x1="6" y1="9" x2="18" y2="9"></line>
                      <line x1="6" y1="12" x2="9" y2="12"></line>
                      <line x1="6" y1="15" x2="8" y2="15"></line>
                    </svg>
                    <span class="text-muted description">Revize: {{ $item->revision }}</span>
                  </div>
                </div>
                {{-- @foreach ($item->addons as $add)
                <div class="row align-items-center">
                  <div class="avatar bg-{{ $item->category->color }}-lt col-auto">
                    <div class="text-uppercase" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="#{{ $item->id }}#{{ $add->id }}">
                      <svg class="icon icon-tabler icon-tabler-plus text-{{ $item->category->color }}" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg>
                    </div>
                  </div>
                  <div class="col-auto">
                    <a href="{{ route('standardy.download', $add->id) }}">
                      <span class="avatar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Stáhnout přílohu">
                        <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                      </span>
                    </a>
                  </div>
                  <div class="col text-truncate">
                    <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ route('standardy.download', $add->id) }}">
                      <h3 style="margin-bottom: 0;">Příloha č. {{ $add->addon_number }}</h3>
                    </a>
                    <div class="d-block description text-muted text-truncate mt-n1">{{ $item->name }} - {{ $add->description }}</div>
                  </div>
                  <div class="col-auto">
                    @if (Carbon\Carbon::parse($add->created_at)->addDay() >= Carbon\Carbon::today())
                    <span class="badge badge-sm bg-red-lt text-uppercase ms-auto">Nový !</span>
                    @endif
                    @if (Carbon\Carbon::parse($add->updated_at)->addDays(15) >= Carbon\Carbon::now())
                    <span class="badge badge-sm bg-lime-lt text-uppercase ms-auto">Aktualizováno !</span>
                    @endif
                    <span class="text-muted description">{{ Carbon\Carbon::parse($add->updated_at)->diffForHumans() }}</span>
                    <svg class="icon icon-tabler icon-tabler-certificate-2 text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="12" cy="15" r="3"></circle>
                      <path d="M10 7h4"></path>
                      <path d="M10 18v4l2 -1l2 1v-4"></path>
                      <path d="M10 19h-2a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-2"></path>
                    </svg>
                    <span class="text-muted description">Revize: {{ $add->revision }}</span>
                  </div>
                </div>
                @endforeach --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </body>

</html>
