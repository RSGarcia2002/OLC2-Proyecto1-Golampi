<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.2
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GrammarParser}.
 */
interface GrammarVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by the `Program` labeled alternative
	 * in {@see GrammarParser::p()}.
	 *
	 * @param Context\ProgramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProgram(Context\ProgramContext $context);

	/**
	 * Visit a parse tree produced by the `PrintStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\PrintStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrintStatement(Context\PrintStatementContext $context);

	/**
	 * Visit a parse tree produced by the `VarDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\VarDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVarDeclaration(Context\VarDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ConstDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\ConstDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstDeclaration(Context\ConstDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `ShortVarDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\ShortVarDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitShortVarDeclaration(Context\ShortVarDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `AssignmentStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\AssignmentStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignmentStatement(Context\AssignmentStatementContext $context);

	/**
	 * Visit a parse tree produced by the `IncrementStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\IncrementStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncrementStatement(Context\IncrementStatementContext $context);

	/**
	 * Visit a parse tree produced by the `IfStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\IfStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStatement(Context\IfStatementContext $context);

	/**
	 * Visit a parse tree produced by the `ForClassicStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\ForClassicStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitForClassicStatement(Context\ForClassicStatementContext $context);

	/**
	 * Visit a parse tree produced by the `WhileStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\WhileStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhileStatement(Context\WhileStatementContext $context);

	/**
	 * Visit a parse tree produced by the `InfiniteForStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\InfiniteForStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInfiniteForStatement(Context\InfiniteForStatementContext $context);

	/**
	 * Visit a parse tree produced by the `SwitchStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\SwitchStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStatement(Context\SwitchStatementContext $context);

	/**
	 * Visit a parse tree produced by the `ContinueStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\ContinueStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContinueStatement(Context\ContinueStatementContext $context);

	/**
	 * Visit a parse tree produced by the `BreakStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\BreakStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBreakStatement(Context\BreakStatementContext $context);

	/**
	 * Visit a parse tree produced by the `ReturnStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\ReturnStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnStatement(Context\ReturnStatementContext $context);

	/**
	 * Visit a parse tree produced by the `FunctionDeclaration` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\FunctionDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionDeclaration(Context\FunctionDeclarationContext $context);

	/**
	 * Visit a parse tree produced by the `FunctionCallStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\FunctionCallStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionCallStatement(Context\FunctionCallStatementContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAssignmentStatement` labeled alternative
	 * in {@see GrammarParser::stmt()}.
	 *
	 * @param Context\ArrayAssignmentStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAssignmentStatement(Context\ArrayAssignmentStatementContext $context);

	/**
	 * Visit a parse tree produced by the `BlockStatement` labeled alternative
	 * in {@see GrammarParser::block()}.
	 *
	 * @param Context\BlockStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlockStatement(Context\BlockStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::elseStmt()}.
	 *
	 * @param Context\ElseStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElseStmt(Context\ElseStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::switchStmt()}.
	 *
	 * @param Context\SwitchStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSwitchStmt(Context\SwitchStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::caseStmt()}.
	 *
	 * @param Context\CaseStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCaseStmt(Context\CaseStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::defaultStmt()}.
	 *
	 * @param Context\DefaultStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefaultStmt(Context\DefaultStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::arrayType()}.
	 *
	 * @param Context\ArrayTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayType(Context\ArrayTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::e()}.
	 *
	 * @param Context\EContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitE(Context\EContext $context);

	/**
	 * Visit a parse tree produced by the `OrExpression` labeled alternative
	 * in {@see GrammarParser::logic()}.
	 *
	 * @param Context\OrExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrExpression(Context\OrExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `AndExpression` labeled alternative
	 * in {@see GrammarParser::andExpr()}.
	 *
	 * @param Context\AndExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndExpression(Context\AndExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `EqualityExpression` labeled alternative
	 * in {@see GrammarParser::eq()}.
	 *
	 * @param Context\EqualityExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEqualityExpression(Context\EqualityExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `InequalityExpression` labeled alternative
	 * in {@see GrammarParser::ineq()}.
	 *
	 * @param Context\InequalityExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInequalityExpression(Context\InequalityExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `AddExpression` labeled alternative
	 * in {@see GrammarParser::add()}.
	 *
	 * @param Context\AddExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddExpression(Context\AddExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ProductExpression` labeled alternative
	 * in {@see GrammarParser::prod()}.
	 *
	 * @param Context\ProductExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProductExpression(Context\ProductExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `PrimaryExpression` labeled alternative
	 * in {@see GrammarParser::unary()}.
	 *
	 * @param Context\PrimaryExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrimaryExpression(Context\PrimaryExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `UnaryExpression` labeled alternative
	 * in {@see GrammarParser::unary()}.
	 *
	 * @param Context\UnaryExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryExpression(Context\UnaryExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::arrayRow()}.
	 *
	 * @param Context\ArrayRowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayRow(Context\ArrayRowContext $context);

	/**
	 * Visit a parse tree produced by the `GroupedExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\GroupedExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGroupedExpression(Context\GroupedExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `FloatExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\FloatExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFloatExpression(Context\FloatExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `IntExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\IntExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntExpression(Context\IntExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `RuneExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\RuneExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRuneExpression(Context\RuneExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `StringExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\StringExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStringExpression(Context\StringExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ReferenceExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\ReferenceExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReferenceExpression(Context\ReferenceExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `BoolExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\BoolExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoolExpression(Context\BoolExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `NilExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\NilExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNilExpression(Context\NilExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `FunctionCallExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\FunctionCallExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionCallExpression(Context\FunctionCallExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\ArrayExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayExpression(Context\ArrayExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ReferenceValueExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\ReferenceValueExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReferenceValueExpression(Context\ReferenceValueExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ReferenceArrayExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\ReferenceArrayExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReferenceArrayExpression(Context\ReferenceArrayExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayAccessExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\ArrayAccessExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAccessExpression(Context\ArrayAccessExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `SliceInitExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\SliceInitExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSliceInitExpression(Context\SliceInitExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ArrayInitExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\ArrayInitExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayInitExpression(Context\ArrayInitExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `MatrixInitExpression` labeled alternative
	 * in {@see GrammarParser::primary()}.
	 *
	 * @param Context\MatrixInitExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMatrixInitExpression(Context\MatrixInitExpressionContext $context);

	/**
	 * Visit a parse tree produced by the `ParameterList` labeled alternative
	 * in {@see GrammarParser::params()}.
	 *
	 * @param Context\ParameterListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParameterList(Context\ParameterListContext $context);

	/**
	 * Visit a parse tree produced by the `ParamDecl` labeled alternative
	 * in {@see GrammarParser::param()}.
	 *
	 * @param Context\ParamDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParamDecl(Context\ParamDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::returnSpec()}.
	 *
	 * @param Context\ReturnSpecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnSpec(Context\ReturnSpecContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::returnType()}.
	 *
	 * @param Context\ReturnTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReturnType(Context\ReturnTypeContext $context);

	/**
	 * Visit a parse tree produced by the `ArgumentList` labeled alternative
	 * in {@see GrammarParser::args()}.
	 *
	 * @param Context\ArgumentListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArgumentList(Context\ArgumentListContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::idList()}.
	 *
	 * @param Context\IdListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdList(Context\IdListContext $context);
}