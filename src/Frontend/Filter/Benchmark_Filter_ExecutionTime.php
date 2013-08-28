<?php
/**
 *	Benchmark_Filter_ExecutionTime.php
 *
 *	@author		{$author}
 *	@package	Benchmark
 *	@version	$Id$
 */

/**
 *	�¹Ի��ַ�¬�ե��륿�μ���
 *
 *	@author		{$author}
 *	@access		public
 *	@package	Benchmark
 */
class Benchmark_Filter_ExecutionTime extends Ethna_Filter
{
	/**#@+
	 *	@access	private
	 */

	/**
	 *	@var	int		���ϻ���
	 */
	var	$stime;

	/**#@-*/


	/**
	 *	�¹����ե��륿
	 *
	 *	@access	public
	 */
	function preFilter()
	{
		$stime = explode(' ', microtime());
		$stime = $stime[1] + $stime[0];
		$this->stime = $stime;
	}

	/**
	 *	���������¹����ե��륿
	 *
	 *	@access	public
	 *	@param	string	$action_name	�¹Ԥ���륢�������̾
	 *	@return	string	null:���ｪλ (string):�¹Ԥ��륢�������̾���ѹ�
	 */
	function preActionFilter($action_name)
	{
		return null;
	}

	/**
	 *	���������¹Ը�ե��륿
	 *
	 *	@access	public
	 *	@param	string	$action_name	�¹Ԥ��줿���������̾
	 *	@param	string	$forward_name	�¹Ԥ��줿��������󤫤�������
	 *	@return	string	null:���ｪλ (string):����̾���ѹ�
	 */
	function postActionFilter($action_name, $forward_name)
	{
		return null;
	}

	/**
	 *	�¹Ը�ե��륿
	 *
	 *	@access	public
	 */
	function postFilter()
	{
		$etime = explode(' ', microtime());
		$etime = $etime[1] + $etime[0];
		$time   = round(($etime - $this->stime), 4);

		print "\n<!-- page was processed in $time seconds -->\n";
	}
}
?>
