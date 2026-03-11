<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.2
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GrammarParser}.
 */
interface GrammarListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by the `Program`
	 * labeled alternative in {@see GrammarParser::p()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by the `Program` labeled alternative
	 * in {@see GrammarParser::p()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by the `PrintStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPrintStatement(Context\PrintStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `PrintStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPrintStatement(Context\PrintStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `VarDeclaration`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterVarDeclaration(Context\VarDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `VarDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitVarDeclaration(Context\VarDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `ConstDeclaration`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterConstDeclaration(Context\ConstDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `ConstDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitConstDeclaration(Context\ConstDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `ShortVarDeclaration`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterShortVarDeclaration(Context\ShortVarDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `ShortVarDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitShortVarDeclaration(Context\ShortVarDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `AssignmentStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignmentStatement(Context\AssignmentStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `AssignmentStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignmentStatement(Context\AssignmentStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `IncrementStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIncrementStatement(Context\IncrementStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `IncrementStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIncrementStatement(Context\IncrementStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `IfStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `IfStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStatement(Context\IfStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `ForClassicStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForClassicStatement(Context\ForClassicStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `ForClassicStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForClassicStatement(Context\ForClassicStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `WhileStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterWhileStatement(Context\WhileStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `WhileStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitWhileStatement(Context\WhileStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `InfiniteForStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterInfiniteForStatement(Context\InfiniteForStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `InfiniteForStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitInfiniteForStatement(Context\InfiniteForStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `SwitchStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchStatement(Context\SwitchStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `SwitchStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchStatement(Context\SwitchStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `ContinueStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterContinueStatement(Context\ContinueStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `ContinueStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitContinueStatement(Context\ContinueStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `BreakStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBreakStatement(Context\BreakStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `BreakStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBreakStatement(Context\BreakStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReturnStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStatement(Context\ReturnStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReturnStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStatement(Context\ReturnStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `FunctionDeclaration`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionDeclaration(Context\FunctionDeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by the `FunctionDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionDeclaration(Context\FunctionDeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by the `FunctionCallStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionCallStatement(Context\FunctionCallStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `FunctionCallStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionCallStatement(Context\FunctionCallStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArrayAssignmentStatement`
	 * labeled alternative in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAssignmentStatement(Context\ArrayAssignmentStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArrayAssignmentStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAssignmentStatement(Context\ArrayAssignmentStatementContext $context): void;
	/**
	 * Enter a parse tree produced by the `BlockStatement`
	 * labeled alternative in {@see GrammarParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlockStatement(Context\BlockStatementContext $context): void;
	/**
	 * Exit a parse tree produced by the `BlockStatement` labeled alternative
	 * in {@see GrammarParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlockStatement(Context\BlockStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::elseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterElseStmt(Context\ElseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::elseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitElseStmt(Context\ElseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::caseStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseStmt(Context\CaseStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::caseStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseStmt(Context\CaseStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::defaultStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultStmt(Context\DefaultStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::defaultStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultStmt(Context\DefaultStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterType(Context\TypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitType(Context\TypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayType(Context\ArrayTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayType(Context\ArrayTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function enterE(Context\EContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function exitE(Context\EContext $context): void;
	/**
	 * Enter a parse tree produced by the `OrExpression`
	 * labeled alternative in {@see GrammarParser::logic()}.
	 * @param $context The parse tree.
	 */
	public function enterOrExpression(Context\OrExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `OrExpression` labeled alternative
	 * in {@see GrammarParser::logic()}.
	 * @param $context The parse tree.
	 */
	public function exitOrExpression(Context\OrExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `AndExpression`
	 * labeled alternative in {@see GrammarParser::andExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterAndExpression(Context\AndExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `AndExpression` labeled alternative
	 * in {@see GrammarParser::andExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitAndExpression(Context\AndExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `EqualityExpression`
	 * labeled alternative in {@see GrammarParser::eq()}.
	 * @param $context The parse tree.
	 */
	public function enterEqualityExpression(Context\EqualityExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `EqualityExpression` labeled alternative
	 * in {@see GrammarParser::eq()}.
	 * @param $context The parse tree.
	 */
	public function exitEqualityExpression(Context\EqualityExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `InequalityExpression`
	 * labeled alternative in {@see GrammarParser::ineq()}.
	 * @param $context The parse tree.
	 */
	public function enterInequalityExpression(Context\InequalityExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `InequalityExpression` labeled alternative
	 * in {@see GrammarParser::ineq()}.
	 * @param $context The parse tree.
	 */
	public function exitInequalityExpression(Context\InequalityExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `AddExpression`
	 * labeled alternative in {@see GrammarParser::add()}.
	 * @param $context The parse tree.
	 */
	public function enterAddExpression(Context\AddExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `AddExpression` labeled alternative
	 * in {@see GrammarParser::add()}.
	 * @param $context The parse tree.
	 */
	public function exitAddExpression(Context\AddExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ProductExpression`
	 * labeled alternative in {@see GrammarParser::prod()}.
	 * @param $context The parse tree.
	 */
	public function enterProductExpression(Context\ProductExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ProductExpression` labeled alternative
	 * in {@see GrammarParser::prod()}.
	 * @param $context The parse tree.
	 */
	public function exitProductExpression(Context\ProductExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `PrimaryExpression`
	 * labeled alternative in {@see GrammarParser::unary()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimaryExpression(Context\PrimaryExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `PrimaryExpression` labeled alternative
	 * in {@see GrammarParser::unary()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimaryExpression(Context\PrimaryExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `UnaryExpression`
	 * labeled alternative in {@see GrammarParser::unary()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryExpression(Context\UnaryExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `UnaryExpression` labeled alternative
	 * in {@see GrammarParser::unary()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryExpression(Context\UnaryExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::arrayRow()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayRow(Context\ArrayRowContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::arrayRow()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayRow(Context\ArrayRowContext $context): void;
	/**
	 * Enter a parse tree produced by the `GroupedExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterGroupedExpression(Context\GroupedExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `GroupedExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitGroupedExpression(Context\GroupedExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `FloatExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterFloatExpression(Context\FloatExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `FloatExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitFloatExpression(Context\FloatExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `IntExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterIntExpression(Context\IntExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `IntExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitIntExpression(Context\IntExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `RuneExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterRuneExpression(Context\RuneExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `RuneExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitRuneExpression(Context\RuneExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `StringExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterStringExpression(Context\StringExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `StringExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitStringExpression(Context\StringExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReferenceExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceExpression(Context\ReferenceExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReferenceExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceExpression(Context\ReferenceExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `BoolExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterBoolExpression(Context\BoolExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `BoolExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitBoolExpression(Context\BoolExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `NilExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterNilExpression(Context\NilExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `NilExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitNilExpression(Context\NilExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `FunctionCallExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionCallExpression(Context\FunctionCallExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `FunctionCallExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionCallExpression(Context\FunctionCallExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArrayExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayExpression(Context\ArrayExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArrayExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayExpression(Context\ArrayExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReferenceValueExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceValueExpression(Context\ReferenceValueExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReferenceValueExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceValueExpression(Context\ReferenceValueExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReferenceArrayExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterReferenceArrayExpression(Context\ReferenceArrayExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReferenceArrayExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitReferenceArrayExpression(Context\ReferenceArrayExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArrayAccessExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAccessExpression(Context\ArrayAccessExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArrayAccessExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAccessExpression(Context\ArrayAccessExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `SliceInitExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterSliceInitExpression(Context\SliceInitExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `SliceInitExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitSliceInitExpression(Context\SliceInitExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArrayInitExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayInitExpression(Context\ArrayInitExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArrayInitExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayInitExpression(Context\ArrayInitExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `MatrixInitExpression`
	 * labeled alternative in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterMatrixInitExpression(Context\MatrixInitExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `MatrixInitExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitMatrixInitExpression(Context\MatrixInitExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ParameterList`
	 * labeled alternative in {@see GrammarParser::params()}.
	 * @param $context The parse tree.
	 */
	public function enterParameterList(Context\ParameterListContext $context): void;
	/**
	 * Exit a parse tree produced by the `ParameterList` labeled alternative
	 * in {@see GrammarParser::params()}.
	 * @param $context The parse tree.
	 */
	public function exitParameterList(Context\ParameterListContext $context): void;
	/**
	 * Enter a parse tree produced by the `ParamDecl`
	 * labeled alternative in {@see GrammarParser::param()}.
	 * @param $context The parse tree.
	 */
	public function enterParamDecl(Context\ParamDeclContext $context): void;
	/**
	 * Exit a parse tree produced by the `ParamDecl` labeled alternative
	 * in {@see GrammarParser::param()}.
	 * @param $context The parse tree.
	 */
	public function exitParamDecl(Context\ParamDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::returnSpec()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnSpec(Context\ReturnSpecContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::returnSpec()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnSpec(Context\ReturnSpecContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::returnType()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnType(Context\ReturnTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::returnType()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnType(Context\ReturnTypeContext $context): void;
	/**
	 * Enter a parse tree produced by the `ArgumentList`
	 * labeled alternative in {@see GrammarParser::args()}.
	 * @param $context The parse tree.
	 */
	public function enterArgumentList(Context\ArgumentListContext $context): void;
	/**
	 * Exit a parse tree produced by the `ArgumentList` labeled alternative
	 * in {@see GrammarParser::args()}.
	 * @param $context The parse tree.
	 */
	public function exitArgumentList(Context\ArgumentListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function enterIdList(Context\IdListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function exitIdList(Context\IdListContext $context): void;
}