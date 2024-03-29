# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [0.3.0] - 2023-12-12

### Fixed

* PHPDoc

### Changed

* renamed `IsMatchingRegExValidator` to `IsMatchingRegularExpressionValidator`

### Added

* `IsRegularExpressionValidator`

[0.3.0]: https://github.com/codekandis/duplicator/compare/0.2.0..0.3.0

---
## [0.2.0] - 2023-09-11

### Fixed

* `MappedArrayValidator::validate()`
* PHPDoc

### Changed

* updated composer package dependencies
  * added
    * `codekandis/converters` [^0]
    * `codekandis/regular-expressions` [^0]

### Added

* `IsDateIntervalStringValidator`
* `IsDateTimeStringValidator`
* `IsDateTimeStringByFormatValidator`

[0.2.0]: https://github.com/codekandis/duplicator/compare/0.1.0..0.2.0

---
## [0.1.0] - 2021-10-17

### Added

* validator interface
* several default validators
* mapped array validator
* `CODE_OF_CONDUCT.md`
* `LICENSE`
* `README.md`
* `CHANGELOG.md`

[0.1.0]: https://github.com/codekandis/validators/tree/0.1.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
