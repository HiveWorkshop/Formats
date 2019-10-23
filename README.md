# Install and build

    brew install kaitai-struct-compiler

    cd src

    composer install

    php ./create_function_lookup.php \
    && kaitai-struct-compiler --target php --outdir ../dist ./grammar/wtg.ksy \
    && php ./fix_kaitai_syntax.php 

# Run

    php ./src/test.php --parse-dir ./samples/wtg_old
