const mix = require("laravel-mix");

const VuetifyLoaderPlugin = require("vuetify-loader/lib/plugin");
const CaseSensitivePathsPlugin = require("case-sensitive-paths-webpack-plugin");
var webpackConfig = {
    plugins: [new VuetifyLoaderPlugin(), new CaseSensitivePathsPlugin()]
};

module.exports = {
    rules: [
        {
            test: /\.s(c|a)ss$/,
            use: [
                "vue-style-loader",
                "css-loader",
                {
                    loader: "sass-loader",
                    // Requires sass-loader@^7.0.0
                    options: {
                        implementation: require("sass"),
                        fiber: require("fibers"),
                        indentedSyntax: true // optional
                    },
                    // Requires sass-loader@^8.0.0
                    options: {
                        implementation: require("sass"),
                        sassOptions: {
                            fiber: require("fibers"),
                            indentedSyntax: true // optional
                        }
                    }
                }
            ]
        }
    ]
};

mix.webpackConfig(webpackConfig);

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
