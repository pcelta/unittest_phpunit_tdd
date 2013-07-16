unit:
	@cd tests ; phpunit --verbose -d memory_limit=512M . ; cd ../

coverage:
	@cd tests ; phpunit --colors --verbose --coverage-html=`pwd`/../data/coverage --log-junit=`pwd`/../data/junit.xml --coverage-clover=`pwd`/../data/clover.xml . ; cd ../

phpmd:
	phpmd --reportfile `pwd`/data/pmd.xml ./ xml codesize,controversial,design,naming,unusedcode

phpcs:
	phpcs --extensions=php,phtml --report=checkstyle --report-file=`pwd`/data/checkstyle.xml --tab-width=4 --encoding=utf-8 --standard=Zend ./

phpcpd:
	phpcpd --min-lines 3 --min-tokens 40 --log-pmd `pwd`/data/cpd.xml ./

pdepend:
	pdepend --coderank-mode=inheritance,property,method --jdepend-xml=`pwd`/data/jdepend.xml --summary-xml=`pwd`/data/summary.xml --jdepend-chart=`pwd`/data/pdepend.svg --overview-pyramid=`pwd`/data/pyramid.svg ./

phpcb:
	phpcb --log data/ --source . --output data/phpcb

all:
	make coverage ; make phpmd ; make phpcs ; make phploc ; make phpcpd ; make pdepend ; make phpcb
