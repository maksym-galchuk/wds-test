const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const webpack = require("webpack");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin")
const { CleanWebpackPlugin } = require("clean-webpack-plugin");

const isDev = false;

const config = {
  mode: isDev ? "development" : "production",
  devtool: isDev ? "source-map" : false,
  entry: {
    main: [
      "./src/js/main.js",
      "./src/scss/main.scss"
    ]
  },
  output: {
    filename: "assets/js/main.[contenthash].js",
    path: path.resolve(__dirname),
  },
  plugins: [
    new webpack.ProgressPlugin(),
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: [
        "./assets/js/*",
        "./assets/css/*",
      ]
    }),
    new BrowserSyncPlugin(
      {
        host: "localhost",
        port: 3000,
        proxy: "http://wds-test/",
        files: [
          "./assets/js/*.js",
          "./assets/css/*.css",
          "./**/*.php",
        ],
      }),
    new MiniCssExtractPlugin({ filename: "./assets/css/main.[contenthash].css" }),
  ],
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        type: "asset/resource",
        generator: {
          filename: "./assets/fonts/[name][ext]"
        }
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/i,
        type: "asset/resource",
        generator: {
          filename: "./assets/img/[name][ext]",
        },
      },
    ],
  },
  resolve: {
    extensions: [".js"],
  },
};

module.exports = config;