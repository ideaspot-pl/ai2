const { DateTime } = require("luxon");

dt = DateTime.fromObject({day: 1, month: 10, year: 2000, hour: 8, minute: 15});
console.log(dt.toString());
