#require 'compass/import-once/activate'

# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "scripts"
fonts_dir = "fonts"
cache_dir = "../sass-cache"

#圧縮するかどうかの設定(:nested, :expanded, :compact, or :compressed)
output_style = (environment == :production) ? :compressed : :compact

#SASS内の行番号の出力(true or false)
line_comments = (environment == :production) ? :false : :true

environment = :development

# To enable relative paths to assets via compass helper functions. Uncomment:
 relative_assets = true

color_output = true

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
