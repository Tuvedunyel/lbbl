const path = require("path");

module.exports = {
  mode: "development", //production OU development
  entry: {
    main: path.resolve(__dirname, "src/script.js"),
  },
  output: {
    path: path.resolve(__dirname, "js"),
    filename: "[name].js",
    assetModuleFilename: "[name][ext]",
    clean: true,
  },
};
