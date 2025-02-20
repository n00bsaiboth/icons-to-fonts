# Icons to Fonts

When thinking about other icon libraries, like for example `bootstrap icons`, it comes like hundreds of different icons and no website uses that many icons.

## Few known bugs

After you have run the `npm run build` command (probably for a few times) and when you inspect the web site, you can see errors like,

With Chrome:

- Failed to decode downloaded font: < font-url-here >.
- OTS parsing error: invalid sfntVersion: 171712836.

With Firefox:

- downloadable font: rejected by sanitizer (font-family: "iconfont" style:normal weight:400 stretch:100 src index:1) source: < font-url-here >.
- downloadable font: no supported format found (font-family: "iconfont" style:normal weight:400 stretch:100 src index:5) source: (end of source list).

The origin of this bug comes from the auto generated CSS. If you open up the `/web/build/css/style.css` file, you can see right away the problem. I think it tries to load or download the fonts which are "outside" of the scope.

I'm running Lando with apache and what I think what is happening here, is that apache thinks that the project root is the web folder, like it is basically, but it can't comprehend the idea, that there is life outside of the web folder.

I haven't tested this yet, for example with Drupal or Wordpress themes. It's highly possible that it works as designed on themes.
