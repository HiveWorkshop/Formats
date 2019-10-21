# Install and run

    brew install kaitai-struct-compiler

    cd src

    composer install

    php ./create_function_lookup.php \
    && kaitai-struct-compiler --target php --outdir ../dist ./grammar/wtg.ksy \
    && php ./fix_kaitai_syntax.php 