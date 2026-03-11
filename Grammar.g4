grammar Grammar;

// Program
p: stmt* EOF # Program;

// Statements
stmt: ('print' | 'fmt.Println') '(' args? ')'					# PrintStatement
	| 'var' idList (arrayType | type) ('=' args)?				# VarDeclaration
	| 'const' ID type '=' e										# ConstDeclaration
	| idList ':=' args											# ShortVarDeclaration
	| ID op = ('=' | '+=' | '-=' | '*=' | '/=') e				# AssignmentStatement
	| ID '++'													# IncrementStatement
	| 'if' e block elseStmt?									# IfStatement
	| 'for' init = stmt ';' cond = e ';' update = stmt block	# ForClassicStatement
	| 'for' e block												# WhileStatement
	| 'for' block												# InfiniteForStatement
	| switchStmt												# SwitchStatement
	| 'continue'												# ContinueStatement
	| 'break'													# BreakStatement
	| 'return' args?											# ReturnStatement
	| 'func' ID '(' params? ')' returnSpec? block				# FunctionDeclaration
	| ID '(' args? ')'											# FunctionCallStatement
	| ID ('[' index += e ']')+ '=' assign = e					# ArrayAssignmentStatement;

block: '{' stmt* '}' # BlockStatement;

elseStmt: 'else' block;

switchStmt: 'switch' e '{' caseStmt* defaultStmt? '}';

caseStmt: 'case' e ':' stmt*;

defaultStmt: 'default' ':' stmt*;

type:
	'int32'
	| 'float32'
	| 'bool'
	| 'rune'
	| 'string'
	| '*' type
	| '[]' type;

arrayType: ('[' INT ']')+ type;

/*
 * Expressions, precedence levels
 1. Equality: ==
 2. Inequality: >, <
 3. Addition: +, -
 4.
 * Multiplication: *, /
 5. Unary: -
 6. Primary: INT, ID, (e)
 */

e: logic;

logic:
	logic '||' andExpr	# OrExpression
	| andExpr			# OrExpression;

andExpr: andExpr '&&' eq # AndExpression | eq # AndExpression;

eq: left = ineq ('==' right = ineq)? # EqualityExpression;

ineq:
	left = add (
		op = ('>' | '<' | '>=' | '<=' | '!=') right = add
	)? # InequalityExpression;

add:
	add op = ('+' | '-') prod	# AddExpression
	| prod						# AddExpression;

prod:
	prod op = ('*' | '/' | '%') unary	# ProductExpression
	| unary								# ProductExpression;

unary:
	primary		# PrimaryExpression
	| '-' unary	# UnaryExpression
	| '!' unary	# UnaryExpression;

arrayRow: '{' e (',' e)* '}';

primary:
	'(' e ')'											# GroupedExpression
	| FLOAT												# FloatExpression
	| INT												# IntExpression
	| RUNE												# RuneExpression
	| STRING											# StringExpression
	| ID												# ReferenceExpression
	| bool = ('true' | 'false')							# BoolExpression
	| 'nil'												# NilExpression
	| ID '(' args? ')'									# FunctionCallExpression
	| '[' e (',' e)* ']'								# ArrayExpression
	| '&' ID											# ReferenceValueExpression
	| '&' ID ('[' e ']')+								# ReferenceArrayExpression
	| ID ('[' e ']')+									# ArrayAccessExpression
	| '[]' type '{' e (',' e)* '}'						# SliceInitExpression
	| arrayType '{' e (',' e)* '}'						# ArrayInitExpression
	| arrayType '{' arrayRow (',' arrayRow)* ','? '}'	# MatrixInitExpression;

params: param (',' param)* # ParameterList;

param: ID (arrayType | type) # ParamDecl;

returnSpec:
	type
	| arrayType
	| '(' returnType (',' returnType)* ')';

returnType: type | arrayType;

args: e (',' e)* # ArgumentList;
idList: ID (',' ID)*;

// Lexer rules
FLOAT: [0-9]+ '.' [0-9]+;
INT: [0-9]+;
ID: [a-zA-Z_][a-zA-Z0-9_]*;
STRING: '"' (~["\r\n])* '"';

LINE_COMMENT: '//' ~[\r\n]* -> skip;
MULTI_COMMENT: '/*' .*? '*/' -> skip;

RUNE: '\'' . '\'';

WS: [ \t\r\n]+ -> skip;