# WTG (Warcraft 3 Trigger Format)

# Install and build

Install the `kaitai-struct-compiler`. On macOS, you can easily do it using Homebrew:

    brew install kaitai-struct-compiler

You need PHP and Composer to compile the auto generated grammars (function lookups).

    cd src
    composer install

I run the below **oneliner** every time I change something, it has many functions.
1. It runs the script that generates our automatically generated grammars.
2. It runs `kaitai-struct-compiler` to create the PHP version (the one I need). It is important that you specify a namespace, otherwise invalid PHP code is generated.
3. It runs `fix_kaitai_syntax.php` to fix invalid PHP code generated when a definition has sub types or enums.
4. It resets `WtgError.php` because I have a custom version that throws an exception, a feature that will come in Kaitai down the line.

    php ./create_function_lookup.php \
    && kaitai-struct-compiler --target php --php-namespace VindIT\\Repository\\Blizzard\\KaitaiParser --outdir ../dist ./grammar/wtg.ksy \
    && php ./fix_kaitai_syntax.php \
    && git checkout ../dist/WtgError.php

To use it for other languages, you will need to run just the first two commands:

    php ./create_function_lookup.php \
    && kaitai-struct-compiler --target php --outdir ../dist ./grammar/wtg.ksy

# Run

I have a lot of sample .WTG files which aren't in this repository. If you want to test the generated PHP code, you can run the below command to test all files in the directory.

    php ./src/test.php --parse-dir ./samples

To test a file in depth, you can run this:

    php ./src/test.php --parse-single ./samples/war3map.wtg

The script has more functions and you can read the code to find out what else is possible.
